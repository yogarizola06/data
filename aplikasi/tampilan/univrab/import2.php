<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan 
$dir = __DIR__;
$dir = explode("aplikasi", $dir);
$dir = $dir[0].'sistem';
    //Panggil File Config
require_once $dir.'/config.php';

    //Panggil File Database
require_once $dir.'/database.php';

    //panggil file fungsi_sistem.php
require_once $dir."/fungsi_sistem.php";

//memanggil file excel_reader
require "excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    

    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $nik           = $data->val($i, 1);
      $no_ktp   = $data->val($i, 2);
      $nm_staff  = $data->val($i, 3);
      $nidn  = $data->val($i, 4);
      $id_prodi  = $data->val($i, 5);
      $id_jabfung  = $data->val($i, 6);
      $instansi  = $data->val($i, 7);
      $pend_terakhir  = $data->val($i, 8);
      $lanjut_studi  = $data->val($i, 9);
      $perguruan_tinggi  = $data->val($i, 10);
      $sls_studi  = $data->val($i, 11);
      $tempat_lahir  = $data->val($i, 12);
      $tgl_lahir  = $data->val($i, 13);
      $st  = $data->val($i, 14);
      $tmt  = $data->val($i, 15);
      $masa_kerja  = $data->val($i, 16);
      $gol  = $data->val($i, 17);
      $tmt_aa  = $data->val($i, 18);
      $tmt_leltor_200  = $data->val($i, 19);
      $tmt_leltor_300  = $data->val($i, 20);
      $ket  = $data->val($i, 21);
      $nohp  = $data->val($i, 22);
      $alamat  = $data->val($i, 23);

//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into staff (id_staff,no_ktp,nm_staff,nidn,id_prodi,id_jabfung,instansi,pend_terakhir,lanjut_studi,perguruan_tinggi,sls_studi,tempat_lahir,tgl_lahir,st,tmt,masa_kerja,gol,tmt_aa,tmt_leltor_200,tmt_leltor_300,ket,nohp,alamat) VALUES('$nik','$no_ktp','$nm_staff','$nidn','$id_prodi','$id_jabfung','$instansi','$pend_terakhir','$lanjut_studi','$perguruan_tinggi','$sls_studi','$tempat_lahir','$tgl_lahir','$st','$tmt','$masa_kerja','$gol','$tmt_aa','$tmt_leltor_200','$tmt_leltor_300','$ket','$nohp','$alamat')";
      
            $simpan = query($query);
        if($simpan){
            echo  "Berhasil<br>";
        }else{
            echo  "Gagal<br>";
        }
        echo $sql.'<br>';
    }
 
    // Hapus file excel ketika data sudah masuk ke tabel
    @unlink($_FILES['filepegawaiall']['name']);
}

?>