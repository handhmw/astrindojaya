<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');

		// <tbody>
        //                 <tr>
        //                     <th colspan="2" class="text-nowrap" width="150"><b>A. DATA PEMOHON</b></th>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Departemen </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['dep_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Nama Pemohon </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['nama_pemohon_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Jabatan Pemohon </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['jabatan_pemohon_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <th></th>
        //                 </tr>
        //                 <tr>
        //                     <th colspan="2" class="text-nowrap" width="150"><b>B. KLASIFIKASI KEBUTUHAN</b></th>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Jabatan </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['jabatan_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Lokasi </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['lokasi_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Waktu </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['waktu_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Status </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['status_kerja_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Jumlah </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['jumlah_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Tanggal </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['tanggal_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Dasar Permohonan </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['dasar_permohonan_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Sumber Rekrutmen </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['sumber_rekrutmen_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Ringkasan Tugas </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['ringkasan_tugas_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <th></th>
        //                 </tr>
        //                 <tr>
        //                     <th colspan="2" class="text-nowrap" width="150"><b>C. PERSYARATAN</b></th>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Gajih </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['gajih_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Jenis Kelamin </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['jk_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Pendidikan </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['pendidikan_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Jurusan </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['jurusan_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Pengalaman Kerja </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['pengalaman_kerja_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Bidang </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['bidang_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Syarat Lainnya </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['syarat_lain_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Keterampilan </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['keterampilan_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <th></th>
        //                 </tr>
        //                 <tr>
        //                     <th colspan="2" class="text-nowrap" width="150"><b>D. TANGGAL BERGABUNG</b></th>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Tanggal Bergabung </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['tgl_bergabung_pmhn'].'</td>
        //                 </tr>
        //                 <tr>
        //                     <th></th>
        //                 </tr>
        //                 <tr>
        //                     <th colspan="2" class="text-nowrap" width="150"><b>E. LAMPIRAN</b></th>
        //                 </tr>
        //                 <tr>
        //                     <td width="20%"> Office Equipment </td>
        //                     <td width="1%">:</td>
        //                     <td>'.$row['office_equipment_pmhn'].'</td>
        //                 </tr>
        //             </tbody>
	}
}
