<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_percobaan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('md_percobaan');
  }

  public function print_percobaan()
  {
    $ls       = array('id' => $id);
    $karyawan = $this->md_percobaan->print('tb_percobaan',$ls);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('PT. Astrindo Senayasa');
    $pdf->SetTitle('Laporan Data Karyawan');
    $pdf->SetSubject('Karyawan Percobaan');

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
        <h1 align="center">FORM PENILAIAN MASA PERCOBAAN</h1>
        <h2 align="center">( Operator / Staff )</h2><br><br><br><br>
        <table>
          <tbody>
            <tr>
              <td width="20%"> Nama Lengkap </td>
              <td width="1%">:</td>
              <td>'.$id.'</td>
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
              <td width="20%"> Jabatan </td>
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
              <td width="20%"> Jabatan </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Jenis </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Tanggal Mulai</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Tanggal Selesai </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Proses Ke </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Catatan HR/GA</td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
            <tr>
              <td width="20%"> Catatan Atasan </td>
              <td width="1%">:</td>
              <td>.....................................................................</td>
            </tr>
          </tbody>
        </table>

      <p>Harap diisi penilaian terhadap karyawan Saudara dan dikembalikan ke bagian HRG setelah selesai dilakukan penilaian.</p>
      <p>Penilaian dilakukan berdasarkan kriteria di bawah ini :</p>



      <table border="0.5">
        <tr>
          <td width="20px" align="center" rowspan="2"><b>NO</b></td>
          <td width="150px" align="center" rowspan="2"><b>KRITERIA</b></td>
          <td width="100px" align="center" colspan="5"><b>KATEGORI</b></td>   
          <td width="200px" align="center" rowspan="2"><b>KETERANGAN</b></td>
        </tr>
        <tr>
          <td align="center">0</td>
          <td align="center">1</td>
          <td align="center">2</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
        <tr>
          <td align="center"><b>A</b></td>
          <td> <b>GENERAL</b></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">1</td>
          <td> Disiplin</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td> Integritas</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">3</td>
          <td> Komunikasi</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">4</td>
          <td> Disiplin</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">5</td>
          <td> Integritas</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">6</td>
          <td> Komunikasi</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">7</td>
          <td> Disiplin</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center"><b>B</b></td>
          <td> <b>OBJECTIVES</b></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">1</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">2</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td align="center">3</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
          <td colspan="8"><b>  Dikembalikan he HRD Tanggal:</b></td>
      </tr>
     </table>

      

      <p>Berdasarkan hasil penilaian selama masa percobaan :</p>
      <table>
        <tbody>
          <tr>
            <td><b>Kesimpulan User :</b> </td>
          </tr>
          <tr>
              <td>1.  Karyawan LULUS masa percobaan.</td>
          </tr>
          <tr>
              <td>2.  Karyawan LULUS masa percobaan dan diangkat menjadi karyawan tetap.</td>
          </tr>
          <tr>
              <td>3.  Karyawan LULUS masa percobaan dengan kontrak 1 (satu) tahun</td>
          </tr>
          <tr>
              <td>4.  Masa percobaan diperpanjang 3 (tiga) / 6 (enam) / 12 (dua belas) *) bulan</td>
          </tr>
          <tr>
              <td>5.  Karyawan TIDAK LULUS masa percobaan.</td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td><b>Kesimpulan HR & GA :</b> </td>
          </tr>
          <tr>
              <td>1.  Karyawan LULUS masa percobaan.</td>
          </tr>
          <tr>
              <td>2.  Karyawan LULUS masa percobaan dan diangkat menjadi karyawan tetap.</td>
          </tr>
          <tr>
              <td>3.  Karyawan LULUS masa percobaan dengan kontrak 1 (satu) tahun</td>
          </tr>
          <tr>
              <td>4.  Masa percobaan diperpanjang 3 (tiga) / 6 (enam) / 12 (dua belas) *) bulan</td>
          </tr>
          <tr>
              <td>5.  Karyawan TIDAK LULUS masa percobaan.</td>
          </tr>
        </tbody>
      </table>

      <p><b>Catatan HR & GA:</b></p>
      <p>...................................................................................................</p>
      
      <p ><b>Catatan Atasan Langsung:</b></p>
      <p>...................................................................................................</p>
      
      </div>';

      $html .='
   
      <p>Jakarta, ...................., 2018</p>
      <table>
      <tr>
        <td align="center">Penilai, <br>Atasan Langsung</td>
        <td align="center">Mengetahui, <br>Karyawan</td>
        <td align="center">Catatan Tidak Langsung</td>
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
        <td align="center">(..................................)</td>
        <td align="center">(..................................)</td>
        <td align="center">(..................................)</td>
      </tr>
    </table>

      <p><b>Catatan : </b></p>
      <p>1. Objectives diisi oleh atasan langsung disesuaikan dengan pekerjaan masing-masing karyawan. Khusus untuk tim sales salah satu isi dari objectives adalah sales achievement.</p>
      <p>2. Kriteria pengisian untuk penilaian adalah sebagai berikut : </p>

      <table border="0.5">
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
          <td style="width:20px" align="center">0</td>
          <td style="width:600px"> <b>Buruk :</b> Kinerja karyawan jauh di bawah standard, tidak memenuhi semua standard/target kerja. Kinerja karyawan perlu di tinjau kembali..</td>
        </tr>
      </table>
      <p style="font-color:red";>*) Lingkari yang dipilih</p>
    </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('laporan_karyawan_percobaan.pdf','I');

  }
}
?>
