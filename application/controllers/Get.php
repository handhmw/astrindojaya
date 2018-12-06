<?php
class Get extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('md_get');
	}
	function index(){
		$this->load->view('admin/getview');
	}

	function get_karyawan(){
		$kode = $this->input->post('kode');
		$data = $this->md_get->get_karyawan_bykode($kode);
		echo json_encode($data);
	}
}