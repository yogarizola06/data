<?PHP
// Tangkap data dari post form
if (isset($_POST["import"])) {
    // Koneksi database
    echo __DIR__;
    $dir = __DIR__;
    $dir = explode("aplikasi", $dir);
    $dir = $dir[0].'sistem';
    //Panggil File Config
    require_once $dir.'/config.php';

    //Panggil File Database
    require_once $dir.'/database.php';

    //panggil file fungsi_sistem.php
    require_once $dir."/fungsi_sistem.php";
 
    // Include ke path PHPExcel
    require 'phpexcel/PHPExcel.php';
    require_once 'phpexcel/PHPExcel/IOFactory.php';
 
    // Path file upload
    move_uploaded_file($_FILES['file']['tmp_name'], './' . $_FILES['file']['name']);
    $path = $_FILES['file']['name'];
 
    // Load PHPExcel
    $objPHPExcel = PHPExcel_IOFactory::load($path);
    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
        $worksheetTitle = $worksheet->getTitle();
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        $nrColumns = ord($highestColumn) - 64;
        echo "<br>Worksheet " . $worksheetTitle . " memiliki ";
        echo $nrColumns . ' kolom (A-' . $highestColumn . ') ';
        echo ' dan ' . $highestRow . ' baris.';
        echo '<br>Data: <table border="1"><tr>';
        for ($row = 1; $row <= $highestRow; ++$row) {
            echo '<tr>';
            for ($col = 0; $col < $highestColumnIndex; ++$col) {
                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                $val = $cell->getValue();
                $dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
                echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
 
    // Proses perulangan baris file excel yang diupload
    for ($row = 2; $row < $highestRow; $row++) {
        $val = array();
            
        for ($col = 0; $col < $highestColumnIndex; $col++) {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            $val[] = $cell->getValue();
        }

              $tgl = $val[12];
            $tgl_9 = ($tgl - 25569) * 86400;
            $tgl = 25569 + ($tgl_1 / 86400);
            $tgl_9 = ($tgl - 25569) * 86400;

             $tgl = $val[14];
            $tgl_1 = ($tgl - 25569) * 86400;
            $tgl = 25569 + ($tgl_1 / 86400);
            $tgl_1 = ($tgl - 25569) * 86400;

              $tgl = $val[17];
            $tgl_2 = ($tgl - 25569) * 86400;
            $tgl = 25569 + ($tgl_1 / 86400);
            $tgl_2 = ($tgl - 25569) * 86400;

              $tgl = $val[18];
            $tgl_3 = ($tgl - 25569) * 86400;
            $tgl = 25569 + ($tgl_1 / 86400);
            $tgl_3 = ($tgl - 25569) * 86400;

              $tgl = $val[19];
            $tgl_4 = ($tgl - 25569) * 86400;
            $tgl = 25569 + ($tgl_1 / 86400);
            $tgl_4 = ($tgl - 25569) * 86400;
            
            $arr = array("'",","," ");
            $nik = str_replace($arr, "", $val[0]);
            // Buat query insert per-baris data ke tabel user
            $sql = "INSERT INTO staff (id_staff,no_ktp,nm_staff,nidn,id_prodi,id_jabfung,instansi,pend_terakhir,lanjut_studi,perguruan_tinggi,sls_studi,tempat_lahir,tgl_lahir,st,tmt,masa_kerja,gol,tmt_aa,tmt_leltor_200,tmt_leltor_300,ket,nohp,alamat) VALUES ('" . $nik . "','" . $val[1] . "','" . $val[2] . "','" . $val[3] . "','" . $val[4] . "','" . $val[5] . "','" . $val[6] . "','" . $val[7] . "','" . $val[8] . "','" . $val[9] . "','" . $val[10] . "','" . $val[11] . "','" . date('Y-m-d',$tgl_9) . "','" . $val[13] . "','" . date('Y-m-d',$tgl_1) . "','" . $val[15] . "','" . $val[16] . "','" . date('Y-m-d',$tgl_2) . "','" . date('Y-m-d',$tgl_3) . "','" . date('Y-m-d',$tgl_4) . "','" . $val[20] . "','" . $val[21] . "','" . $val[22] . "')";

            // Tampikan query
            // Querykan 
        $simpan = query($sql);
        if($simpan){
            echo  "Berhasil<br>";
        }else{
            echo  "Gagal<br>";
        }
        echo $sql.'<br>';
    }
 
    // Hapus file excel ketika data sudah masuk ke tabel
    @unlink($_FILES['file']['name']);
}
?>