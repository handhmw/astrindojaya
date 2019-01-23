<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manager extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
        $this->load->model(array('md_user','md_excel','md_master','md_karyawan','md_divisi','md_kode',
                                 'md_cuti','md_dinas','md_sakit','md_percobaan','md_mpp','md_izin','md_lembur'));
        $this->load->library(array('form_validation','session','Pdf'));
        $this->load->helper(array('url','html','form','text','nominal','tanggal','tgl_indo'));
        if($this->session->userdata('username')=="") {
            redirect('login');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('login');
    }

	public function index(){  
        $data['jml']      = $this->md_karyawan->get_total_karyawan(); 
        $data['jmlb']     = $this->md_karyawan->get_total_baru();
        $data['coba']     = $this->md_percobaan->tampil();
        $data['mpp']      = $this->md_mpp->tampil();
        $data['bdy']      = $this->md_karyawan->birthday();
        $data['karyawan'] = $this->md_karyawan->tampil();
        $data['perdep']   = $this->md_master->per_dep();
        $data['perarea']  = $this->md_master->per_area();
        $data['perjns']   = $this->md_master->per_jenis();

        
        foreach($this->md_master->statistik_pengunjung()->result_array() as $gf)
        {
         $data['grafik'][]=(float)$gf['Januari'];
         $data['grafik'][]=(float)$gf['Februari'];
         $data['grafik'][]=(float)$gf['Maret'];
         $data['grafik'][]=(float)$gf['April'];
         $data['grafik'][]=(float)$gf['Mei'];
         $data['grafik'][]=(float)$gf['Juni'];
         $data['grafik'][]=(float)$gf['Juli'];
         $data['grafik'][]=(float)$gf['Agustus'];
         $data['grafik'][]=(float)$gf['September'];
         $data['grafik'][]=(float)$gf['Oktober'];
         $data['grafik'][]=(float)$gf['November'];
         $data['grafik'][]=(float)$gf['Desember'];
        } 
        
        $this->load->view('manager/index',$data);
    }

    public function izin(){
        $data['izin']   = $this->md_izin->tampil();
        $data['judul']  = "Permohonan Izin";

        $this->load->view('manager/data_izin', $data);
    }

    public function cuti(){
        $data['cuti']   = $this->md_cuti->tampil();
        $data['judul']  = "Permohonan Cuti";

        $this->load->view('manager/data_cuti', $data);
    } 

    public function sakit(){
        $data['sakit']  = $this->md_sakit->tampil();
        $data['judul']  = "Permohonan Sakit";

        $this->load->view('manager/data_sakit', $data);
    } 

    public function lembur(){
        $data['lembur'] = $this->md_lembur->tampil();
        $data['judul']  = "Permohonan Lembur";

        $this->load->view('manager/data_lembur', $data);
    } 

    public function dinas(){
        $data['dinas']  = $this->md_dinas->tampil();
        $data['judul']  = "Permohonan Perjalanan Dinas";

        $this->load->view('manager/data_dinas', $data);
    } 

    public function delete_cuti($id){
        $this->md_cuti->hapus($id);
        $this->session->set_flashdata('hapus_sukses','Data Cuti berhasil di hapus');
        redirect('manager/cuti');
    }

    public function edit_cuti($id){
        $data['judul']  = 'Edit Data Cuti';
        $data['kode']   = $this->md_kode->kode_cuti();
        $data['name']   = $this->session->userdata('name');
        $data['cuti']  = $this->md_cuti->edit($id);

        $this->load->view('manager/edit_cuti', $data);
    }

    public function update_cuti($id){
        $this->md_cuti->val_cuti();

        if($this->form_validation->run() === FALSE)
        {
            $this->edit_cuti($id);
        }
        else
        {
            $this->md_cuti->update();
            $this->session->set_flashdata('update sukses', 'Data Cuti berhasil diperbaharui');
            redirect('manager/cuti');
        }
    }

    function detail_cuti($id){
        $data['judul']  = 'Detail Permohonan Cuti';
        $data['cuti']   = $this->md_cuti->detail($id);
        $where = array('id_ct' => $id);

        $this->load->view('manager/detail_cuti',$data);
    }
}