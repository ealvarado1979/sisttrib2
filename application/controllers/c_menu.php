<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('m_usuarios');
        //$this->load->library('user_agent');
    }

    function menu()
    {
        if ($this->session->userdata('s_sisttrib')) {
            $data0['ver'] = 0;
            $this->load->view('menu/v_cabecera', $data0);
            $data1['titulo'] = 'MENU PRINCIPAL';
            $data1['sub_titulo'] = '';
            $this->load->view('menu/v_menu', $data1);
            $this->load->view('menu/v_n_acceso');
            $this->load->view('menu/v_pies');
        } else {
            redirect('c_usuarios/login/');
        }
    }
}
