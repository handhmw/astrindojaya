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

  public function report_manual()
  {

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('PT. Astrindo Senayasa');
    $pdf->SetTitle('Laporan Data Karyawan');
    $pdf->SetSubject('Karyawan Percobaan');

    //header Data
    // $pdf->SetHeaderData('logo.jpg',30,'Laporan Karyawan','Karyawan Percobaan',array(203, 58, 44),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));


    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP + 10,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',10,'',true);

    $pdf->AddPage('L');

    $html=
      '<div>
        <h1 align="center">DATA KARYAWAN PERCOBAAN</h1>
        <h5 align="center">PT. Astrindo Senayasa</h5><br>
        <p>ID Karyawan      : </p>
        <p>Ditunjukan Untuk : HRD Manager</p>
        <p>Keterangan       : ................ </p>


        <table border="1">
          <tr>
            <th style="width:120px" align="center">Nama Lengkap</th>
            <th style="width:60px" align="center">NIK</th>
            <th style="width:110px" align="center">Departemen</th>
            <th style="width:110px" align="center">Jabatan</th>
            <th style="width:110px" align="center">Jenis</th>
            <th style="width:90px" align="center">Tgl. Mulai</th>
            <th style="width:90px" align="center">Tgl. Selesai</th>
            <th style="width:50px" align="center">Tahap</th>
            <th style="width:90px" align="center">Catatan HR</th>
            <th style="width:100px" align="center">Catatan Atasan</th>
          </tr>';

        $html .= '<tr>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                    <td style="height:180px"></td>
                 </tr>';

          $html .='
            </table><br>
            <p>HRD Manager</p><br><br><br>
            <p>( .................... )</p>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('contoh_report.pdf','I');
  }

  public function print_percobaan()
  {
    $id = $this->uri->segment(3);
    $ls   = array('id' => $id);
    $karyawan = $this->md_percobaan->print('tb_percobaan',$ls);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('PT. Astrindo Senayasa');
    $pdf->SetTitle('Laporan Data Karyawan');
    $pdf->SetSubject('Karyawan Percobaan');

    //header Data
    $pdf->SetHeaderData('logo.jpg',30,'Laporan Karyawan','Karyawan Percobaan',array(203, 58, 44),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));


    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP + 10,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',10,'',true);

    $pdf->AddPage('L');

    $html=
      '<div>
        <h1 align="center">DATA KARYAWAN PERCOBAAN</h1><br>
        <p>ID Karyawan      : '.$id.'</p>
        <p>Ditunjukan Untuk : HRD Manager</p>
        <p>Keterangan       :  </p>


        <table border="1">
          <tr>
            <th style="width:120px" align="center">Nama Lengkap</th>
            <th style="width:60px" align="center">NIK</th>
            <th style="width:110px" align="center">Departemen</th>
            <th style="width:110px" align="center">Jabatan</th>
            <th style="width:110px" align="center">Jenis</th>
            <th style="width:90px" align="center">Tgl. Mulai</th>
            <th style="width:90px" align="center">Tgl. Selesai</th>
            <th style="width:50px" align="center">Tahap</th>
            <th style="width:70px" align="center">Catatan HR</th>
            <th style="width:70px" align="center">Catatan Atasan</th>
          </tr>';


          //$no = 1;
          foreach($karyawan as $d){
            $html .= '<tr>';
            //$html .= '<td align="center">'.$no.'</td>';
            $html .= '<td align="center">'.$d->nama.'</td>';
            $html .= '<td align="center">'.$d->nik.'</td>';
            $html .= '<td align="center">'.$d->departemen.'</td>';
            $html .= '<td align="center">'.$d->jabatan.'</td>';
            $html .= '<td align="center">'.$d->jenis.'</td>';
            $html .= '<td align="center">'.$d->tgl_mulai.'</td>';
            $html .= '<td align="center">'.$d->tgl_selesai.'</td>';
            $html .= '<td align="center">'.$d->percobaan.'</td>';
            $html .= '<td align="center">'.$d->catatan_hr.'</td>';
            $html .= '<td align="center">'.$d->catatan_atasan.'</td>';
            $html .= '</tr>';
            //$no++;
          }


        $html .='
            </table><br>
            <p>HRD Manager</p><br><br><br>
            <p>( .................... )</p>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('laporan_karyawan_percobaan.pdf','I');

  }
}
?>
