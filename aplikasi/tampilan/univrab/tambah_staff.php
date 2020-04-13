<?php
require_once 'html_header.php';
require_once 'html_header.php';
if(isset($_POST['btnAddStaff'])){
	$simpan = staff_add();
}
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Staff</h2>
								<h5 class="text-white op-7 mb-2">Tambah Data Staff</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tambah Data Staff</div>
									<form enctype="multipart/form-data" method="post" role="form" action="<?php echo URL;?>/index.php/univrab/import">
            <div class="form-group">
                <label for="exampleInputFile">Upload File</label>
                <input type="file" name="file" id="file" size="150">
                <p class="help-block">Hanya file Excel/CSV diperbolehkan</p>
            </div>
            <button type="import" class="btn btn-default" name="import" value="Import">Upload</button>
        </form>
								</div>
								
								<form method="post" action="">					
								<div class="card-body">
								
								<?php
								if(isset($simpan)){
									if($simpan){
									?>
									<div class="alert alert-success">
										Data Staff Berhasil Disimpan!
									</div>
									<?php
									}else{
									?>
									<div class="alert alert-success">
										Data Staff Gagal Disimpan, Isi Data Dengan Benar!
									</div>
									<?php	
									}
								}
								?>
									<div class="row">
									
										<div class="col-md-4 col-lg-4">
											<div class="form-group">
												<label for="nama">NIK Staff</label>
												<input type="text" class="form-control" name="nik" id="nik" placeholder="Isi NIK Staff" required>
											</div>

											<div class="form-group">
												<label for="nama">No KTP</label>
												<input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No KTP" required>
											</div>

											<div class="form-group">
												<label for="nama">Nama Staff</label>
												<input type="text" class="form-control" name="nm_staff" id="nm_staff" placeholder="Nama Staff" required>
											</div>

											<div class="form-group">
												<label for="nama">NIDN</label>
												<input type="text" class="form-control" name="nidn" id="nidn" placeholder="NIDN" required>
											</div>

											<div class="form-group">
												<label for="nama">Staff</label>
												<?php $data = prodi_view(); ?>
												<select class="form-control" name="id_fakultas">
													<option>Pilih Staff</option>
												<?php
													foreach ($data as $value) {
														echo "<option value='".$value['id_prodi']."'>".$value['nm_prodi']."</option>";
													}
												?>	
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Jabatan Fungsional</label>
												<?php $data = jabfung_view(); ?>
												<select class="form-control" name="id_jabfung">
													
												<?php
													foreach ($data as $value) {
														echo "<option value='".$value['id_jabfung']."'>".$value['nm_jabfung']."</option>";
													}
												?>	
												</select>
											</div>

											<!-- <div class="form-group">
												<label for="nama">Instansi</label>
												<select class="form-control" name="instansi">
													<option>Pilih</option>
													<option value="universitas">Universitas</option>
													<option value="STEI">STEI</option>
													<option value="AIS">AIS</option>
													<option value="STCH">STCH</option>
													<option value="F&B">F&B</option>
													<option value="Yayasan">Yayasan</option>

												</select>
											</div> -->

											<div class="form-group">
												<label for="nama">Status</label>
												<select class="form-control" name="status">
													<option>Pilih</option>
													<option value="Aktif">Aktif</option>
													<option value="Mutasi">Mutasi</option>
													<option value="Keluar">Keluar</option>
													<option value="Hilang">Hilang</option>

												</select>
											</div>

											<div class="form-check">
												<label for="nama">Jabatan Struktural</label>
												<?php $data = jenisjabatan_view(); ?>
												<br>
												
												<?php
													foreach ($data as $value) {
														echo "<label class='form-check-label'><input type='checkbox' class='form-check-input' value='".$value['id_jj']."' name='jabatan[]'><span class='form-check-sign'> ".$value['nm_jabatan']."</span> </label>";
													}
												?>	
												
											</div>

											

										</div>

										<div class="col-md-4 col-lg-4">
											<div class="form-check">
												<label for="nama">Instansi</label>
												<?php $data = instansi_view(); ?>
												<br>
												
												<?php
													foreach ($data as $value) {
														echo "<label class='form-check-label'><input type='checkbox' class='form-check-input' value='".$value['id_instansi']."' name='instansi[]'><span class='form-check-sign'> ".$value['nm_instansi']."</span> </label>";
													}
												?>	
												
											</div>

											<div class="form-group">
												<label for="nama">Pendidikan Terkahir</label>
												<input type="text" class="form-control" name="pend_terakhir" id="pend_terakhir" placeholder="Pendidikan Terkahir" required>
											</div>

											<div class="form-group">
												<label for="nama">Perguruan Tinggi</label>
												<input type="text" class="form-control" name="perguruan_tinggi" id="perguruan_tinggi" placeholder="Perguruan Tinggi">
											</div>

											<div class="form-group">
												<label for="nama">Lanjut Studi</label>
												<input type="text" class="form-control" name="lanjut_studi" id="lanjut_studi" placeholder="Lanjut Studi">
											</div>

											<div class="form-group">
												<label for="nama">Selesai Studi</label>
												<select class="form-control" name="sls_studi">
													<option>Pilih</option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>

												</select>
											</div>

											<div class="form-group">
												<label for="nama">Tempat Lahir</label>
												<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
											</div>

											<div class="form-group">
												<label for="nama">Tanggal Lahir</label>
												<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tempat Lahir" required>
											</div>

											<div class="form-group">
												<label for="nama">ST</label>
												<select class="form-control" name="st">
													<option>Pilih</option>
													<option value="B">B</option>
													<option value="BM">BM</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Tahun Mulai</label>
												<input type="date" class="form-control tanggalmasakerja" name="tmt" id="tmt" required>
											</div>

										</div>
										

										<div class="col-md-4 col-lg-4">
											<div class="form-group">
												<label for="nama">Golongan</label>
												<input type="text" class="form-control" name="gol" id="gol" placeholder="Golongan" required>
											</div>

											<div class="form-group">
												<label for="nama">Masa Kerja</label>
												<input type="text" class="form-control tanggalhasilkerja" name="masa_kerja" id="masa_kerja" required>
											</div>

											<div class="form-group">
												<label for="nama">TMT AA</label>
												<input type="date" class="form-control" name="tmt_aa" id="tmt_aa"  required>
											</div>

											<div class="form-group">
												<label for="nama">TMT Leltor 200</label>
												<input type="date" class="form-control" name="tmt_leltor_200" id="tmt_leltor_200" >
											</div>

											<div class="form-group">
												<label for="nama">TMT Leltor 300</label>
												<input type="date" class="form-control" name="tmt_leltor_300" id="tmt_leltor_300" >
											</div>

											<div class="form-group">
												<label for="nama">Keterangan</label>
												<input type="textfield" class="form-control" name="ket" id="ket" >
											</div>

											<div class="form-group">
												<label for="nama">Nomor HP</label>
												<input type="text" class="form-control" name="nohp" id="nohp" >
											</div>

											<div class="form-group">
												<label for="nama">Alamat</label>
												<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-action">
									<input type="submit" name="btnAddStaff" class="btn btn-success" value="Tambah">
									<a href="<?php echo URL;?>/index.php/univrab/staff" class="btn btn-danger">Kembali</a>
								</div>
								</form>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							
							<li class="nav-item">

							</li>
						</ul>
					</nav>		
				</div>
			</footer>
		</div>
<?php
require_once 'html_footer.php';
?>