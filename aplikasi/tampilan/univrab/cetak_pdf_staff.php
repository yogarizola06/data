<?php
session_start();
ob_start();
$dir = __DIR__;
$dir = explode("aplikasi", $dir);
$dir = $dir[0].'sistem';
    //Panggil File Config
require_once $dir.'/config.php';

    //Panggil File Database
require_once $dir.'/database.php';

    //panggil file fungsi_sistem.php
require_once $dir."/fungsi_sistem.php";

$hari_ini = date("d-m-Y");

// ambil data hasil submit dari form
$data = $view;
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title></title>
</head>
<body>
  <table border="0">
    <tr>
      <td width="200">
      <h2><?php echo $data[0]['nm_staff']; ?></h2></td>
      <td width="10"></td>
      <td width="250"></td>
    </tr>
    <tr>
      <td width="100">NIK STAFF</td>
      <td width="10">:</td>
      <td width="250"><?php echo $data[0]['id_staff']; ?></td>
    </tr>
    <tr>
      <td>NAMA STAFF</td>
      <td>:</td>
      <td><?php echo $data[0]['nm_staff']; ?></td>
    </tr>
    <tr>
      <td>NOMOR KTP</td>
      <td>:</td>
      <td><?php echo $data[0]['no_ktp']; ?></td>
    </tr>
    <tr>
      <td>NIDN</td>
      <td>:</td>
      <td><?php echo $data[0]['nidn']; ?></td>
    </tr>
    <tr>
      <td>PROGRAM STUDI</td>
      <td>:</td>
      <td><?php $idprodi = $data[0]['id_prodi'];
      $data3 = prodi_view("id_prodi='$idprodi'"); 
      ?>
      <?php 
      echo $data3[0]['nm_prodi'];
      ?></td>
    </tr>
    <tr>
      <td>JABATAN FUNGSIONAL</td>
      <td>:</td>
      <td><?php $idjabfung = $data[0]['id_jabfung'];
      $data2 = jabfung_view("id_jabfung='$idjabfung'"); 
      ?>
      <?php 
      echo $data2[0]['nm_jabfung'];
      ?></td>
    </tr>
    <tr>
      <td>INSTANSI</td>
      <td>:</td>
      <td><?php $dat88 = instansi_view(); ?>
      <?php
      $idinstansi = $data[0]['id_staff'];
      $instansi = instansistaff_view("id_staff='$idinstansi'");
      ?>
      <?php
      if($instansi['id_instansi'] == $dat88['id_instansi']){
        if(is_array($data[0]['instansi'])){
          foreach ($data[0]['instansi'] as $value) {
            echo '- '.$value['nm_instansi'].'<br>';
          }
        }
      }
      ?></td>
    </tr>
    <tr>
      <td>STATUS</td>
      <td>:</td>
      <td><?php echo $data[0]['status']; ?></td>
    </tr>
    <tr>
      <td>JABATAN STRUKTURAL</td>
      <td>:</td>
      <td><?php $dat8 = jenisjabatan_view(); ?>
      <?php
      $idjabatan = $data[0]['id_staff'];
      $jj = jabatanstaff_view("id_staff='$idjabatan'");
      ?>
      <?php
      if($jj['id_jj'] == $dat8['id_jj']){
        if(is_array($data[0]['jabatan'])){
          foreach ($data[0]['jabatan'] as $value) {
            echo '- '.$value['nm_jabatan'].'<br>';
          }
        }
      }
      ?></td>
    </tr>
    <tr>
      <td>PENDIDIKAN TERAKHIR</td>
      <td>:</td>
      <td><?php echo $data[0]['pend_terakhir']; ?></td>
    </tr>
    <tr>
      <td>LANJUT STUDI</td>
      <td>:</td>
      <td><?php echo $data[0]['lanjut_studi']; ?></td>
    </tr>
    <tr>
      <td>PERGURUAN TINGGI</td>
      <td>:</td>
      <td><?php echo $data[0]['perguruan_tinggi']; ?></td>
    </tr>
    <tr>
      <td>TEMPAT LAHIR</td>
      <td>:</td>
      <td><?php echo $data[0]['tempat_lahir']; ?></td>
    </tr>
    <tr>
      <td>TANGGAL LAHIR</td>
      <td>:</td>
      <td><?php echo $data[0]['tgl_lahir']; ?></td>
    </tr>
    <tr>
      <td>ST</td>
      <td>:</td>
      <td><?php echo $data[0]['st']; ?></td>
    </tr>
    <tr>
      <td>TAHUN MULAI KERJA</td>
      <td>:</td>
      <td><?php echo $data[0]['tmt']; ?></td>
    </tr>
    <tr>
      <td>MASA KERJA</td>
      <td>:</td>
      <td><?php echo $data[0]['masa_kerja']; ?></td>
    </tr>
    <tr>
      <td>GOLONGAN</td>
      <td>:</td>
      <td><?php echo $data[0]['gol']; ?></td>
    </tr>
    <tr>
      <td>TMT AA</td>
      <td>:</td>
      <td><?php echo $data[0]['tmt_aa']; ?></td>
    </tr>
    <tr>
      <td>TMT LELTOR 200</td>
      <td>:</td>
      <td><?php echo $data[0]['tmt_leltor_200']; ?></td>
    </tr>
    <tr>
      <td>TMT LELTOR 300</td>
      <td>:</td>
      <td><?php echo $data[0]['tmt_leltor_300']; ?></td>
    </tr>
    <tr>
      <td>KETERANGAN</td>
      <td>:</td>
      <td><?php echo $data[0]['ket']; ?></td>
    </tr>
    <tr>
      <td>NOMOR HP</td>
      <td>:</td>
      <td><?php echo $data[0]['nohp']; ?></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td>:</td>
      <td><?php echo $data[0]['alamat']; ?></td>
    </tr>
  </table>
  <p>Staff yang tertera di atas adalah Benar</p>
  <p align='right'>PEKANBARU, <?php echo date('d-m-Y') ?>
  <br><br><br><br>
( Kepala Divisi SDM )</p>
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename= $data[0]['nm_staff'].".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
require_once('html2pdf_v4.03/html2pdf.class.php');
try
{
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>