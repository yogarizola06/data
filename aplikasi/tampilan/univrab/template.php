<?php
// Load file koneksi.php
include "koneksi.php";

// Load plugin PHPExcel nya
require_once 'PHPExcel/PHPExcel.php';

// Panggil class PHPExcel nya
$excel = new PHPExcel();

// Settingan awal fil excel
$excel->getProperties()->setCreator('UNIVRAB')
					   ->setLastModifiedBy('UNIVRAB')
					   ->setTitle("Data Staff")
					   ->setSubject("Staff")
					   ->setDescription("Laporan Data Staff")
					   ->setKeywords("Data Staff");

// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
	'font' => array('bold' => true), // Set font nya jadi bold
	'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	)
);

// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
	'alignment' => array(
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	)
);


// Buat header tabel nya pada baris ke 3
$excel->getActiveSheet()->mergeCells('A1:A1');
$excel->getActiveSheet()->mergeCells('B1:B1');
$excel->getActiveSheet()->mergeCells('C1:C1');
$excel->getActiveSheet()->mergeCells('D1:D1');
$excel->getActiveSheet()->mergeCells('E1:E1');
$excel->getActiveSheet()->mergeCells('F1:F1');
$excel->getActiveSheet()->mergeCells('G1:G1');
$excel->getActiveSheet()->mergeCells('H1:H1');
$excel->getActiveSheet()->mergeCells('I1:I1');
$excel->getActiveSheet()->mergeCells('J1:J1');
$excel->getActiveSheet()->mergeCells('K1:K1');
$excel->getActiveSheet()->mergeCells('L1:L1');
$excel->getActiveSheet()->mergeCells('M1:M1');
$excel->getActiveSheet()->mergeCells('N1:N1');
$excel->getActiveSheet()->mergeCells('O1:O1');
$excel->getActiveSheet()->mergeCells('P1:P1');
$excel->getActiveSheet()->mergeCells('Q1:Q1');
$excel->getActiveSheet()->mergeCells('R1:R1');
$excel->getActiveSheet()->mergeCells('S1:S1');
$excel->getActiveSheet()->mergeCells('T1:T1');
$excel->getActiveSheet()->mergeCells('U1:U1');
$excel->getActiveSheet()->mergeCells('V1:V1');
$excel->getActiveSheet()->mergeCells('W1:W1');
$excel->setActiveSheetIndex(0)->setCellValue('A1', "NIK"); // Set kolom A1 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B1', "NO KTP"); // Set kolom B1 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('C1', "NAMA"); // Set kolom C1 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('D1', "NIDN"); // Set kolom D1 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('E1', "PRODI"); // Set kolom E1 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('F1', "JABATAN FUNGSIONAL "); // Set kolom F1 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('G1', "INSTANSI");
$excel->setActiveSheetIndex(0)->setCellValue('H1', "PENDIDIKAN TERAKHIR");
$excel->setActiveSheetIndex(0)->setCellValue('I1', "LANJUT STUDI");
$excel->setActiveSheetIndex(0)->setCellValue('J1', "PERGURUAN TINGGI");
$excel->setActiveSheetIndex(0)->setCellValue('K1', "SLS STUDI");
$excel->setActiveSheetIndex(0)->setCellValue('L1', "TEMPAT LAHIR");
$excel->setActiveSheetIndex(0)->setCellValue('M1', "TANGGAL LAHIR");
$excel->setActiveSheetIndex(0)->setCellValue('N1', "ST");
$excel->setActiveSheetIndex(0)->setCellValue('O1', "TMT");
$excel->setActiveSheetIndex(0)->setCellValue('P1', "MASA KERJA");
$excel->setActiveSheetIndex(0)->setCellValue('Q1', "GOL");
$excel->setActiveSheetIndex(0)->setCellValue('R1', "TMT AA");
$excel->setActiveSheetIndex(0)->setCellValue('S1', "TMT LELTOR 200");
$excel->setActiveSheetIndex(0)->setCellValue('T1', "TMT LELTOR 300");
$excel->setActiveSheetIndex(0)->setCellValue('U1', "KET");
$excel->setActiveSheetIndex(0)->setCellValue('V1', "NO HP");
$excel->setActiveSheetIndex(0)->setCellValue('W1', "ALAMAT");


// Apply style header yang telah kita buat tadi ke masing-masing kolom header





// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Laporan Data Staff");
$excel->setActiveSheetIndex(0);

// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Biodata Staff.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>
