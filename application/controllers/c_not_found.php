<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_not_found extends CI_Controller {

    function index() {
        $this->load->view('not_fount/v_not_fount');
    }

}
