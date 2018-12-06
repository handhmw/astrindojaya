<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_traindata extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('md_training');
  }

  public function print_traindata($id)
  {
    //$ls   = array('id' => $id);
    $data = array (
      'id'                => $id,
      'nama'              => $nama,
      'nik'               => $nik,
      'jabatan'           => $jabatan,
      'departemen'        => $departemen,
      'tgl_permohonan'    => $tgl_permohonan,
      'judul_training'    => $judul_training,
      'penyelenggara'     => $penyelenggara,
      'tgl_pelaksanaan'   => $tgl_pelaksanaan,
      'tempat_pelaksanaan'=> $tempat_pelaksanaan,
      'biaya'             => $biaya,
      'pembayaran'        => $pembayaran,
      'tgl_terima'        => $tgl_terima,
      'tgl_bayar'         => $tgl_bayar,
    );

    $karyawan = $this->md_training->print('tb_training',$data);

  
    // $karyawan = $this->md_training->print('tb_training',$ls);
    // $karyawan  = $this->md_training->print('tb_training');
    // $where = array('id' => $id, 'nama' => $nama);
    //$karyawan = $this->md_training->print($data);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('PT. Astrindo Senayasa');
    $pdf->SetTitle('Laporan Data Karyawan');
    $pdf->SetSubject('Karyawan Training');

    //header Data
    $pdf->SetHeaderData('logo.jpg',30,'PT. Astrindo Senayasa','Mangga Dua Square Blok G 24, Jalan Gunung Sahari Raya, Pademangan, RT.12/RW.6, Jakarta Utara, Daerah Khusus Ibukota Jakarta.',array(0, 0, 0),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));


    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP - 6,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',8,'',true);

    $pdf->AddPage('P');
    
    $html=
      '<div>
        <h1 align="center">FORM PENGAJUAN TRAINING</h1>
        <table>
          <tbody>
            <tr>
              <td width="30%"> <b>A. PEMOHON</b> </td>
            </tr>
            <tr>
              <td width="30%">    1. Nama Pemohon </td>
              <td width="1%">:</td>
              <td>'.$id.'</td>
            </tr>
            <tr>
              <td width="30%">    2. NIK </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    3. Jabatan </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    4. Departemen</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    5. Tanggal Permohonan </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td width="30%"> <b>A. DATA PERMINTANGAN TRAINING</b> </td>
            </tr>
            <tr>
              <td width="30%">    1. Judul Training</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    2. Penyelenggara</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    3. Waktu Pelaksanaan</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    4. Tempat Pelaksanaan</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td width="30%"> <b>C. BIAYA TRAINING</b> </td>
            </tr>
            <tr>
              <td width="30%">    1. Biaya</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%">    2. Cara Pembayaran</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td align="center">Tanda Tangan Pemohon</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td align="center">(........................................)</td>
            </tr>
            <tr>
              <td> Tanggal :</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td width="30%"> <b>D. KEPUTUSAN MANAJEMEN</b> </td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td align="center">Atasan Pemohon</td>
              <td></td>
              <td align="center">HRD Manager</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
            <td align="center">(........................................)</td>
              <td></td>
              <td align="center">(......................................)</td>
            </tr>
            <tr>
              <td> Tanggal :</td>
              <td width="20%"></td>
              <td> Tanggal :</td>
            </tr>
            <tr>
              <td> Setuju/Tidak Setuju(*)</td>
              <td width="20%"></td>
              <td> Setuju/Tidak Setuju(*)</td>
            </tr>
            <tr>
              <td> Komentar : </td>
              <td width="20%"></td>
              <td> Komentar : </td>
            </tr>
            <tr>
              <td>...................................................................</td>
              <td></td>
              <td>...................................................................</td>
            </tr>
            <tr>
              <td>...................................................................</td>
              <td></td>
              <td>...................................................................</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td align="center">General Manager</td>
              <td width="1%"></td>
              <td align="center">Direktur / BOD</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
            <td align="center">(........................................)</td>
              <td></td>
              <td align="center">(......................................)</td>
            </tr>
            <tr>
              <td> Tanggal :</td>
              <td width="20%"></td>
              <td> Tanggal :</td>
            </tr>
            <tr>
              <td> Setuju/Tidak Setuju(*)</td>
              <td width="20%"></td>
              <td> Setuju/Tidak Setuju(*)</td>
            </tr>
            <tr>
              <td> Komentar : </td>
              <td width="20%"></td>
              <td> Komentar : </td>
            </tr>
            <tr>
              <td>...................................................................</td>
              <td></td>
              <td>...................................................................</td>
            </tr>
            <tr>
              <td>...................................................................</td>
              <td></td>
              <td>...................................................................</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td width="30%"> <b>D. PROSES DI HRD</b> </td>
            </tr>
            <tr>
              <td width="30%"> 1. Diterima di HRD</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="30%"> 2. Pembayaran Tanggal</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td width="30%">Catatan: <br style="font-size: 6px;"> 
              - Pengujian formulir training ke HRD paling lambat 2 minggu sebelum pelaksanaan. <br style="font-size: 6px;"> 
              - Melampirkan brosur/leaflet training yang akan diikuti. <br style="font-size: 6px;"> 
              - (*) Coret salah satu.</td>
            </tr>
          </tbody>
        </table>


      

    </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('laporan_karyawan_training.pdf','I');

  }
}
?>
