<?php
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // document informasi
        $pdf->SetCreator('PT. Astrindo Senayasa');
        $pdf->SetTitle('Laporan Data Karyawan');
        $pdf->SetSubject('Penilaian Karyawan');
    
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
        $i=0;
            
            $html='<h3>Data Penilaian Karyawan</h3>
                    <table border="0.5" bgcolor="#666666" cellpadding="2">
                        <tr align="center" bgcolor="#ffffff">
                            <th width="3%">No</th>
                            <th width="17%">Nama Karyawan</th>
                            <th width="6%">NIK</th>
                            <th>Departemen</th>
                            <th width="8%">Tgl Masuk</th>
                            <th width="17%">Jabatan</th>
                            <th width="17%">Nama Penilai</th>
                            <th width="19%">Jabatan Penilai</th>
                        </tr>';
            foreach ($karyawan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['nama_nl'].'</td>
                            <td align="center"> '.$row['nik_nl'].'</td>
                            <td align="center"> '.$row['dep_nl'].'</td>
                            <td align="center"> '.$row['tgl_masuk_nl'].'</td>
                            <td align="center">'.$row['jabatan_nl'].'</td>
                            <td>'.$row['nama_penilai_nl'].'</td>
                            <td>'.$row['jabatan_penilai_nl'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            ob_end_clean();
            $pdf->Output('laporan_penilaian.pdf', 'I');
?>
