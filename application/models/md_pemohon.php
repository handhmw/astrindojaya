<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Md_pemohon extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function tampil()
	{
		$query = $this->db->get('tb_pemohon');
                return $query->result();
        }

	public function simpan()
	{
		$data = [
                    'id_pemohon'        => $this->input->post('id_pemohon'),
                    'nama_pemohon'      => $this->input->post('nama_pemohon'),
                    'nik_pemohon'       => $this->input->post('nik_pemohon'),
                    'jabatan_pemohon'   => $this->input->post('jabatan_pemohon'),
		];

		$this->db->insert('tb_pemohon', $data);
	}

	public function edit($id)
	{
	        $query = $this->db->get_where('tb_pemohon', ['id_pemohon' => $id]);
		return $query->row();
        }
    
        public function detail($id)
	{
                return $this->db->get_where('tb_pemohon', array('id_pemohon' => $id))->result();
	}

	public function update()
	{
		$kondisi = ['id_pemohon' => $this->input->post('id_pemohon')];
		
		$data = [
                        'id_pemohon'        => $this->input->post('id_pemohon'),
                        'nama_pemohon'      => $this->input->post('nama_pemohon'),
                        'nik_pemohon'       => $this->input->post('nik_pemohon'),
                        'jabatan_pemohon'   => $this->input->post('jabatan_pemohon'),
                ];

		$this->db->update('tb_pemohon', $data, $kondisi);
	}

	public function hapus($id)
	{
		$this->db->delete('tb_pemohon', ['id_pemohon' => $id]);
        }

        public function print($tabel,$id)
        {
                $query = $this->db->select()
                                ->from($tabel)
                                ->where($id)
                                ->get();
                return $query->result();
        }
        
        public function val_pemohon()
        {
                $this->form_validation->set_message('required',"<p style='font-size:10px; 
                margin-top: -10px;' class='text-danger'>". '{field} Tidak Boleh Kosong!'."</p>");

                $config = [
                        ['field' => 'nama_pemohon',
                        'label' => 'Nama pemohon',
                        'rules' => 'required'],

                        ['field' => 'jabatan_pemohon',
                        'label' => 'Jabatan pemohon',
                        'rules' => 'required'],
                        ];

                $this->form_validation->set_rules($config);
        }
}

?>