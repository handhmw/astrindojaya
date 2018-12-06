<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_penilaian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf');
    // $this->load->model('md_penilaian');
  }

  public function print_penilaian()
  {
    // $id = $this->uri->segment(3);
    // $ls   = array('id' => $id);
    // $karyawan = $this->md_penilaian->print('tb_penilaian',$ls);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('PT. Astrindo Senayasa');
    $pdf->SetTitle('Laporan Data Karyawan');
    $pdf->SetSubject('Karyawan penilaian');

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

    $pdf->SetFont('helvetica','',6,'',true);

    $pdf->AddPage('P');
    
    $html=
      '<div>
        <h1 align="center">FORM PENILAIAN TAHUNAN KARYAWAN</h1>
        <table>
          <tbody>
            <tr>
              <td width="20%"> Nama Lengkap </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> NIK </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Departemen</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Tanggal Masuk </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Jabatan </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Penilai (Atasan Langsung)</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Jabatan Penilai</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
          </tbody>
        </table>

      <p><b>PETUNJUK PENILAIAN</b></p>
      <p>Nilai dibawah ini digunakan untuk Penilaian Karyawan:</p>
      <table>
        <tr>
          <td style="width:20px" align="center">4</td>
          <td style="width:600px"> <b>Sangat Baik :</b> Secara keseluruhan kinerja Karyawan istimewa dan melampaui standard/target yang diberikan. Berjasa memberi nilai tambah suatu hasil nilai kerja, menghasilkan karya yang meningkatkan produktifitas/kualitas secara nyata.</td>
        </tr>
        <tr>
          <td style="width:20px" align="center">3</td>
          <td style="width:600px"> <b>Baik :</b>  Kinerja Karyawan sesuai/sedikit di atas standard/target yang ditetapkan. Target terlampaui. Bisa diandalkan dan diberi tanggung jawab lebih.</td>
        </tr>
        <tr>
          <td style="width:20px" align="center">2</td>
          <td style="width:600px"> <b>Cukup :</b> Kinerja Karyawan sedikit di bawah standard. Beberapa target tidak tercapai. Masih memerlukan bantuan/arahan/bimbingan.</td>
        </tr>
        <tr>
          <td style="width:20px" align="center">1</td>
          <td style="width:600px"> <b>Sangat Kurang :</b> Kinerja Karyawan di bawah standard, hampir tidak memenuhi semua standard/target kerja. Membutuhkan bantuan/bimbingan/arahan yang sangat intensif.</td>
        </tr>
        <tr>
          <td style="width:20px" align="center">-1</td>
          <td style="width:600px"> <b>Buruk :</b> Kinerja karyawan jauh di bawah standard, tidak memenuhi semua standard/target kerja. Kinerja karyawan perlu di tinjau kembali.</td>
        </tr>
      </table>

      <p><b>A. General Kriteria</b></p>
      <p style="font-size: 6px;">Dibawah ini adalah beberapa hal yang harus diperhatikan oleh semua karyawan. Berikan penilaian Anda sebagai Karyawan lalu diskusikan dengan Ataan Anda
      sampai menghasilkan nilai akhir yang disetujui kedua belah pihak. Atasan memberikan umpan balik bila ada. Bobot bagian ini adalah 40%.</p>

      <table border="0.5">
        <tr>
          <td width="20px" align="center" rowspan="2"><b>No</b></td>
          <td width="510px" align="center" rowspan="2"><br><b>General Kriteria</b></td>
          <td width="90px" align="center" colspan="2"><b>Nilai</b></td>   
        </tr>
        <tr>
          <td align="center" valign="middle">Karyawan</td>
          <td align="center" >Atasan <br>Langsung</td>
        </tr>
        <tr>
        <td align="center">1</td>
          <td> <b>INTEGRITAS</b><br> Kejujuran dalam melaksanakan tugas & tanggung jawab termasuk didalamnya kosistensi & tidak melakukan kecurangan yang dapat merugikan  perusahaan <i><br style="font-size: 6px;"> 
           Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> 1. <br> 2. <br> 3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td> <b>KOMUNIKASI</b><br> Kemampuan untuk menyampaikan berbagai hal yang menyangkut pekerjaan & berinteraksi secara jelas serta dapat dipahami oleh semua pihak <i><br style="font-size: 6px;">
           Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> 1. <br> 2. <br> 3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td rowspan="2" align="center">3</td>
          <td> <b>KEMAMPUAN MEMECAHKAN MASALAH & MEMBUAT KEPUTUSAN</b><br> a. menganalisa, menangani, dan memecahkan masalah-masalah sulit <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i>. <br> a.1. <br> a.2. <br> a.3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td> b. membuat keputusan <br>
           Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.<br> b.1. <br> b.2. <br> b.3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td rowspan="2" align="center">4</td>
          <td> <b>KERJASAMA</b><br> a. kemampuan untuk kerjasama dengan intern dept <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> a.1. <br> a.2. <br> a.3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td> b. kemampuan untuk kerjasama dengan intra dept <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> b.1. <br> b.2. <br> b.3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">5</td>
          <td> <b>INISIATIF</b><br> Melakukan pengembangan terhadap hal-hal yang sudah menjadi lebih efektif & efisien <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> 1. <br> 2. <br> 3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td rowspan="2" align="center">6</td>
          <td> <b>INOVASI</b><br> Mencipatakan ide-ide baru yang belum pernah ada sebelumnya <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> a.1. <br> a.2. <br> a.3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td> b. pelaksanaan atas ide baru <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> b.1. <br> b.2. <br> b.3.</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">7</td>
          <td> <b>DISIPLIN</b><br> Penilaian dilakukan terhadap perilaku Karyawan dalam memenuhi standar yang ditetapkan Perusahaan
          sebagaimana tercantum dalam peraturan Perusahaan maupun aturan lain yang berlaku di Perusahaan, Misal: penilaian mengenai hari
          produktif dan ketepatan waktu yang ditunjukan Karyawan berdasarkan catatan waktu, kepatuhan terhadap peraturan Perusahaan. <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> 1. <br> 2. <br> 3. </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">8</td>
          <td> <b>LAPORAN</b><br> Menyampaikan laporan kerjasama secara: <i><br style="font-size: 6px;"> 
          Sebutkan 3 implementasi yang telah dilakukan untuk hal tersebut diatas.</i> <br> 1. <br> 2. <br> 3. </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2"><b> Total Nilai:</b></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2"><b> Rata-Rata Nilai:</b></td>
          <td></td>
          <td></td>
        </tr>
     </table>

      

    </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('laporan_karyawan_penilaian.pdf','I');

  }
}
?>
