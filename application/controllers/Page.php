<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function admin(){
      if($this->session->userdata('level')==='1'){
          $this->load->view('admin/data_user');
      }else{
          echo "Access Denied";
      }
 
  }
 
  function staff(){
    if($this->session->userdata('level')==='2'){
      $this->load->view('staff/data_user');
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    if($this->session->userdata('level')==='3'){
      $this->load->view('author/data_user');
    }else{
        echo "Access Denied";
    }
  }
 
}