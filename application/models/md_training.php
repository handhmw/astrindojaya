<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Md_training extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function tampil()
	{
		$query = $this->db->get('tb_training');
		return $query->result();
	}

	public function simpan()
	{
		$data = [
                        'id_tr'                => $this->input->post('id_tr'),
                        'nama_pemohon_tr'      => $this->input->post('nama_pemohon_tr'),
                        'nik_pemohon_tr'       => $this->input->post('nik_pemohon_tr'),
                        'jabatan_pemohon_tr'   => $this->input->post('jabatan_pemohon_tr'),
                        'dep_pemohon_tr'       => $this->input->post('dep_pemohon_tr'),
                        'tgl_permohonan_tr'    => $this->input->post('tgl_permohonan_tr'),
                        'judul_training_tr'    => $this->input->post('judul_training_tr'),
                        'penyelenggara_tr'     => $this->input->post('penyelenggara_tr'),
                        'tgl_pelaksanaan_tr'   => $this->input->post('tgl_pelaksanaan_tr'),
                        'tempat_pelaksanaan_tr'=> $this->input->post('tempat_pelaksanaan_tr'),
                        'biaya_tr'             => $this->input->post('biaya_tr'),
                        'pembayaran_tr'        => $this->input->post('pembayaran_tr'),
                        'tgl_terima_tr'        => $this->input->post('tgl_terima_tr'),
                        'tgl_bayar_tr'         => $this->input->post('tgl_bayar_tr')
		];

		$this->db->insert('tb_training', $data);
	}

	public function edit($id_tr)
	{
	        $query = $this->db->get_where('tb_training', ['id_tr' => $id_tr]);
		return $query->row();
        }
    
        public function detail($id_tr)
	{
                return $this->db->get_where('tb_training', array('id_tr' => $id_tr))->result();
	}

	public function update()
	{
		$kondisi = ['id_tr' => $this->input->post('id_tr')];
		
		$data = [
                        'id_tr'                => $this->input->post('id_tr'),
                        'nama_pemohon_tr'      => $this->input->post('nama_pemohon_tr'),
                        'nik_pemohon_tr'       => $this->input->post('nik_pemohon_tr'),
                        'jabatan_pemohon_tr'   => $this->input->post('jabatan_pemohon_tr'),
                        'dep_pemohon_tr'       => $this->input->post('dep_pemohon_tr'),
                        'tgl_permohonan_tr'    => $this->input->post('tgl_permohonan_tr'),
                        'judul_training_tr'    => $this->input->post('judul_training_tr'),
                        'penyelenggara_tr'     => $this->input->post('penyelenggara_tr'),
                        'tgl_pelaksanaan_tr'   => $this->input->post('tgl_pelaksanaan_tr'),
                        'tempat_pelaksanaan_tr'=> $this->input->post('tempat_pelaksanaan_tr'),
                        'biaya_tr'             => $this->input->post('biaya_tr'),
                        'pembayaran_tr'        => $this->input->post('pembayaran_tr'),
                        'tgl_terima_tr'        => $this->input->post('tgl_terima_tr'),
                        'tgl_bayar_tr'         => $this->input->post('tgl_bayar_tr')
                ];

		$this->db->update('tb_training', $data, $kondisi);
	}

	public function hapus($id_tr)
	{
		$this->db->delete('tb_training', ['id_tr' => $id_tr]);
        }

        public function print($tabel,$id_tr)
        {

                $query = $this->db->get_where('tb_training', ['id_tr' => $id_tr]);
		return $query->result();
        }
        
        public function val_training()
        {
                $this->form_validation->set_message('required',"<p style='font-size:10px; 
                margin-top: -10px;' class='text-danger'>". '{field} Tidak Boleh Kosong!'."</p>");

                $config = [
                        ['field' => 'nama_pemohon_tr',
                        'label' => 'Nama Pemohon',
                        'rules' => 'required'],

                        ['field' => 'nik_pemohon_tr',
                        'label' => 'NIK',
                        'rules' => 'required'],

                        ['field' => 'jabatan_pemohon_tr',
                        'label' => 'Jabatan',
                        'rules' => 'required'],

                        ['field' => 'dep_pemohon_tr',
                        'label' => 'Departemen',
                        'rules' => 'required'],

                        ['field' => 'tgl_permohonan_tr',
                        'label' => 'Tanggal Permohonan',
                        'rules' => 'required'],

                        ['field' => 'judul_training_tr',
                        'label' => 'Judul Training',
                        'rules' => 'required'],

                        ['field' => 'penyelenggara_tr',
                        'label' => 'Penyelenggara',
                        'rules' => 'required'],

                        ['field' => 'tgl_pelaksanaan_tr',
                        'label' => 'Tanggal Pelaksanaan',
                        'rules' => 'required'],

                        ['field' => 'tempat_pelaksanaan_tr',
                        'label' => 'Tempat Pelaksanaan',
                        'rules' => 'required'],

                        ['field' => 'biaya_tr',
                        'label' => 'Biaya',
                        'rules' => 'required'],
                        
                        ['field' => 'pembayaran_tr',
                        'label' => 'Pembayaran',
                        'rules' => 'required'],

                        ['field' => 'tgl_terima_tr',
                        'label' => 'Tanggal Terima',
                        'rules' => 'required'],

                        ['field' => 'tgl_bayar_tr',
                        'label' => 'Tanggal Pembayaran',
                        'rules' => 'required']
                        ];

                $this->form_validation->set_rules($config);
        }
}

?>