<?php
date_default_timezone_get('Asia/Jakarta');
	$tanggal = $_GET['tanggalmasakerja'];
	$tanggal = new DateTime($tanggal);
	
	$tanggalsekarang = new DateTime();

	$perbedaan = $tanggal->diff($tanggalsekarang);

	$tglmasakerja = $perbedaan->y.' Thn '.$perbedaan->m.' Bln';

	die(json_encode(array('hasil' => $tglmasakerja)));



	?>