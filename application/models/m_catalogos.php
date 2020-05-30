<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_catalogos extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function version()
    {
        $this->db->select("CONCAT_WS(' . ',mayor,menor,revision) valores");
        $this->db->from('c_versiones');
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0) {
            $row = $consulta->row();
            $this->session->set_userdata('s_version', $row->valores);
        } else {
            $this->session->set_userdata('s_version', '01.00.00');
        }
    }

    function c_sede($id, $id_sede)
    {
        $this->db->select("id_sede,descripcion_sede");
        $this->db->from('c_sede');
        if ($id) {
            $this->db->where('id_sede', $id);
        } else {
            if ($id_sede != 1) {
                $this->db->where('id_sede', $id_sede);
            }
        }
        $this->db->order_by('descripcion_sede', 'ASC');
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $row) {
                $data[] = $row;
            }
        } else {
            $data = 0;
        }
        $consulta->free_result();
        return $data;
    }

    function c_area($id)
    {
        $this->db->select("id_area,descripcion_area");
        $this->db->from('c_area');
        if ($id) {
            $this->db->where('id_area', $id);
        }
        $this->db->order_by('descripcion_area', 'ASC');
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $row) {
                $data[] = $row;
            }
        } else {
            $data = 0;
        }
        $consulta->free_result();
        return $data;
    }
}
