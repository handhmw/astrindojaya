<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_mpp_area extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('md_mpp');
  }

  public function print_mpp()
  {
    //$ls       = array('id_pp' => $id_pp);
    //$karyawan = $this->md_mpp->print('tb_mpp',$ls);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('PT. Astrindo Senayasa');
    $pdf->SetTitle('Laporan Data Karyawan');
    $pdf->SetSubject('Man Power Planning');

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

    $pdf->SetFont('helvetica','',9,'',true);

    $pdf->AddPage('P');
    
    $html=
      '<div>
        <h1 align="center">MAN POWER PLANNING</h1>

      <table border="0.5">
        <tr>
          <td colspan="9" align="center" > Jumlah permintaan per departemen untuk setiap area</td>
          
        </tr>
        <tr>
          <td width="25px" align="center">No.</td>
          <td width="40px" align="center">Area</td>
          <td width="85.5px" align="center">Departemen</td>
          <td width="80px" align="center">Januari 2018</td>
          <td width="80px" align="center">Februari 2018</td>
          <td width="80px" align="center">Maret 2018</td>
          <td width="80px" align="center">April 2018</td>
          <td width="80px" align="center">Mei 2018</td>
          <td width="80px" align="center">Grand Total</td>
        </tr>
        <tr>
          <td align="center">1</td>
          <td align="center">100</td>
          <td> Logistik</td>
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
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">3</td>
          <td align="center">300</td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">4</td>
          <td align="center">500</td>
          <td> IT</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">5</td>
          <td></td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">6</td>
          <td align="center">600</td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">7</td>
          <td align="center">700</td>
          <td> Logistik</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">8</td>
          <td></td>
          <td> QA</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">9</td>
          <td></td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">10</td>
          <td align="center">800</td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">11</td>
          <td align="center">910</td>
          <td> Accounting</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">12</td>
          <td align="center">HO</td>
          <td> Accounting</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">13</td>
          <td></td>
          <td> Audit</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">14</td>
          <td></td>
          <td> Finance</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">15</td>
          <td></td>
          <td> HR&GA</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">16</td>
          <td></td>
          <td> Logistik</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">17</td>
          <td></td>
          <td> Marketing</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">18</td>
          <td></td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">19</td>
          <td></td>
          <td> HR&GA</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">20</td>
          <td></td>
          <td> Logistik</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">21</td>
          <td></td>
          <td> Marketing</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">21</td>
          <td></td>
          <td> Sales</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3"> Grand Total</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
     </table>

      </div>';

      $html .='
   
      <p style="text-align:right;">Jakarta, ...................., 2018</p>
    </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('laporan_mpp_area.pdf','I');

  }
}
?>
