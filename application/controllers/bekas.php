// public	function import()	{  
    //     //Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)	 
    //             require_once APPPATH . "/third_party/PHPExcel.php";

    //              $configUpload['upload_path'] = FCPATH.'excel/';
    //              $configUpload['allowed_types'] = 'xls|xlsx|csv';
    //              $configUpload['max_size'] = '5000';
    //              $this->load->library('upload', $configUpload);
    //              $this->upload->do_upload('userfile');	
    //              $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
    //              $file_name = $upload_data['file_name']; //uploded file name
    //              $extension=$upload_data['file_ext'];    // uploded file extension
                
    //     //$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003 
    //      $objReader= PHPExcel_IOFactory::createReader('Excel2007');	// For excel 2007 	  
    //               //Set to read only
    //               $objReader->setReadDataOnly(true); 		  
    //             //Load excel file
    //              $objPHPExcel=$objReader->load('excel/'.$this->filename.'.xlsx');	 
    //              $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();   //Count Numbe of rows avalable in excel      	 
    //              $objWorksheet=$objPHPExcel->setActiveSheetIndex(0);                
    //               //loop from first data untill last data
    //               for($i=2;$i<=$totalrows;$i++)
    //               {
                      
    //                   $nama             = $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();			
    //                   $nik              = $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); 
    //                   $jabatan          = $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); 
    //                   $pangkat          = $objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); 
    //                   $divisi           = $objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); 
    //                   $departemen       = $objWorksheet->getCellByColumnAndRow(5,$i)->getValue();			
    //                   $unit             = $objWorksheet->getCellByColumnAndRow(6,$i)->getValue(); 
    //                   $nama_panggilan   = $objWorksheet->getCellByColumnAndRow(7,$i)->getValue(); 
    //                   $identitas        = $objWorksheet->getCellByColumnAndRow(8,$i)->getValue(); 
    //                   $jk               = $objWorksheet->getCellByColumnAndRow(9,$i)->getValue();
    //                   $tempat_lahir     = $objWorksheet->getCellByColumnAndRow(10,$i)->getValue();			
    //                   $tgl_lahir        = $objWorksheet->getCellByColumnAndRow(11,$i)->getValue(); 
    //                   $negara           = $objWorksheet->getCellByColumnAndRow(12,$i)->getValue(); 
    //                   $agama            = $objWorksheet->getCellByColumnAndRow(13,$i)->getValue(); 
    //                   $npwp             = $objWorksheet->getCellByColumnAndRow(14,$i)->getValue();
    //                   $alamat           = $objWorksheet->getCellByColumnAndRow(15,$i)->getValue();
    //                   $tlp_rumah        = $objWorksheet->getCellByColumnAndRow(16,$i)->getValue();			
    //                   $no_hp            = $objWorksheet->getCellByColumnAndRow(17,$i)->getValue(); 
    //                   $tgl_masuk        = $objWorksheet->getCellByColumnAndRow(18,$i)->getValue(); 
    //                   $status_kerja     = $objWorksheet->getCellByColumnAndRow(19,$i)->getValue(); 
    //                   $status_nikah     = $objWorksheet->getCellByColumnAndRow(20,$i)->getValue();
    //                   $email            = $objWorksheet->getCellByColumnAndRow(21,$i)->getValue();
                      
    //                   $karyawan       = array(
    //                                           //'id'                => $id,
    //                                           'nama'              => $nama,
    //                                           'nik'               => $nik,
    //                                           'jabatan'           => $jabatan,
    //                                           'pangkat'           => $pangkat,
    //                                           'divisi'            => $divisi,
    //                                           'departemen'        => $departemen,
    //                                           'unit'              => $unit,
    //                                           'nama_panggilan'    => $nama_panggilan,
    //                                           'identitas'         => $identitas,
    //                                           'jk'                => $jk,
    //                                           'tempat_lahir'      => $tempat_lahir,
    //                                           'tgl_lahir'         => $tgl_lahir,
    //                                           'negara'            => $negara,
    //                                           'agama'             => $agama,
    //                                           'npwp'              => $npwp,
    //                                           'alamat'            => $alamat,
    //                                           'tlp_rumah'         => $tlp_rumah,
    //                                           'no_hp'             => $no_hp,
    //                                           'tgl_masuk'         => $tgl_masuk,
    //                                           'status_kerja'      => $status_kerja,
    //                                           'status_nikah'      => $status_nikah,
    //                                           'email'             => $email
    //                                         );
        
    //                   $this->md_karyawan->simpan($karyawan);
                      
                                  
    //               }
    //                  unlink('./excel/'.$file_name); //File Deleted After uploading in database .			 
    //                  redirect(base_url() . "admin/karyawan");
                       
               
    //          }