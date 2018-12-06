<!-- https://forum.processmaker.com/viewtopic.php?t=712763 -->

<?php      
            $pdf = new Pdf('L', 'mm', 'LETTER', true, 'UTF-8', false);

            $pdf->SetHeaderData("", "", 'Judul Header', "PT. Astrindo Senayasa");
            $pdf->SetHeaderData("../tcpdf_logo.jpg", 40, 'Judul Header', "PT. Astrindo Senayasa", array(0,64,255));

            // set default header data
            $pdf->SetHeaderData("../tcpdf_logo.jpg", 40, 'Judul Header', "PT. Astrindo Senayasa", array(0,64,255),array(0,64,128));
            $pdf->setFooterData(array(255,64,0), array(0,64,128));
            
            // set margins
            $pdf->SetMargins(10, 25, 10); // kiri, atas, kanan
            $pdf->SetHeaderMargin(5); // mengatur jarak antara header dan top margin
            $pdf->SetFooterMargin(10); //  mengatur jarak minimum antara footer dan bottom margin

            $pdf->SetFont('times','', 5);
            $pdf->SetTitle('Data Karyawan Percobaan');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage('L');
            $i=0;
            $html='<h3>Data Karyawan Percobaan</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="2%" align="center">ID</th>
                            <th width="14%" align="center">Nama Lengkap</th>
                            <th width="6%" align="center">NIK</th>
                            <th width="13%" align="center">Jabatan</th>
                            <th width="8%" align="center">Pangkat</th>
                            <th width="8%" align="center">Divisi</th>
                            <th width="8%" align="center">Departemen</th>
                            <th width="7%" align="center">Unit</th>
                            <th width="9%" align="center">Nama Panggilan</th>
                            <th width="8%" align="center">Identitas</th>
                            <th width="2%" align="center">JK</th>
                            <th width="9%" align="center">Tempat Lahir</th>
                            <th width="7%" align="center">Tanggal Lahir</th>
                            <th width="7%" align="center">Negara</th>
                            <th width="8%" align="center">Agama</th>
                            <th width="8%" align="center">NPWP</th>
                            <th width="10%" align="center">Alamat</th>
                            <th width="8%" align="center">Telp. Rumah</th>
                            <th width="15%" align="center">No. Handphone</th>
                            <th width="8%" align="center">Tgl. Masuk</th>
                            <th width="10%" align="center">Status Kerja</th>
                            <th width="10%" align="center">Status Nikah</th>
                            <th width="10%" align="center">Email</th>
                        </tr>';
            foreach ($karyawan as $kry) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td>'.$kry['id'].'</td>
                            <td>'.$kry['nama'].'</td>
                            <td>'.$kry['nik'].'</td>
                            <td>'.$kry['jabatan'].'</td>
                            <td>'.$kry['pangkat'].'</td>
                            <td>'.$kry['divisi'].'</td>
                            <td>'.$kry['departemen'].'</td>
                            <td>'.$kry['unit'].'</td>
                            <td>'.$kry['nama_panggilan'].'</td>
                            <td>'.$kry['identitas'].'</td>
                            <td>'.$kry['jk'].'</td>
                            <td>'.$kry['tempat_lahir'].'</td>
                            <td>'.$kry['tgl_lahir'].'</td>
                            <td>'.$kry['negara'].'</td>
                            <td>'.$kry['agama'].'</td>
                            <td>'.$kry['npwp'].'</td>
                            <td>'.$kry['alamat'].'</td>
                            <td>'.$kry['tlp_rumah'].'</td>
                            <td>'.$kry['no_hp'].'</td>
                            <td>'.$kry['tgl_masuk'].'</td>
                            <td>'.$kry['status_kerja'].'</td>
                            <td>'.$kry['status_nikah'].'</td>
                            <td>'.$kry['email'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, 'Landscape !');
            $pdf->Output('karyawan_percobaan.pdf', 'I');
            
?>
