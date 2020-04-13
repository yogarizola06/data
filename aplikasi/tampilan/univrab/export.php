<?php
// Load file koneksi.php


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

$excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR  NAMA DOSEN UNIVERSITAS ABDURRAB  PEKANBARU"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:U1');
$excel->getActiveSheet()->mergeCells('A2:U2'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

// Buat header tabel nya pada baris ke 3
$excel->getActiveSheet()->mergeCells('A3:A4');
$excel->getActiveSheet()->mergeCells('B3:B4');
$excel->getActiveSheet()->mergeCells('C3:C4');
$excel->getActiveSheet()->mergeCells('D3:D4');
$excel->getActiveSheet()->mergeCells('E3:E4');
$excel->getActiveSheet()->mergeCells('F3:F4');
$excel->getActiveSheet()->mergeCells('G3:G4');
$excel->getActiveSheet()->mergeCells('H3:H4');
$excel->getActiveSheet()->mergeCells('I3:I4');
$excel->getActiveSheet()->mergeCells('J3:J4');
$excel->getActiveSheet()->mergeCells('K3:K4');
$excel->getActiveSheet()->mergeCells('L3:L4');
$excel->getActiveSheet()->mergeCells('M3:M4');
$excel->getActiveSheet()->mergeCells('N3:N4');
$excel->getActiveSheet()->mergeCells('O3:O4');
$excel->getActiveSheet()->mergeCells('P3:P4');
$excel->getActiveSheet()->mergeCells('Q3:Q4');
$excel->getActiveSheet()->mergeCells('R3:R4');
$excel->getActiveSheet()->mergeCells('S3:S4');
$excel->getActiveSheet()->mergeCells('T3:T4');
$excel->getActiveSheet()->mergeCells('U3:U4');
$excel->getActiveSheet()->mergeCells('V3:V4');
$excel->getActiveSheet()->mergeCells('W3:W4');
$excel->getActiveSheet()->mergeCells('X3:X4');


$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
$excel->setActiveSheetIndex(0)->setCellValue('B3', "NIK"); // Set kolom A1 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NO KTP"); // Set kolom B1 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "NAMA"); // Set kolom C1 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('E3', "NIDN"); // Set kolom D1 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "PRODI"); // Set kolom E1 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "JABATAN FUNGSIONAL "); // Set kolom F1 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "INSTANSI");
$excel->setActiveSheetIndex(0)->setCellValue('I3', "PENDIDIKAN TERAKHIR");
$excel->setActiveSheetIndex(0)->setCellValue('J3', "LANJUT STUDI");
$excel->setActiveSheetIndex(0)->setCellValue('K3', "PERGURUAN TINGGI");
$excel->setActiveSheetIndex(0)->setCellValue('L3', "SLS STUDI");
$excel->setActiveSheetIndex(0)->setCellValue('M3', "TEMPAT LAHIR");
$excel->setActiveSheetIndex(0)->setCellValue('N3', "TANGGAL LAHIR");
$excel->setActiveSheetIndex(0)->setCellValue('O3', "ST");
$excel->setActiveSheetIndex(0)->setCellValue('P3', "TMT");
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "NAMA JABATAN");
$excel->setActiveSheetIndex(0)->setCellValue('R3', "MASA KERJA");
$excel->setActiveSheetIndex(0)->setCellValue('S3', "GOL");
$excel->setActiveSheetIndex(0)->setCellValue('T3', "TMT AA");
$excel->setActiveSheetIndex(0)->setCellValue('U3', "TMT LELTOR 200");
$excel->setActiveSheetIndex(0)->setCellValue('V3', "TMT LELTOR 300");
$excel->setActiveSheetIndex(0)->setCellValue('W3', "KET");
$excel->setActiveSheetIndex(0)->setCellValue('X3', "NO HP");
$excel->setActiveSheetIndex(0)->setCellValue('Y3', "ALAMAT");


// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3:A4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3:D4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E3:E4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F3:F4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3:G4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3:H4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3:I4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J3:J4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3:K4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3:L4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3:M4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3:N4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O3:O4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P3:P4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q3:Q4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R3:R4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S3:S4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T3:T4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U3:U4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V3:V4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W3:W4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X3:X4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X3:X4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y3:Y4')->applyFromArray($style_col);


// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);

// Buat query untuk menampilkan semua data siswa
// $sql = mysqli_query($connect, "SELECT jabfung.id_jabfung,jabfung.nm_jabfung,staff.id_jabfung,staff.no_ktp,staff.alamat,staff.instansi,staff.id_staff,staff.nm_staff,staff.nidn,staff.id_prodi,staff.pend_terakhir,staff.lanjut_studi,staff.perguruan_tinggi,staff.sls_studi,staff.tempat_lahir,staff.tgl_lahir,staff.st,staff.tmt,staff.masa_kerja,staff.gol,staff.tmt_aa,staff.tmt_leltor_200,staff.tmt_leltor_300,staff.ket,staff.nohp,jenis_jabatan.id_jj,jenis_jabatan.nm_jabatan,jabatan_staff.id_jj,jabatan_staff.id_staff,prodi.nm_prodi,prodi.id_prodi
//                 FROM staff
//                 JOIN jabfung
//                 ON staff.id_jabfung=jabfung.id_jabfung
//                 JOIN jabatan_staff
//                 ON staff.id_staff=jabatan_staff.id_staff
//                 JOIN jenis_jabatan
//                 ON jabatan_staff.id_jj=jenis_jabatan.id_jj
// 				JOIN prodi
//                 ON staff.id_prodi=prodi.id_prodi");

$data1 = staff_view();
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 5;
foreach ($data1 as $data) {
	if(is_array($data['jabatan'])){
		foreach ($data['jabatan'] as $val) {
			$jb = $val['nm_jabatan'].', '.$jb;
		}
	}
	if(is_array($data['instansi'])){
		foreach ($data['instansi'] as $val) {
			$ins = $val['nm_instansi'].', '.$ins;
		}
	}
	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['id_staff']);
	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['no_ktp']);
	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['nm_staff']);
	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['nidn']);
	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['nm_prodi']);
	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['nm_jabfung']);
	$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $ins);
	$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['pend_terakhir']);
	$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['lanjut_studi']);
	$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['perguruan_tinggi']);
	$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['sls_studi']);
	$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['tempat_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['tgl_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['st']);
	$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['tmt']);
	$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $jb);
	$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['masa_kerja']);
	$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['gol']);
	$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['tmt_aa']);
	$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['tmt_leltor_200']);
	$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data['tmt_leltor_300']);
	$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['ket']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('X'.$numrow, $data['nohp'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['alamat']);
	$jb="";
	$ins="";
	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
	
	$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
	
	$no++; // Tambah 1 setiap kali looping
	$numrow++; // Tambah 1 setiap kali looping
}
/*
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['id_staff']);
	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['no_ktp']);
	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['nm_staff']);
	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['nidn']);
	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['nm_prodi']);
	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['nm_jabfung']);
	$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['instansi']);
	$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['pend_terakhir']);
	$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['lanjut_studi']);
	$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['perguruan_tinggi']);
	$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['sls_studi']);
	$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['tempat_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['tgl_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['st']);
	$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['tmt']);
	$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['nm_jabatan']);
	$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['masa_kerja']);
	$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['gol']);
	$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['tmt_aa']);
	$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['tmt_leltor_200']);
	$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data['tmt_leltor_300']);
	$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['ket']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('X'.$numrow, $data['nohp'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['alamat']);

	
	// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
	
	$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
	
	$no++; // Tambah 1 setiap kali looping
	$numrow++; // Tambah 1 setiap kali looping
}
*/

// Set width kolom
PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(10); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('U')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('V')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('W')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('X')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(15); // Set width kolom F


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
