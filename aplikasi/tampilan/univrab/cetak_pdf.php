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
$coba = cetak2();
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>LAPORAN DATA</title>
    <link rel="stylesheet" type="text/css" href="laporan.css" />
</head>
<body>
    <div id="title">
        Laporan Cetak Data Staff Bagian <?php 
        if ($coba) {
            $data65 = jenisjabatan_view("id_jj='".$_GET['jabatan']."'");
            echo $data65[0]['nm_jabatan'];
        } 
        ?>
    </div>

    <hr><br>
    <div id="isi">
        <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th height="20" align="center" valign="middle">NO.</th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                        
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label1'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label2'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label3'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label4'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label5'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label6'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label7'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                    <th height="20" align="center" valign="middle">
                        <?php
                        switch (($_GET['label8'])) {
                            case "nohp":
                            echo "NO HP";
                            break;
                            case "nidn":
                            echo "NIDN";
                            break;
                            case "ket":
                            echo "Ket";
                            break;
                            case "tmt_leltor_300":
                            echo "TMT Leltor 300";
                            break;
                            case "tmt_leltor_200":
                            echo "TMT Leltor 200";
                            break;
                            case "tmt_aa":
                            echo "TMT AA";
                            break;
                            case "masa_kerja":
                            echo "Masa Kerja";
                            break;
                            case "gol":
                            echo "Golongan";
                            break;
                            case "tmt":
                            echo "Mulai Kerja";
                            break;
                            case "st":
                            echo "ST";
                            break;
                            case "tgl_lahir":
                            echo "Tanggal Lahir";
                            break;
                            case "tempat_lahir":
                            echo "Tempat Lahir";
                            break;
                            case "sls_studi":
                            echo "Selesai Studi";
                            break;
                            case "lanjut_studi":
                            echo "Lanjut Studi";
                            break;
                            case "perguruan_tinggi":
                            echo "PTN/PTS";
                            break;
                            case "pend_terakhir":
                            echo "Pendidikan Terakhir";
                            break;
                            case "status":
                            echo "Status";
                            break;
                            case "no_ktp":
                            echo "NO KTP";
                            break;
                            case "id_staff":
                            echo "NIK";
                            break;
                            case "nm_staff":
                            echo "Nama Staff";
                            break;
                            case "prodi":
                            echo "Prodi";
                            break;
                            case "jabfung":
                            echo "Jabfung";
                            break;
                            case "jabatan":
                            echo "Jabatan";
                            break;
                            case "alamat":
                            echo "Alamat";
                            break;
                            default:
                            echo "Instansi";
                        }
                        ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no1 = 1;

    // jika data ada
                if($coba==0) {
                    echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='155' height='13' align='center' valign='middle'></td>
                    <td width='90' height='13' align='center' valign='middle'></td>
                    <td width='90' height='13' align='center' valign='middle'></td>
                    <td width='90' height='13' align='center' valign='middle'></td>
                    <td width='100' height='13' align='center' valign='middle'></td>
                    <td width='100' height='13' align='center' valign='middle'></td>

                    </tr>";
                } 
    // jika data tidak ada
                else {
        // tampilkan data
                    foreach ($coba as $data1) {
                        if ($data1[status] == "Aktif"){
            // menampilkan isi tabel dari database ke tabel di aplikasi
                            ?>   
                            <tr>
                            <td width='40' height='13' align='center' valign='middle'><?php  echo $no1; ?></td>
                            <td width='155' height='13' align='center' valign='middle'>
                                <?php 
                                switch ($_GET['label']) {
                                    case 'instansi':
                                    if(is_array($data1['instansi'])){
                                        foreach ($data1['instansi'] as $value) {
                                            echo '- '.$value['nm_instansi'].'<br>';
                                        }
                                    }
                                    break;
                                    case 'jabatan':
                                    if(is_array($data1['jabatan'])){
                                        foreach ($data1['jabatan'] as $value) {
                                            echo '- '.$value['nm_jabatan'].'<br>';
                                        }
                                    }
                                    break;
                                    case 'jabfung':
                                    $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                    echo $data7[0]['nm_jabfung'];
                                    break;
                                    case 'prodi':
                                    $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                    echo $data23[0]['nm_prodi'];
                                    break;
                                    default:
                                    echo $data1[$_GET['label']];
                                    break;
                                }
                                ?>
                            </td>
                            <td width='90' height='13' align='center' valign='middle'>
                                <?php 
                                switch ($_GET['label1']) {
                                    case 'instansi':
                                    if(is_array($data1['instansi'])){
                                        foreach ($data1['instansi'] as $value) {
                                            echo '- '.$value['nm_instansi'].'<br>';
                                        }
                                    }
                                    break;
                                    case 'jabatan':
                                    if(is_array($data1['jabatan'])){
                                        foreach ($data1['jabatan'] as $value) {
                                            echo '- '.$value['nm_jabatan'].'<br>';
                                        }
                                    }
                                    break;
                                    case 'jabfung':
                                    $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                    echo $data7[0]['nm_jabfung'];
                                    break;
                                    case 'prodi':
                                    $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                    echo $data23[0]['nm_prodi'];
                                    break;
                                    default:
                                    echo $data1[$_GET['label1']];
                                    break;
                                }
                                ?>  
                            </td>
                            <td width='110' height='13' align='center' valign='middle'>
                               <?php 
                               switch ($_GET['label2']) {
                                case 'instansi':
                                if(is_array($data1['instansi'])){
                                    foreach ($data1['instansi'] as $value) {
                                        echo '- '.$value['nm_instansi'].'<br>';
                                    }
                                }
                                break;
                                case 'jabatan':
                                if(is_array($data1['jabatan'])){
                                    foreach ($data1['jabatan'] as $value) {
                                        echo '- '.$value['nm_jabatan'].'<br>';
                                    }
                                }
                                break;
                                case 'jabfung':
                                $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                echo $data7[0]['nm_jabfung'];
                                break;
                                case 'prodi':
                                $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                echo $data23[0]['nm_prodi'];
                                break;
                                default:
                                echo $data1[$_GET['label2']];
                                break;
                            }
                            ?>
                                </td>
                                <td width='90' height='13' align='center'valign='middle'>
                                 <?php 
                                 switch ($_GET['label3']) {
                                    case 'instansi':
                                    if(is_array($data1['instansi'])){
                                        foreach ($data1['instansi'] as $value) {
                                            echo '- '.$value['nm_instansi'].'<br>';
                                        }
                                    }
                                    break;
                                    case 'jabatan':
                                    if(is_array($data1['jabatan'])){
                                        foreach ($data1['jabatan'] as $value) {
                                            echo '- '.$value['nm_jabatan'].'<br>';
                                        }
                                    }
                                    break;
                                    case 'jabfung':
                                    $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                    echo $data7[0]['nm_jabfung'];
                                    break;
                                    case 'prodi':
                                    $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                    echo $data23[0]['nm_prodi'];
                                    break;
                                    default:
                                    echo $data1[$_GET['label3']];
                                    break;
                                }
                                ?>
                            </td>
                            <td width='100' height='13' align='center' valign='middle'>
                              <?php 
                              switch ($_GET['label4']) {
                                case 'instansi':
                                if(is_array($data1['instansi'])){
                                    foreach ($data1['instansi'] as $value) {
                                        echo '- '.$value['nm_instansi'].'<br>';
                                    }
                                }
                                break;
                                case 'jabatan':
                                if(is_array($data1['jabatan'])){
                                    foreach ($data1['jabatan'] as $value) {
                                        echo '- '.$value['nm_jabatan'].'<br>';
                                    }
                                }
                                break;
                                case 'jabfung':
                                $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                echo $data7[0]['nm_jabfung'];
                                break;
                                case 'prodi':
                                $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                echo $data23[0]['nm_prodi'];
                                break;
                                default:
                                echo $data1[$_GET['label4']];
                                break;
                            }
                            ?>
                                
                            </td>
                                    <td width='100' height='13' align='center' valign='middle'>
                                     <?php 
                                     switch ($_GET['label5']) {
                                        case 'instansi':
                                        if(is_array($data1['instansi'])){
                                            foreach ($data1['instansi'] as $value) {
                                                echo '- '.$value['nm_instansi'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabatan':
                                        if(is_array($data1['jabatan'])){
                                            foreach ($data1['jabatan'] as $value) {
                                                echo '- '.$value['nm_jabatan'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabfung':
                                        $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                        echo $data7[0]['nm_jabfung'];
                                        break;
                                        case 'prodi':
                                        $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                        echo $data23[0]['nm_prodi'];
                                        break;
                                        default:
                                        echo $data1[$_GET['label5']];
                                        break;
                                    }
                                    ?>
                                    </td>

                                    <td width='100' height='13' align='center' valign='middle'>
                                     <?php 
                                     switch ($_GET['label6']) {
                                        case 'instansi':
                                        if(is_array($data1['instansi'])){
                                            foreach ($data1['instansi'] as $value) {
                                                echo '- '.$value['nm_instansi'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabatan':
                                        if(is_array($data1['jabatan'])){
                                            foreach ($data1['jabatan'] as $value) {
                                                echo '- '.$value['nm_jabatan'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabfung':
                                        $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                        echo $data7[0]['nm_jabfung'];
                                        break;
                                        case 'prodi':
                                        $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                        echo $data23[0]['nm_prodi'];
                                        break;
                                        default:
                                        echo $data1[$_GET['label6']];
                                        break;
                                    }
                                    ?>
                                    </td>

                                    <td width='100' height='13' align='center' valign='middle'>
                                     <?php 
                                     switch ($_GET['label7']) {
                                        case 'instansi':
                                        if(is_array($data1['instansi'])){
                                            foreach ($data1['instansi'] as $value) {
                                                echo '- '.$value['nm_instansi'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabatan':
                                        if(is_array($data1['jabatan'])){
                                            foreach ($data1['jabatan'] as $value) {
                                                echo '- '.$value['nm_jabatan'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabfung':
                                        $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                        echo $data7[0]['nm_jabfung'];
                                        break;
                                        case 'prodi':
                                        $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                        echo $data23[0]['nm_prodi'];
                                        break;
                                        default:
                                        echo $data1[$_GET['label7']];
                                        break;
                                    }
                                    ?>
                                    </td>
                                    <td width='100' height='13' align='center' valign='middle'>
                                     <?php 
                                     switch ($_GET['label8']) {
                                        case 'instansi':
                                        if(is_array($data1['instansi'])){
                                            foreach ($data1['instansi'] as $value) {
                                                echo '- '.$value['nm_instansi'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabatan':
                                        if(is_array($data1['jabatan'])){
                                            foreach ($data1['jabatan'] as $value) {
                                                echo '- '.$value['nm_jabatan'].'<br>';
                                            }
                                        }
                                        break;
                                        case 'jabfung':
                                        $data7 = jabfung_view("id_jabfung='".$data1['id_jabfung']."'");
                                        echo $data7[0]['nm_jabfung'];
                                        break;
                                        case 'prodi':
                                        $data23 = prodi_view("id_prodi='".$data1['id_prodi']."'");
                                        echo $data23[0]['nm_prodi'];
                                        break;
                                        default:
                                        echo $data1[$_GET['label8']];
                                        break;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <?php $no1++;
                            }
                        }
                    }
                    ?>  
                </tbody>
            </table>
        </div>
    </body>
    </html><!-- Akhir halaman HTML yang akan di konvert -->
    <?php
$filename="LAPORAN DATA OBAT MASUK.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';
// panggil library html2pdf
require_once('html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('L','F4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>