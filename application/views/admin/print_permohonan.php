<?php
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // document informasi
        $pdf->SetCreator('PT. Astrindo Senayasa');
        $pdf->SetTitle('Laporan Data Karyawan');
        $pdf->SetSubject('Permohonan Karyawan');
    
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
    
        $pdf->AddPage('L');
        $i=0;
            
            $html='<h3>Data Permohonan Karyawan</h3>
                    <table border="0.5" bgcolor="#666666" cellpadding="2">
                        <tr align="center" bgcolor="#ffffff">
                            <th >No</th>
                            <th>Departemen</th>
                            <th >Nama Pemohon</th>
                            <th >Jabatan Pemohon</th>
                            <th>Jabatan</th>
                            <th >Lokasi</th>
                            <th>Waktu</th>
                            <th>Status Kerja</th>
                            <th >Jumlah</th>
                            <th >Tanggal</th>
                            <th >Dasar Permohonan</th>
                            <th>Sumber Rekrutmen</th>
                            <th>Ringkasan Tugas</th>
                            <th>Gajih</th>
                            <th>JK</th>
                            <th>Usia</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Pengalaman Kerja</th>
                            <th>Bidang</th>
                            <th>Syarat Lain</th>
                            <th>Keterampilan</th>
                            <th>Tanggal Bergabung</th>
                            <th>Office Euipment</th>
                        </tr>';
            foreach ($karyawan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td align="center">'.$row['dep_pmhn'].'</td>
                            <td> '.$row['nama_pemohon_pmhn'].'</td>
                            <td align="center"> '.$row['jabatan_pemohon_pmhn'].'</td>
                            <td> '.$row['jabatan_pmhn'].'</td>
                            <td align="center">'.$row['lokasi_pmhn'].'</td>
                            <td align="center">'.$row['waktu_pmhn'].'</td>
                            <td align="center">'.$row['status_kerja_pmhn'].'</td>
                            <td align="center">'.$row['jumlah_pmhn'].'</td>
                            <td> '.$row['tanggal_pmhn'].'</td>
                            <td> '.$row['dasar_permohonan_pmhn'].'</td>
                            <td> '.$row['sumber_rekrutmen_pmhn'].'</td>
                            <td> '.$row['ringkasan_tugas_pmhn'].'</td>
                            <td> '.$row['gajih_pmhn'].'</td>
                            <td> '.$row['jk_pmhn'].'</td>
                            <td> '.$row['usia_pmhn'].'</td>
                            <td> '.$row['pendidikan_pmhn'].'</td>
                            <td> '.$row['jurusan_pmhn'].'</td>
                            <td> '.$row['pengalaman_kerja_pmhn'].'</td>
                            <td> '.$row['bidang_pmhn'].'</td>
                            <td> '.$row['syarat_lain_pmhn'].'</td>
                            <td> '.$row['keterampilan_pmhn'].'</td>
                            <td> '.$row['tgl_bergabung_pmhn'].'</td>
                            <td> '.$row['office_equipment_pmhn'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            ob_end_clean();
            $pdf->Output('laporan_permohonan.pdf', 'I');
?>
