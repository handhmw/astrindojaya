<?php
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // document informasi
        $pdf->SetCreator('PT. Astrindo Senayasa');
        $pdf->SetTitle('Laporan Data Karyawan');
        $pdf->SetSubject('Training Karyawan');
    
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
            
            $html='<h3>Data Training Karyawan</h3>
                    <table border="0.5" bgcolor="#666666" cellpadding="2">
                        <tr align="center" bgcolor="#ffffff">
                            <th >No</th>
                            <th >Nama Pemohon</th>
                            <th >NIK</th>
                            <th >Jabatan</th>
                            <th>Departemen</th>
                            <th>Tgl Permohonan</th>
                            <th>Judul Training</th>
                            <th >Penyelenggara</th>
                            <th >Tgl Penyelenggaraan</th>
                            <th >Tempat</th>
                            <th>Biaya</th>
                            <th>Pembayaran</th>
                            <th>Tgl Terima</th>
                            <th>Tgl Bayar</th>
                        </tr>';
            foreach ($karyawan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td align="center">'.$row['nama_pemohon_tr'].'</td>
                            <td> '.$row['nik_pemohon_tr'].'</td>
                            <td> '.$row['jabatan_pemohon_tr'].'</td>
                            <td align="center"> '.$row['dep_pemohon_tr'].'</td>
                            <td align="center">'.$row['tgl_permohonan_tr'].'</td>
                            <td align="center">'.$row['judul_training_tr'].'</td>
                            <td align="center">'.$row['penyelenggara_tr'].'</td>
                            <td align="center">'.$row['tgl_pelaksanaan_tr'].'</td>
                            <td> '.$row['tempat_pelaksanaan_tr'].'</td>
                            <td> '.$row['biaya_tr'].'</td>
                            <td> '.$row['pembayaran_tr'].'</td>
                            <td> '.$row['tgl_terima_tr'].'</td>
                            <td> '.$row['nik_bayar_tr'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            ob_end_clean();
            $pdf->Output('laporan_training.pdf', 'I');
?>
