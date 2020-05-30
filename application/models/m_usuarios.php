<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_usuarios extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function m_login($user, $pass)
    {
        $array = array('a.usuario' => $user, 'a.estado' => 0);
        $this->db->select('a.usuario,a.nombre,a.id_area,b.descripcion_area,c.id_sede,c.descripcion_sede,a.password');
        $this->db->from('c_usuarios a');
        $this->db->join('c_area b', 'b.id_area=a.id_area');
        $this->db->join('c_sede c', 'c.id_sede=a.id_sede');
        $this->db->where($array);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0) {
            $consulta = $consulta->row();
            $pass1 = $consulta->password;
            if (password_verify($pass, $pass1)) {
                $datosusuarios = array(
                    's_sisttrib' => $consulta->usuario,
                    's_nombre' => $consulta->nombre,
                    's_id_area' => $consulta->id_area,
                    's_area' => $consulta->descripcion_area,
                    's_id_sede' => $consulta->id_sede,
                    's_sede' => $consulta->descripcion_sede
                );
                $this->session->set_userdata($datosusuarios);
                $respuesta = array(
                    'respuesta' => 'exitoso',
                    'usuario' => $this->session->userdata('s_sisttrib')
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        return $respuesta;
    }

    function disponiblidad_user($user)
    {
        $this->db->select("usuario");
        $this->db->from('c_usuarios');
        $this->db->where('usuario', $user);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0) {
            return 1;
        } else {
            return 2;
        }
    }

    function dato_tabla_usuarios($draw, $start, $length, $orden)
    {
        $oficina = $this->session->userdata('workplace');
        if ($this->session->userdata('ulevel') == 55 || $this->session->userdata('ulevel') == 22) {
            $opcion = "u.workplace='$oficina'";
        } elseif ($this->session->userdata('ulevel') == 44) {
            $opcion = "u.workplace='$oficina '";
        } else {
            $opcion = ' 1=1';
        }

        $output = array();

        $sql = "SELECT a.usuario,a.nombre,IF(a.estado=0,'ALTA','BAJA') estados,a.estado,
                    b.id_area,b.descripcion_area,
                    c.id_sede,c.descripcion_sede
                FROM c_usuarios a
                    INNER JOIN c_area b ON b.id_area=a.id_area
                    INNER JOIN c_sede c ON c.id_sede=a.id_sede
                WHERE $opcion AND $opcion $orden LIMIT $start,$length";

        $consulta = $this->db->query($sql);
        $total2 = $consulta->num_rows();
        /* totales */
        $sql1 = "SELECT a.usuario FROM c_usuarios a WHERE 1=1 AND $opcion;";
        $consulta1 = $this->db->query($sql1);
        $total = $consulta1->num_rows();
        // parametros de la tabla
        $contador = 1;
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result_array() as $row) {
                $sub_array = array();
                $sub_array[] = $contador++;
                $sub_array[] = $row["usuario"];
                $sub_array[] = $row["nombre"];
                $sub_array[] = $row["descripcion_area"];
                if ($row['estado'] == 0) {
                    $sub_array[] = '<button type="button" name="estado" id="' . $row["usuario"] . '" class="btn btn-success btn-xs cambio_estado"><i class="fa fa-users" aria-hidden="true"></i>' . ' ' . $row["estados"] . '</button>';
                } else {
                    $sub_array[] = '<button type="button" name="estado" id="' . $row["usuario"] . '" class="btn btn-danger btn-xs cambio_estado"><i class="fa fa-users" aria-hidden="true"></i>' . ' ' . $row["estados"] . '</button>';
                }
                $data[] = $sub_array;
            }
        } else {
            $data = 0;
        }
        $consulta->free_result();
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total2,
            "recordsFiltered" => $total,
            "data" => $data
        );

        return $output;
    }

    function estado($user)
    {
        $sql = "SELECT estado FROM c_usuarios where usuario='$user'";
        $consulta = $this->db->query($sql);
        $row = $consulta->row();
        $estado = $row->estado;

        if ($estado == 0) {
            $update = "update c_usuarios set estado=1 where usuario='$user'";
        } else {

            $update = "update c_usuarios set estado=0 where usuario='$user'";
        }
        $consulta2 = $this->db->query($update);
        if ($consulta2) {
            return 2;
        } else {
            return 3;
        }
    }


    function nuevo_usuarios($n_usuario, $pass, $nombre, $id_sede, $id_area, $usuario)
    {
        $opciones = array(
            'cost' => 12
        );
        $password_hashed = password_hash($pass, PASSWORD_BCRYPT, $opciones);
        $data = array(
            'id_admin' => 'NULL',
            'usuario' => "$n_usuario",
            'nombre' => "$nombre",
            'password' => "$password_hashed",
            'id_area' => $id_area,
            'editado' => 'NOW()',
            'estado' => 0,
            'id_sede' => " $id_sede",
        );

        $consulta = $this->db->insert('c_usuarios', $data);
        if ($consulta) {
            return 2;
        } else {
            return 3;
        }
    }
}
