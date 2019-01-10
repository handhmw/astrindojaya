<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Md_departemen extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}

	public function tampil(){
		$query = $this->db->get('tb_departemen');
                return $query->result();
        }

	public function simpan(){
		$data = [
                        'id'         => $this->input->post('id'),
                        'departemen' => $this->input->post('departemen')
		];

		$this->db->insert('tb_departemen', $data);
	}

	public function edit($id){
	        $query = $this->db->get_where('tb_departemen', ['id' => $id]);
		return $query->row();
        }
    
        public function detail($id){
                return $this->db->get_where('tb_departemen', array('id' => $id))->result();
	}

	public function update(){
		$kondisi = ['id' => $this->input->post('id')];
		$data = [
                        'id'         => $this->input->post('id'),
                        'departemen' => $this->input->post('departemen')
		];

		$this->db->update('tb_departemen', $data, $kondisi);
	}

	public function hapus($id){
		$this->db->delete('tb_departemen', ['id' => $id]);
        }
        
        public function val_departemen(){
                $this->form_validation->set_message('required',"<p style='font-size:10px; 
                margin-top: -10px;' class='text-danger'>". '{field} Tidak Boleh Kosong!'."</p>");

                $config = [
                        ['field' => 'departemen',
                        'label' => 'Nama Departemen',
                        'rules' => 'required'],
                        ];

                $this->form_validation->set_rules($config);
        }
}
?>