<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_usuarios extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_usuarios');
		$this->load->model('m_catalogos');
		//$this->load->library('user_agent');
	}

	public function login()
	{
		if ($this->session->userdata('s_sisttrib')) {
			redirect('c_menu/menu');
		} else {
			$this->m_catalogos->version();
			$this->load->view('v_login');
			
		}
	}

	function validacion_user()
	{
		$user = $this->security->xss_clean(trim($this->input->post('usuario')));
		$pass = $this->security->xss_clean(trim($this->input->post('password')));
		$accion = $this->m_usuarios->m_login($user, $pass);
		echo json_encode($accion);
	}

	function c_menu()
	{
		redirect('c_menu/menu');
	}

	function nuevo_usuario()
	{
		if ($this->session->userdata('s_sisttrib')) {
			$data0['ver'] = 1;
			$this->load->view('menu/v_cabecera', $data0);
			$data1['titulo'] = 'CONTROL DE USUARIO';
			$data1['sub_titulo'] = '';
			$data1['s_active'] = array('', '', '', '', '', '', '', '', '', '', '', 'active', '', '', '', '');
			$this->load->view('menu/v_menu', $data1);
			$dato['nada'] = 0;
			$dato['c_sede'] = $this->m_catalogos->c_sede('', $this->session->userdata('s_id_sede'));
			$dato['c_areas'] = $this->m_catalogos->c_area('');
			/* if ($this->uri->segment(3)) {
                if ($this->uri->segment(3) == 1) {
                    $dato['msn'] = '<span class="bg-warning msn">Error registro ya existe....!</span>';
                } elseif ($this->uri->segment(3) == 2) {
                    $dato['msn'] = '<span class="bg-primary msn">Datos guardado con exito....!</span>';
                } elseif ($this->uri->segment(3) == 3) {
                    $dato['msn'] = '<span class="bg-danger msn">Error....!</span>';
                }
            } else {
                $dato['msn'] = '';
			}*/
			//$this->output->enable_profiler(TRUE);
			$this->load->view('usuario/v_control_user', $dato);
			$this->load->view('menu/v_pies');
		} else {
			redirect('c_usuarios/login/');
		}
	}

	function disponibilidad_usuario()
	{
		if ($this->input->is_ajax_request()) {
			$nick = $this->input->post("nick");
			$valores = $this->m_usuarios->disponiblidad_user($nick);
			echo $valores;
		}
	}

	function tabla_usuario_consulta()
	{
		if ($this->input->is_ajax_request()) {
			$draw = intval($this->input->post("draw"));
			// limites 
			$start = intval($this->input->post("start"));
			$length = intval($this->input->post("length"));
			// ordenar las columnas

			if (isset($_POST["order"])) {
				$orden = ' ORDER BY ' . $_POST['order']['0']['column'] . ' ' . $_POST['order']['0']['dir'] . ' ';
			} else {
				$orden = ' ORDER BY a.nombre ASC ';
			}

			$valores = $this->m_usuarios->dato_tabla_usuarios($draw, $start, $length, $orden);
			echo json_encode($valores);
		}
	}

	function cambio_estado()
	{
		if ($this->input->is_ajax_request() && $this->input->post('id')) {
			$id = $this->input->post('id');
			$accion = $this->m_usuarios->estado($id);
			echo $accion;
		}
	}

	function nuevos_user()
	{
		if ($this->session->userdata('s_sisttrib')) {
			$usuario = $this->input->post("user_name");
			$nombre = $this->input->post("nombre1");
			$id_sede = $this->input->post("id_sede");
			$id_area = $this->input->post("id_area");
			$pass = $this->input->post("pass_1");
			$accion = $this->m_usuarios->nuevo_usuario($usuario, $pass, $nombre, $id_sede, $id_area, $this->session->userdata('s_sisttrib'));
			//redirect('c_usuarios/control_user/' . $accion);
		} else {
			redirect('c_usuarios/login');
		}
	}
}
