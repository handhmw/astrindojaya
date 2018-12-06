<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model(array('md_user','md_excel','md_master','md_karyawan','md_permohonan','md_kode'));
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form','text'));
        //$this->load->library('Excel');
        if($this->session->userdata('username')=="") {
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('login');
    }

	public function index()
	{
		$this->load->view('staff/index');
    }
}
