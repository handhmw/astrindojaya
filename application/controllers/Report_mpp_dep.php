<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_mpp_dep extends CI_Controller
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

    $pdf->SetFont('helvetica','',6,'',true);

    $pdf->AddPage('P');
    
    $html=
      '<div>
        <h1 align="center">MAN POWER PLANNING</h1>

      <table border="0.5">
        <tr>
          <td colspan="10" align="center" > Total permintaan per Jabatan untuk setiap Departemen di masing-masing area</td>
          
        </tr>
        <tr>
          <td width="20px" align="center">No.</td>
          <td width="35px" align="center">Area</td>
          <td width="50px" align="center">Departemen</td>
          <td width="150px" align="center">Jabatan</td>
          <td width="60px" align="center">Januari 2018</td>
          <td width="60px" align="center">Februari 2018</td>
          <td width="60px" align="center">Maret 2018</td>
          <td width="60px" align="center">April 2018</td>
          <td width="60px" align="center">Mei 2018</td>
          <td width="75.5px" align="center">Grand Total</td>
        </tr>
        <tr>
          <td align="center">1</td>
          <td align="center">100</td>
          <td> Logistik</td>
          <td> Helper</td>
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
          <td> Corporate Account Executive</td>
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
          <td> Sales Executive (Component)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">4</td>
          <td align="center">300</td>
          <td> Sales</td>
          <td> Sales Manager - Yogyakarta</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">5</td>
          <td align="center">500</td>
          <td> IT</td>
          <td> Admin Technical Support - Bali</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">6</td>
          <td></td>
          <td> Sales</td>
          <td> Sales Executive - Bali</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">7</td>
          <td align="center">600</td>
          <td> Sales</td>
          <td> Admin Sales - Semarang</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">8</td>
          <td align="center">700</td>
          <td> Logistik</td>
          <td> Admin Logistik Makasar</td>
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
          <td> QA</td>
          <td> Admin Service & IT Support Makassar</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">10</td>
          <td></td>
          <td> Sales</td>
          <td> Admin Sales Makassar</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">11</td>
          <td></td>
          <td></td>
          <td> Sales Executive - Makassar</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">12</td>
          <td align="center">800</td>
          <td> Sales</td>
          <td> Sales Manager Medan</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">13</td>
          <td align="center">910</td>
          <td> Accounting</td>
          <td> Accounting Based in Banjarmasin</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">14</td>
          <td align="center">HO</td>
          <td> Accounting</td>
          <td> Accounting</td>
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
          <td> Audit</td>
          <td> Audit Manager</td>
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
          <td> Finance</td>
          <td> Admin Finance</td>
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
          <td align="center">18</td>
          <td></td>
          <td></td>
          <td> Finance AP</td>
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
          <td> Receptionist</td>
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
          <td> Logistik Supervisor</td>
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
          <td> Design Graphic</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">22</td>
          <td></td>
          <td></td>
          <td> Marketing Communication</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">23</td>
          <td></td>
          <td></td>
          <td> Marketing Communication Event & Media</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">24</td>
          <td></td>
          <td></td>
          <td> Marketing Communication Manager</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">25</td>
          <td></td>
          <td></td>
          <td> Marketing Specialist</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">26</td>
          <td></td>
          <td></td>
          <td> Product Manager</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">27</td>
          <td></td>
          <td> Sales</td>
          <td> Branch Manager - Medan</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">28</td>
          <td></td>
          <td></td>
          <td> Corporate Account Executive</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">29</td>
          <td></td>
          <td></td>
          <td> Pre Sales Engineer</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">30</td>
          <td></td>
          <td></td>
          <td> SPB</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="4"> Grand Total</td>
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

    $pdf->Output('laporan_mpp_dep.pdf','I');

  }
}
?>
