<?php
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // document informasi
        $pdf->SetCreator('PT. Astrindo Senayasa');
        $pdf->SetTitle('Laporan Data Karyawan');
        $pdf->SetSubject('Data Karyawan');
    
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
    
        // $pdf->AddPage('P');
        $pdf->AddPage('L');
        $i=0;
        $html='<h3>Data Karyawan</h3>
            <table border="0.5" bgcolor="#666666" cellpadding="2" width: 100%>
                <tr align="center" bgcolor="#ffffff">
                    <th width="3%">No</th>
                    <th  align="center">Nama Lengkap</th>
                    <th align="center">NIK</th>
                    <th  align="center">Jabatan</th>
                    <th align="center">Pangkat</th>
                    <th  align="center">Divisi</th>
                    <th  align="center">Departemen</th>
                    <th align="center">Unit</th>
                    <th  align="center">Nama Panggilan</th>
                    <th  align="center">Identitas</th>
                    <th align="center">JK</th>
                    <th  align="center">Tempat Lahir</th>
                    <th  align="center">Tanggal Lahir</th>
                    <th  align="center">Negara</th>
                    <th  align="center">Agama</th>
                    <th  align="center">NPWP</th>
                    <th  align="center">Alamat</th>
                    <th  align="center">Telp. Rumah</th>
                    <th  align="center">No. Handphone</th>
                    <th  align="center">Tgl. Masuk</th>
                    <th  align="center">Status Kerja</th>
                    <th  align="center">Status Nikah</th>
                    <th  align="center">Email</th>
                </tr>';
            foreach ($karyawan as $row) 
            {
                $i++;
                $html.='<tr bgcolor="#ffffff">
                    <td align="center">'.$i.'</td>
                    <td>'.$row['nama_kry'].'</td>
                    <td align="center">'.$row['nik_kry'].'</td>
                    <td>'.$row['jabatan_kry'].'</td>
                    <td>'.$row['pangkat_kry'].'</td>
                    <td>'.$row['divisi_kry'].'</td>
                    <td>'.$row['dep_kry'].'</td>
                    <td>'.$row['unit_kry'].'</td>
                    <td>'.$row['nama_panggilan_kry'].'</td>
                    <td>'.$row['identitas_kry'].'</td>
                    <td align="center">'.$row['jk_kry'].'</td>
                    <td>'.$row['tempat_lahir_kry'].'</td>
                    <td align="center">'.$row['tgl_lahir_kry'].'</td>
                    <td>'.$row['negara_kry'].'</td>
                    <td>'.$row['agama_kry'].'</td>
                    <td align="center">'.$row['npwp_kry'].'</td>
                    <td>'.$row['alamat_kry'].'</td>
                    <td align="center">'.$row['tlp_rumah_kry'].'</td>
                    <td align="center">'.$row['no_hp_kry'].'</td>
                    <td align="center">'.$row['tgl_masuk_kry'].'</td>
                    <td>'.$row['status_kerja_kry'].'</td>
                    <td>'.$row['status_nikah_kry'].'</td>
                    <td>'.$row['email_kry'].'</td>
                </tr>';
                    }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            ob_end_clean();
            $pdf->Output('laporan_karyawan.pdf', 'I');
    ?>
</html>
