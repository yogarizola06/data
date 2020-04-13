<?php
fungsi('admin');

function index(){
	tampilan('univrab/beranda');
}

function fakultas(){
	tampilan('univrab/fakultas');
}

function tambah_fakultas(){
	tampilan('univrab/tambah_fakultas');
}

function edit_fakultas(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_fakultas='".$url_bagian[2]."'";
		if(isset($_POST['btnEditFakultas'])){
			$simpan = fakultas_edit();
		}
		$data['view'] = fakultas_view($where );
		tampilan('univrab/edit_fakultas',$data);
	}
	
}

function prodi(){
	tampilan('univrab/prodi');
}

function tambah_prodi(){
	tampilan('univrab/tambah_prodi');
}

function edit_prodi(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_prodi='".$url_bagian[2]."'";
		if(isset($_POST['btnEditProdi'])){
			$simpan = prodi_edit();
			$data['simpan'] = $simpan;
		}
		$data['view'] = prodi_view($where );
		tampilan('univrab/edit_prodi',$data);
	}
	
}

function jabfung(){
	tampilan('univrab/jabfung');
}

function tambah_jabfung(){
	tampilan('univrab/tambah_jabfung');
}

function edit_jabfung(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_jabfung='".$url_bagian[2]."'";
		if(isset($_POST['btnEditJabfung'])){
			$simpan = jabfung_edit();
			$data['simpan'] = $simpan;
		}
		$data['view'] = jabfung_view($where );
		tampilan('univrab/edit_jabfung',$data);
	}
	
}

function jenisjabatan(){
	tampilan('univrab/jenisjabatan');
}

function tambah_jj(){
	tampilan('univrab/tambah_jj');
}

function edit_jj(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_jj='".$url_bagian[2]."'";
		if(isset($_POST['btnEditJJ'])){
			$simpan = jenisjabatan_edit();
			$data['simpan'] = $simpan;
		}
		$data['view'] = jenisjabatan_view($where );
		tampilan('univrab/edit_jj',$data);
	}

}
function jabatanstaff(){
	tampilan('univrab/staff');
}


function instansi(){
	tampilan('univrab/instansi');
}

function tambah_ins(){
	tampilan('univrab/tambah_ins');
}

function edit_instansi(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_instansi='".$url_bagian[2]."'";
		if(isset($_POST['btnEditIns'])){
			$simpan = instansi_edit();
			$data['simpan'] = $simpan;
		}
		$data['view'] = instansi_view($where );
		tampilan('univrab/edit_instansi',$data);
	}

}
function instansistaff(){
	tampilan('univrab/staff');
}


function staff(){
	tampilan('univrab/staff');
}

function tambah_staff(){
	tampilan('univrab/tambah_staff');
}

function edit_staff(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_staff='".$url_bagian[2]."'";
		if(isset($_POST['btnEditStaff'])){
			$simpan = staff_edit();
			$data['simpan'] = $simpan;
		}
		$data['view'] = staff_view($where );
		tampilan('univrab/edit_staff',$data);
	}

}

function detail(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_staff='".$url_bagian[2]."'";
		$data['view'] = staff_view($where );
		tampilan('univrab/detail',$data);
	
}
}

function cetak(){
	tampilan('univrab/cetak');
}

function cetakinstansi(){
	tampilan('univrab/cetakinstansi');
}

function excel_instansi(){
	tampilan('univrab/excel_instansi');
}

function excel_jabatan(){
	tampilan('univrab/excel_jabatan');
}

function export(){
	tampilan('univrab/export');
}

function proses_excel(){
	tampilan('univrab/proses_excel');
}

function proses_excel_ins(){
	tampilan('univrab/proses_excel_ins');
}

function import(){
	tampilan('univrab/import');
}


function template(){
	tampilan('univrab/template');
}

function cetak_pdf(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		
		$where['jabatan'] = "id_jj='".$url_bagian[2]."'";
		tampilan('univrab/cetak_pdf',$where);
	}
}

function cetak_pdf_instansi(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		
		$where['instansi'] = "id_instansi='".$url_bagian[2]."'";
		tampilan('univrab/cetak_pdf_instansi',$where);
	}
}

function cetak_pdf_staff(){
	global $url_bagian;

	if(isset($url_bagian[2])){
		$where = "id_staff='".$url_bagian[2]."'";
		$data['view'] = staff_view($where );
		tampilan('univrab/cetak_pdf_staff',$data);
	
	}
}

function keluar(){
	$log = $_SESSION['SubFolder'];
	session_destroy();
	header('location:'.URL.'/index.php/login');
}

function hitung(){
	tampilan('univrab/hitung');
}
function tambah_hitung(){
	tampilan('univrab/tambah_hitung');
}

function hitunginstansi(){
	tampilan('univrab/hitunginstansi');
}
function tambah_hitung_ins(){
	tampilan('univrab/tambah_hitung_ins');
}




?>