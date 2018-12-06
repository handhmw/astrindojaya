<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    // Load library phpspreadsheet
    require('./excel/vendor/autoload.php');

    use PhpOffice\PhpSpreadsheet\Helper\Sample;
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    // End load library phpspreadsheet

    class Laporan extends CI_Controller {

    // Load model
    public function __construct()
    {
    parent::__construct();
    $this->load->model('md_karyawan');
    }

    // Main page
    public function index()
    {
    $karyawan = $this->md_karyawan->get_all_data();
    $data = array( 'title' => 'Laporan Exel - Data Karyawan',
    'tb_karyawan' => $karyawan
    );
    $this->load->view('admin/karyawan', $data, FALSE);
    }

    // Export ke excel
    public function export()
    {
    $karyawan = $this->md_karyawan->get_all_data();
    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();

    // Set document properties
    $spreadsheet->getProperties()->setCreator('HRD/GA - Astrindo Senayasa')
    ->setLastModifiedBy('HRD/GA - Astrindo Senayasa')
    ->setTitle('Office 2007 XLSX Test Document')
    ->setSubject('Office 2007 XLSX Test Document')
    ->setDescription('Laporan.')
    ->setKeywords('office 2007 openxml php')
    ->setCategory('Test result file');

    // Add some data
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'NAMA LENGKAP')
    ->setCellValue('B1', 'NIK')
    ->setCellValue('C1', 'JABATAN')
    ->setCellValue('D1', 'PANGKAT/GRADE')
    ->setCellValue('E1', 'DIVISI')
    ->setCellValue('F1', 'DEPARTEMEN')
    ->setCellValue('G1', 'UNIT')
    ->setCellValue('H1', 'NAMA PANGGILAN')
    ->setCellValue('I1', 'IDENTITAS')
    ->setCellValue('J1', 'JK')
    ->setCellValue('K1', 'TEMPAT LAHIR')
    ->setCellValue('L1', 'TANGGAL LAHIR')
    ->setCellValue('M1', 'KEWARGANEGARAAN')
    ->setCellValue('N1', 'AGAMA')
    ->setCellValue('O1', 'NPWP')
    ->setCellValue('P1', 'ALAMAT')
    ->setCellValue('Q1', 'TELEPON RUMAH')
    ->setCellValue('R1', 'NO. HANDPHONE')
    ->setCellValue('S1', 'TANGGAL MASUK')
    ->setCellValue('T1', 'STATUS KARYAWAN')
    ->setCellValue('U1', 'STATUS PERNIKAHAN')
    ->setCellValue('V1', 'EMAIL')
    ;

    // Miscellaneous glyphs, UTF-8
    $i=2; foreach($karyawan as $karyawan) {

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A'.$i, $karyawan->nama)
    ->setCellValue('B'.$i, $karyawan->nik)
    ->setCellValue('C'.$i, $karyawan->jabatan)
    ->setCellValue('D'.$i, $karyawan->pangkat)
    ->setCellValue('E'.$i, $karyawan->divisi)
    ->setCellValue('F'.$i, $karyawan->departemen)
    ->setCellValue('G'.$i, $karyawan->unit)
    ->setCellValue('H'.$i, $karyawan->nama_panggilan)
    ->setCellValue('I'.$i, $karyawan->identitas)
    ->setCellValue('J'.$i, $karyawan->jk)
    ->setCellValue('K'.$i, $karyawan->tempat_lahir)
    ->setCellValue('L'.$i, $karyawan->tgl_lahir)
    ->setCellValue('M'.$i, $karyawan->negara)
    ->setCellValue('N'.$i, $karyawan->agama)
    ->setCellValue('O'.$i, $karyawan->npwp)
    ->setCellValue('P'.$i, $karyawan->alamat)
    ->setCellValue('Q'.$i, $karyawan->tlp_rumah)
    ->setCellValue('R'.$i, $karyawan->no_hp)
    ->setCellValue('S'.$i, $karyawan->tgl_masuk)
    ->setCellValue('T'.$i, $karyawan->status_kerja)
    ->setCellValue('U'.$i, $karyawan->status_nikah)
    ->setCellValue('V'.$i, $karyawan->email);
    $i++;
    }

    // Rename worksheet
    $spreadsheet->getActiveSheet()->setTitle('Laporan Karyawan '.date('d-m-Y H'));

    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $spreadsheet->setActiveSheetIndex(0);

    // Redirect output to a client’s web browser (Xlsx)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Laporan Karyawan.xls"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $writer = IOFactory::createWriter($spreadsheet, 'Xls');
    $writer->save('php://output');
    exit;
    }
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */