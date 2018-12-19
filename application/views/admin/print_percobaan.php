<?php
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
        $i=0;
            
            $html='<h3>Data Karyawan Percobaan</h3>
                    <table border="0.5" bgcolor="#666666">
                        <tr align="center" bgcolor="#ffffff">
                            <th >No</th>
                            <th >Nama Pemohon</th>
                            <th >NIK</th>
                            <th>Departemen</th>
                            <th >Jabatan</th>
                            <th>Tgl Masuk</th>
                            <th>Jenis</th>
                            <th >Tgl Mulai</th>
                            <th >Tgl Selesai</th>
                            <th >Percobaan</th>
                            <th>Catatan HR/GA</th>
                            <th>Catatan Atasan</th>
                        </tr>';
            foreach ($karyawan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td align="center">'.$row['nama_cb'].'</td>
                            <td> '.$row['nik_cb'].'</td>
                            <td align="center"> '.$row['dep_cb'].'</td>
                            <td> '.$row['jabatan_cb'].'</td>
                            <td align="center">'.$row['tgl_masuk_cb'].'</td>
                            <td align="center">'.$row['jenis_cb'].'</td>
                            <td align="center">'.$row['tgl_mulai_cb'].'</td>
                            <td align="center">'.$row['tgl_selesai_cb'].'</td>
                            <td> '.$row['percobaan_cb'].'</td>
                            <td> '.$row['catatan_hr_cb'].'</td>
                            <td> '.$row['catatan_atasan_cb'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            ob_end_clean();
            $pdf->Output('laporan_percobaan.pdf', 'I');
?>
