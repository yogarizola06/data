<?php
/*
---- Fakultas
*/
function fakultas_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM fakultas WHERE $where";
	}else{
		$sql = "SELECT * FROM fakultas";
	}
	
	$data = tampil($sql);
	return $data;
}

function fakultas_add(){
	if(isset($_POST['btnAddFakultas'])){
		$nm_fakultas = $_POST['nm_fakultas'];
		
		$sql = "INSERT INTO fakultas (nm_fakultas) VALUES('$nm_fakultas')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function fakultas_edit(){
	if(isset($_POST['btnEditFakultas'])){
		$id_fakultas = $_POST['id_fakultas'];
		$nm_fakultas = $_POST['nm_fakultas'];
		
		$sql = "UPDATE fakultas SET nm_fakultas='$nm_fakultas' WHERE id_fakultas='$id_fakultas'";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function fakultas_delete(){
	if(isset($_POST['btnDeleteFakultas'])){
		$id_fakultas = $_POST['id_fakultas'];
		
		$sql = "DELETE FROM fakultas WHERE id_fakultas='$id_fakultas'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}


/*
---- Prodi
*/

function prodi_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM prodi WHERE $where";
	}else{
		$sql = "SELECT * FROM prodi";
	}
	
	$data = tampil($sql);
	return $data;
}

function prodi_add(){
	if(isset($_POST['btnAddProdi'])){
		$nm_prodi = $_POST['nm_prodi'];
		$id_fakultas = $_POST['id_fakultas'];
		
		$sql = "INSERT INTO prodi (nm_prodi,id_fakultas) VALUES('$nm_prodi','$id_fakultas')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function prodi_edit(){
	if(isset($_POST['btnEditProdi'])){
		$id_prodi = $_POST['id_prodi'];
		$nm_prodi = $_POST['nm_prodi'];
		$id_fakultas = $_POST['id_fakultas'];
		
		$sql = "UPDATE prodi SET nm_prodi='$nm_prodi',id_fakultas='$id_fakultas' WHERE id_prodi='$id_prodi'";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function prodi_delete(){
	if(isset($_POST['btnDeleteProdi'])){
		$id_prodi = $_POST['id_prodi'];
		
		$sql = "DELETE FROM prodi WHERE id_prodi='$id_prodi'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}

/*
---- Jenis Jabatan
*/

function jenisjabatan_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM jenis_jabatan WHERE $where";
	}else{
		$sql = "SELECT * FROM jenis_jabatan ORDER BY nm_jabatan asc";
	}
	
	$data = tampil($sql);
	return $data;
}


function jabatanstaff_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM jabatan_staff WHERE $where";
	}else{
		$sql = "SELECT * FROM jabatan_staff";
	}
	
	$data = tampil($sql);
	return $data;
}

function jenisjabatan_add(){
	if(isset($_POST['btnAddJJ'])){
		$nm_jabatan = $_POST['nm_jabatan'];
		$create_at = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO jenis_jabatan (nm_jabatan,create_at) VALUES('$nm_jabatan','$create_at')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function jenisjabatan_edit(){
	if(isset($_POST['btnEditJJ'])){
		$id_jj = $_POST['id_jj'];
		$nm_jabatan = $_POST['nm_jabatan'];
		$modified_at = date('Y-m-d H:i:s');
		
		$sql = "UPDATE jenis_jabatan SET nm_jabatan='$nm_jabatan',modified_at='$modified_at' WHERE id_jj='$id_jj'";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function jenisjabatan_delete(){
	if(isset($_POST['btnDeleteJJ'])){
		$id_jj = $_POST['id_jj'];
		
		$sql = "DELETE FROM jenis_jabatan WHERE id_jj='$id_jj'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}

/*
---- Jenis Jabatan
*/

/*
---- Instansi
*/

function instansi_view($where=null){
	if(isset($where)){  
		$sql = "SELECT * FROM instansi WHERE $where";
	}else{
		$sql = "SELECT * FROM instansi ORDER BY nm_instansi asc";
	}
	
	$data = tampil($sql);
	return $data;
}


function instansistaff_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM instansi_staff WHERE $where";
	}else{
		$sql = "SELECT * FROM instansi_staff";
	}
	
	$data = tampil($sql);
	return $data;
}

function instansi_add(){
	if(isset($_POST['btnAddIns'])){
		$nm_instansi = $_POST['nm_instansi'];
		$created_at = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO instansi (nm_instansi,created_at) VALUES('$nm_instansi','$created_at')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function instansi_edit(){
	if(isset($_POST['btnEditIns'])){
		$id_instansi = $_POST['id_instansi'];
		$nm_instansi = $_POST['nm_instansi'];
		$modified_at = date('Y-m-d H:i:s');
		
		$sql = "UPDATE instansi SET nm_instansi='$nm_instansi',modified_at='$modified_at' WHERE id_instansi='$id_instansi'";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function instansi_delete(){
	if(isset($_POST['btnDeleteIns'])){
		$id_instansi = $_POST['id_instansi'];
		
		$sql = "DELETE FROM instansi WHERE id_instansi='$id_instansi'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}

/*
---- Instansi
*/

function jabfung_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM jabfung WHERE $where";
	}else{
		$sql = "SELECT * FROM jabfung";
	}
	
	$data = tampil($sql);
	return $data;
}


function jabfung_add(){
	if(isset($_POST['btnAddJabfung'])){
		$nm_jabfung = $_POST['nm_jabfung'];
		
		$sql = "INSERT INTO jabfung (nm_jabfung) VALUES('$nm_jabfung')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function jabfung_edit(){
	if(isset($_POST['btnEditJabfung'])){
		$id_jabfung = $_POST['id_jabfung'];
		$nm_jabfung = $_POST['nm_jabfung'];
		
		
		$sql = "UPDATE jabfung SET nm_jabfung='$nm_jabfung' WHERE id_jabfung='$id_jabfung'";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function jabfung_delete(){
	if(isset($_POST['btnDeleteJabfung'])){
		$id_jabfung = $_POST['id_jabfung'];
		
		$sql = "DELETE FROM jabfung WHERE id_jabfung='$id_jabfung'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}

/*
---- Staff
*/

function db_view($tabel, $where=null){
	if(isset($where)){
		$sql = "SELECT * FROM $tabel WHERE $where";
	}else{
		$sql = "SELECT * FROM $tabel";
	}
	
	$data = tampil($sql);
	return $data;
}

function jmldosen(){
	if(isset($_POST['btnAddHitungDosen'])){
		$id_jj = $_POST['id_jj'];
		
		$sql = "INSERT INTO hitung (id_jj) VALUES('$id_jj')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}


function jmlinstansi(){
	if(isset($_POST['btnAddHitungIns'])){
		$id_instansi = $_POST['id_instansi'];
		
		$sql = "INSERT INTO hitunginstansi (id_instansi) VALUES('$id_instansi')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function dashboard(){
	$grafik = tampiljumlah();
	$no=0;
	foreach ($grafik as $value) {
		$idjj = $value['id_jj'];
		$sql = "SELECT COUNT(id_jj) as jumlah FROM jabatan_staff WHERE id_jj='$idjj'";
		$view = tampil($sql);
		$grafik[$no]['cn'] = $view[0]['jumlah'];
		$no++;
	}
	return $grafik;
}

function instansi_dash(){
	$grafik = tampiljumlahinstansi();
	$no=0;
	foreach ($grafik as $value) {
		$idinstansi = $value['id_instansi'];
		$sql = "SELECT COUNT(id_instansi) as jumlah FROM instansi_staff WHERE id_instansi='$idinstansi'";
		$view = tampil($sql);
		$grafik[$no]['cnins'] = $view[0]['jumlah'];
		$no++;
	}
	return $grafik;
}

function tampiljumlah(){
	$sql = "SELECT hitung.id_jj,jenis_jabatan.nm_jabatan,hitung.id_hitung
                FROM hitung
                JOIN jenis_jabatan
                ON hitung.id_jj=jenis_jabatan.id_jj";
    $data = tampil($sql);
    return $data;
}

function hitung_delete(){
	if(isset($_POST['btnDeleteHitung'])){
		$id_hitung = $_POST['id_hitung'];
		
		$sql = "DELETE FROM hitung WHERE id_hitung='$id_hitung'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}


function tampiljumlahinstansi(){
	$sql = "SELECT hitunginstansi.id_instansi,instansi.nm_instansi,hitunginstansi.id_hitunginstansi
                FROM hitunginstansi
                JOIN instansi
                ON hitunginstansi.id_instansi=instansi.id_instansi";
    $data = tampil($sql);
    return $data;
}


function hitung_delete_ins(){
	if(isset($_POST['btnDeleteHitungIns'])){
		$id_hitunginstansi = $_POST['id_hitunginstansi'];
		
		$sql = "DELETE FROM hitunginstansi WHERE id_hitunginstansi='$id_hitunginstansi'";
		$hps = query($sql);
		if($hps){
			return TRUE;
		}
		return FALSE;
	}
}

function jmltendik($where=null){
	if(isset($where)){
	$sql = "SELECT FROM * staff";
    }else{
    	$sql = "SELECT jenis_jabatan.nm_jabatan,jabatan_staff.id_staff,jabatan_staff.id_jj
                FROM jabatan_staff
                JOIN jenis_jabatan
                ON jabatan_staff.id_jj=jenis_jabatan.id_jj
                WHERE nm_jabatan!='Dosen'";
    }
    $data = tampil($sql);
    return $data; 
}

function masa_kerja($where=null){
	$sql = "SELECT id_staff,masa_kerja,tmt FROM staff";
	$data = tampil($sql);

	foreach ($data as $value) {
		$idstaff = $value['id_staff'];
		$tanggalmulai = date('Y-m-d',strtotime($value['tmt']));

		$tanggal = new DateTime($tanggalmulai);
		$sekarang = new DateTime();

		$masakerja = $tanggal->diff($sekarang);
		$masakerja = $masakerja->y. ' Thn '.$masakerja->m. ' Bln';

		$sqlupdate = "UPDATE staff set masa_kerja='$masakerja' WHERE id_staff='$idstaff'";
		$simpan = query($sqlupdate);
	}

}

function staff_view($where=null){
	if(isset($where)){
		$sql = "SELECT * FROM staff WHERE $where";
	}else{
		$sql = "SELECT * FROM staff order by nm_staff ASC";
	}
	$data = tampil($sql);
	$no=0;
	
	if($data){
		foreach($data as $val){
			//jabfung
			$id_jabfung = $val['id_jabfung'];
			$jabfung = db_view('jabfung',"id_jabfung='$id_jabfung'");
			$data[$no]['nm_jabfung'] = $jabfung[0]['nm_jabfung'];
			
			//prodi
			$id_prodi = $val['id_prodi'];
			$prodi = db_view('prodi',"id_prodi='$id_prodi'");
			$data[$no]['nm_prodi'] = $prodi[0]['nm_prodi'];
			
			//jabatan
			$id_staff = $val['id_staff'];
			$jabatan = tampil("SELECT jenis_jabatan.nm_jabatan FROM jabatan_staff INNER JOIN jenis_jabatan ON jabatan_staff.id_jj = jenis_jabatan.id_jj WHERE jabatan_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no]['jabatan']= $jabatan ;

			//instansi
			$id_staff = $val['id_staff'];
			$instansi = tampil("SELECT instansi.nm_instansi FROM instansi_staff INNER JOIN instansi ON instansi_staff.id_instansi = instansi.id_instansi WHERE instansi_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no]['instansi']= $instansi ;
			
			
			$no++;
		}
	}
	
	return $data;
}


function staff_add(){
	if(isset($_POST['btnAddStaff'])){
		$nik = $_POST['nik'];
		$no_ktp = $_POST['no_ktp'];
		$nm_staff = $_POST['nm_staff'];
		$nidn = $_POST['nidn'];
		$id_prodi = $_POST['id_prodi'];
		$id_jabfung = $_POST['id_jabfung'];
		$instansi = $_POST['instansi'];
		$status = $_POST['status'];
		$pend_terakhir = $_POST['pend_terakhir'];
		$lanjut_studi = $_POST['lanjut_studi'];
		$perguruan_tinggi = $_POST['perguruan_tinggi'];
		$sls_studi = $_POST['sls_studi'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tgl_lahir = date('Y-m-d',strtotime($_POST['tgl_lahir']));
		$st = $_POST['st'];
		$tmt = date('Y-m-d',strtotime($_POST['tmt']));
		$masa_kerja = $_POST['masa_kerja'];
		$gol = $_POST['gol'];
		$tmt_aa = date('Y-m-d',strtotime($_POST['tmt_aa']));
		$tmt_leltor_200 = date('Y-m-d',strtotime($_POST['tmt_leltor_200']));
		$tmt_leltor_300 = date('Y-m-d',strtotime($_POST['tmt_leltor_300']));
		$ket = $_POST['ket'];
		$nohp = $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$create_at = date('Y-m-d H:i:s');
		
		$jabatan = $_POST['jabatan'];	
		foreach($jabatan as $val){
			$id_jabatan = $val;
			$sql = "INSERT INTO jabatan_staff(id_jj,id_staff,create_at) VALUES('$id_jabatan','$nik','$create_at')";
			$simpan_jab = query($sql);
		}

		$instansi = $_POST['instansi'];	
		foreach($instansi as $val){
			$id_instansi = $val;
			$sql = "INSERT INTO instansi_staff(id_instansi,id_staff,created_at) VALUES('$id_instansi','$nik','$create_at')";
			$simpan_jab = query($sql);
		}
		
		$sql = "INSERT INTO staff (id_staff,no_ktp,nm_staff,nidn,id_prodi,id_jabfung,instansi,status,pend_terakhir,lanjut_studi,perguruan_tinggi,sls_studi,tempat_lahir,tgl_lahir,st,tmt,masa_kerja,gol,tmt_aa,tmt_leltor_200,tmt_leltor_300,ket,nohp,alamat,create_at) VALUES('$nik','$no_ktp','$nm_staff','$nidn','$id_prodi','$id_jabfung','$instansi','$status','$pend_terakhir','$lanjut_studi','$perguruan_tinggi','$sls_studi','$tempat_lahir','$tgl_lahir','$st','$tmt','$masa_kerja','$gol','$tmt_aa','$tmt_leltor_200','$tmt_leltor_300','$ket','$nohp','$alamat','$create_at')";
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}



function staff_edit(){
	if(isset($_POST['btnEditStaff'])){
		$nik = $_POST['nik'];
		$no_ktp = $_POST['no_ktp'];
		$nm_staff = $_POST['nm_staff'];
		$nidn = $_POST['nidn'];
		$id_prodi = $_POST['id_prodi'];
		$id_jabfung = $_POST['id_jabfung'];
		$instansi = $_POST['instansi'];
		$status = $_POST['status'];
		$pend_terakhir = $_POST['pend_terakhir'];
		$lanjut_studi = $_POST['lanjut_studi'];
		$perguruan_tinggi = $_POST['perguruan_tinggi'];
		$sls_studi = $_POST['sls_studi'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tgl_lahir = date('Y-m-d',strtotime($_POST['tgl_lahir']));
		$st = $_POST['st'];
		$tmt = date('Y-m-d',strtotime($_POST['tmt']));
		$masa_kerja = $_POST['masa_kerja'];
		$gol = $_POST['gol'];
		$tmt_aa = date('Y-m-d',strtotime($_POST['tmt_aa']));
		$tmt_leltor_200 = date('Y-m-d',strtotime($_POST['tmt_leltor_200']));
		$tmt_leltor_300 = date('Y-m-d',strtotime($_POST['tmt_leltor_300']));
		$ket = $_POST['ket'];
		$nohp = $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$modified_at = date('Y-m-d H:i:s');
		
		$jabatan = $_POST['jabatan'];	
		

			
		$hps = "DELETE FROM jabatan_staff WHERE id_staff='$nik'";
		$hps_jab = query($hps);
		
		if(is_array($jabatan)){
			foreach($jabatan as $val){
				$id_jabatan = $val;
				
				$sql = "INSERT INTO jabatan_staff(id_jj,id_staff) VALUES('$id_jabatan','$nik')";
				$simpan_jab = query($sql);

				
			}
		}

		$hps = "DELETE FROM instansi_staff WHERE id_staff='$nik'";
		$hps_jab = query($hps);
		
		if(is_array($instansi)){
			foreach($instansi as $val){
				$id_instansi = $val;
				
				$sql = "INSERT INTO instansi_staff(id_instansi,id_staff) VALUES('$id_instansi','$nik')";
				$simpan_jab = query($sql);

				
			}
		}

		
		$sql = "UPDATE staff SET no_ktp='$no_ktp',nm_staff='$nm_staff',nidn='$nidn',id_prodi='$id_prodi',id_jabfung='$id_jabfung',instansi='$instansi',status='$status',pend_terakhir='$pend_terakhir',lanjut_studi='$lanjut_studi',perguruan_tinggi='$perguruan_tinggi',sls_studi='$sls_studi',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',st='$st',tmt='$tmt',masa_kerja='$masa_kerja',gol='$gol',tmt_aa='$tmt_aa',tmt_leltor_200='$tmt_leltor_200',tmt_leltor_300='$tmt_leltor_300',ket='$ket',nohp='$nohp',alamat='$alamat',modified_at='$modified_at' WHERE id_staff='$nik'";
		
		$simpan = query($sql);
		if($simpan){
			return TRUE;
		}
		return FALSE;
	}
}

function cetak2(){
	$tgl1     = $_GET['jabatan'];

    $no    =  0;
    $no1	= 0;
    // fungsi query untuk menampilkan data dari tabel obat masuk
    $query = "SELECT jabfung.id_jabfung,jabfung.nm_jabfung,staff.id_jabfung,staff.id_staff,staff.nm_staff,staff.nidn,staff.id_prodi,staff.pend_terakhir,staff.lanjut_studi,staff.perguruan_tinggi,staff.sls_studi,staff.tempat_lahir,staff.tgl_lahir,staff.st,staff.tmt,staff.masa_kerja,staff.gol,staff.tmt_aa,staff.tmt_leltor_200,staff.tmt_leltor_300,staff.ket,staff.nohp,staff.alamat,jenis_jabatan.id_jj,jenis_jabatan.nm_jabatan,jabatan_staff.id_jj,jabatan_staff.id_staff,staff.status,staff.instansi
FROM staff
JOIN jabfung
ON staff.id_jabfung=jabfung.id_jabfung
JOIN jabatan_staff
ON staff.id_staff=jabatan_staff.id_staff
JOIN jenis_jabatan
ON jabatan_staff.id_jj=jenis_jabatan.id_jj ORDER BY nm_staff ASC
WHERE jabatan_staff.id_jj = $tgl1";
$data = tampil($query);

	if($data){
		foreach($data as $val){
			$id_staff = $val['id_staff'];
			$jabatan = tampil("SELECT jenis_jabatan.nm_jabatan FROM jabatan_staff INNER JOIN jenis_jabatan ON jabatan_staff.id_jj = jenis_jabatan.id_jj WHERE jabatan_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no]['jabatan']= $jabatan ;
			$no++;
		}
	}

	if($data){
		foreach($data as $val){
			$id_staff = $val['id_staff'];
			$instansi = tampil("SELECT instansi.nm_instansi FROM instansi_staff INNER JOIN instansi ON instansi_staff.id_instansi = instansi.id_instansi WHERE instansi_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no1]['instansi']= $instansi ;
			$no1++;
		}
	}

	return $data;
}

function excel_jabatan1(){

    $no    =  0;
    $no1	= 0;
    // fungsi query untuk menampilkan data dari tabel obat masuk
    $query = "SELECT jabfung.id_jabfung,jabfung.nm_jabfung,staff.id_jabfung,staff.id_staff,staff.nm_staff,staff.nidn,staff.id_prodi,staff.pend_terakhir,staff.lanjut_studi,staff.perguruan_tinggi,staff.sls_studi,staff.tempat_lahir,staff.tgl_lahir,staff.st,staff.tmt,staff.masa_kerja,staff.gol,staff.tmt_aa,staff.tmt_leltor_200,staff.tmt_leltor_300,staff.ket,staff.nohp,staff.alamat,jenis_jabatan.id_jj,jenis_jabatan.nm_jabatan,jabatan_staff.id_jj,jabatan_staff.id_staff,staff.status,staff.instansi
FROM staff
JOIN jabfung
ON staff.id_jabfung=jabfung.id_jabfung
JOIN jabatan_staff
ON staff.id_staff=jabatan_staff.id_staff
JOIN jenis_jabatan
ON jabatan_staff.id_jj=jenis_jabatan.id_jj
WHERE jabatan_staff.id_jj";
$data = tampil($query);

	if($data){
		foreach($data as $val){
			$id_staff = $val['id_staff'];
			$jabatan = tampil("SELECT jenis_jabatan.nm_jabatan FROM jabatan_staff INNER JOIN jenis_jabatan ON jabatan_staff.id_jj = jenis_jabatan.id_jj WHERE jabatan_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no]['jabatan']= $jabatan ;
			$no++;
		}
	}

	if($data){
		foreach($data as $val){
			$id_staff = $val['id_staff'];
			$instansi = tampil("SELECT instansi.nm_instansi FROM instansi_staff INNER JOIN instansi ON instansi_staff.id_instansi = instansi.id_instansi WHERE instansi_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no1]['instansi']= $instansi ;
			$no1++;
		}
	}

	return $data;
}

function cetak3(){
	$tgl1     = $_GET['instansi'];
    $no    =  0;
    $no1	= 0;
    // fungsi query untuk menampilkan data dari tabel obat masuk
    $query = "SELECT jabfung.id_jabfung,jabfung.nm_jabfung,staff.id_jabfung,staff.id_staff,staff.nm_staff,staff.nidn,staff.id_prodi,staff.pend_terakhir,staff.lanjut_studi,staff.perguruan_tinggi,staff.sls_studi,staff.tempat_lahir,staff.tgl_lahir,staff.st,staff.tmt,staff.masa_kerja,staff.gol,staff.tmt_aa,staff.tmt_leltor_200,staff.tmt_leltor_300,staff.ket,staff.nohp,staff.status,staff.alamat,instansi.nm_instansi,instansi_staff.id_staff,instansi_staff.id_instansi
FROM staff
JOIN jabfung
ON staff.id_jabfung=jabfung.id_jabfung
JOIN instansi_staff
ON staff.id_staff=instansi_staff.id_staff
JOIN instansi
ON instansi_staff.id_instansi=instansi.id_instansi
WHERE instansi_staff.id_instansi = $tgl1";
$data = tampil($query);

	if($data){
		foreach($data as $val){
			$id_staff = $val['id_staff'];
			$jabatan = tampil("SELECT jenis_jabatan.nm_jabatan FROM jabatan_staff INNER JOIN jenis_jabatan ON jabatan_staff.id_jj = jenis_jabatan.id_jj WHERE jabatan_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no]['jabatan']= $jabatan ;
			$no++;
		}
	}

	if($data){
		foreach($data as $val){
			$id_staff = $val['id_staff'];
			$instansi = tampil("SELECT instansi.nm_instansi FROM instansi_staff INNER JOIN instansi ON instansi_staff.id_instansi = instansi.id_instansi WHERE instansi_staff.id_staff = '$id_staff'");
			$n=0;
			$data[$no1]['instansi']= $instansi ;
			$no1++;
		}
	}

	return $data;
}

function cetak4(){
	$tgl1 = $_POST['id_staff'];
    // fungsi query untuk menampilkan data dari tabel obat masuk
    $query = "SELECT * FROM staff WHERE id_staff = '$tgl1'";
    $data = tampil($query);
	return $data;
	}


function staff_delete(){
	if(isset($_POST['btnDeleteStaff'])){
		$id_staff = $_POST['id_staff'];
		
		$sql = "DELETE FROM staff WHERE id_staff='$id_staff'";
		$hps = query($sql);
		if($hps){
		$sql1 = "DELETE FROM jabatan_staff WHERE id_staff='$id_staff'";
		$hps1 = query($sql1);
			return TRUE;
		}
		return FALSE;
	}
}




?>