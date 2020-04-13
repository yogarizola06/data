<?php
require_once 'html_header.php';
require_once 'html_header.php';

$data = $view;
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Staff</h2>
								<h5 class="text-white op-7 mb-2">Edit Data Staff</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data Staff</div>
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
												<input type="text" class="form-control" name="nik" id="nik"  value="<?php echo $data[0]['id_staff'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">No KTP</label>
												<input type="text" class="form-control" name="no_ktp" id="no_ktp"  value="<?php echo $data[0]['no_ktp'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">Nama Staff</label>
												<input type="text" class="form-control" name="nm_staff" id="nm_staff"  value="<?php echo $data[0]['nm_staff'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">NIDN</label>
												<input type="text" class="form-control" name="nidn" id="nidn"  value="<?php echo $data[0]['nidn'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">Nama Prodi</label>
												<?php $data3 = prodi_view(); ?>
												<select class="form-control" name="id_prodi">
												<?php
												$idprodi = $data[0]['id_prodi'];
													foreach ($data3 as $value) {
													
														if($idprodi == $value['id_prodi']){
															echo "<option value='".$value['id_prodi']."' selected>".$value['nm_prodi']."</option>";
														}else{
															echo "<option value='".$value['id_prodi']."'>".$value['nm_prodi']."</option>";
														}
														
													}

												?>	

												</select>
											</div>

											<div class="form-group">
												<label for="nama">Nama Jabatan Fungsional</label>
												<?php $data1 = jabfung_view(); ?>
												<select class="form-control" name="id_jabfung">
												<?php
												$idjabfung = $data[0]['id_jabfung'];
													foreach ($data1 as $value) {
													
														if($idjabfung == $value['id_jabfung']){
															echo "<option value='".$value['id_jabfung']."' selected>".$value['nm_jabfung']."</option>";
														}else{
															echo "<option value='".$value['id_jabfung']."'>".$value['nm_jabfung']."</option>";
														}
														
													}

												?>	

												</select>
											</div>

											<!-- <div class="form-group">
												<label for="nama">Instansi</label>
												<select class="form-control" name="instansi">
													<?php echo "<option value='".$data[0]['instansi']."'>".$data[0]['instansi']."</option>" ?>
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
													<?php echo "<option value='".$data[0]['status']."'>".$data[0]['status']."</option>" ?>
													<option value="Aktif">Aktif</option>
													<option value="Mutasi">Mutasi</option>
													<option value="Keluar">Keluar</option>
													<option value="Hilang">Hilang</option>
												</select>
											</div>
											

											<div class="form-check">
												<label for="nama">Jabatan Struktural</label>
												<?php $data2 = jenisjabatan_view(); ?>
												<br>
												
												<?php
												$idjabatan = $data[0]['id_staff'];
												$jj = jabatanstaff_view("id_staff='$idjabatan'");
												$sts=0;
												

												foreach ($data2 as $value) {
													$sts=0;
													if(is_array($jj)){
													foreach ($jj as $val) {
														if($val['id_jj'] == $value['id_jj']){
															echo "<label class='form-check-label'><input type='checkbox' class='form-check-input' value='".$value['id_jj']."' name='jabatan[]' checked><span class='form-check-sign' > ".$value['nm_jabatan']."</span> </label>";
															$sts=1;
														}
													}
													}
													if($sts==0){
														echo "<label class='form-check-label'><input type='checkbox' class='form-check-input' value='".$value['id_jj']."' name='jabatan[]'><span class='form-check-sign' > ".$value['nm_jabatan']."</span> </label>";
													}
												}
													
												?>	
											</div>
											</div>

										<div class="col-md-4 col-lg-4">

											<div class="form-check">
												<label for="nama">Instansi</label>
												<?php $data98 = instansi_view(); ?>
												<br>
												
												<?php
												$idinstansi = $data[0]['id_staff'];
												$instansi = instansistaff_view("id_staff='$idinstansi'");
												$sts=0;
												

												foreach ($data98 as $value) {
													$sts=0;
													if(is_array($instansi)){
													foreach ($instansi as $val) {
														if($val['id_instansi'] == $value['id_instansi']){
															echo "<label class='form-check-label'><input type='checkbox' class='form-check-input' value='".$value['id_instansi']."' name='instansi[]' checked><span class='form-check-sign' > ".$value['nm_instansi']."</span> </label>";
															$sts=1;
														}
													}
													}
													if($sts==0){
														echo "<label class='form-check-label'><input type='checkbox' class='form-check-input' value='".$value['id_instansi']."' name='instansi[]'><span class='form-check-sign' > ".$value['nm_instansi']."</span> </label>";
													}
												}
													
												?>	
											</div>


											<div class="form-group">
												<label for="nama">Pendidikan Terakhir</label>
												<input type="text" class="form-control" name="pend_terakhir" id="pend_terakhir" value="<?php echo $data[0]['pend_terakhir'];?>" required>
											</div>

										
											<div class="form-group">
												<label for="nama">Perguruan Tinggi</label>
												<input type="text" class="form-control" name="perguruan_tinggi" id="perguruan_tinggi" value="<?php echo $data[0]['perguruan_tinggi'];?>">
											</div>

											<div class="form-group">
												<label for="nama">Lanjut Studi</label>
												<input type="text" class="form-control" name="lanjut_studi" id="lanjut_studi" value="<?php echo $data[0]['lanjut_studi'];?>">
											</div>

											<div class="form-group">
												<label for="nama">Selesai Studi</label>
												<select class="form-control" name="sls_studi">
													<?php echo "<option value='".$data[0]['sls_studi']."'>".$data[0]['sls_studi']."</option>" ?>
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
												<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $data[0]['tempat_lahir'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">Tanggal Lahir</label>
												<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $data[0]['tgl_lahir'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">ST</label>
												<select class="form-control" name="st">
													<?php echo "<option value='".$data[0]['st']."'>".$data[0]['st']."</option>" ?>
													<option value="B">B</option>
													<option value="BM">BM</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Tahun Mulai</label>
												<input type="date" class="form-control tanggalmasakerja" name="tmt" id="tmt" value="<?php echo $data[0]['tmt'];?>" required>
											</div>

										</div>
										

										<div class="col-md-4 col-lg-4">
											<div class="form-group">
												<label for="nama">Golongan</label>
												<input type="text" class="form-control" name="gol" id="gol" value="<?php echo $data[0]['gol'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">Masa Kerja</label>
												<input type="text" class="form-control tanggalhasilkerja" name="masa_kerja" id="masa_kerja" value="<?php echo $data[0]['masa_kerja'];?>" required>
											</div>

											<div class="form-group">
												<label for="nama">TMT AA</label>
												<input type="date" class="form-control" name="tmt_aa" id="tmt_aa" value="<?php echo $data[0]['tmt_aa'];?>"  required>
											</div>

											<div class="form-group">
												<label for="nama">TMT Leltor 200</label>
												<input type="date" class="form-control" name="tmt_leltor_200" id="tmt_leltor_200" value="<?php echo $data[0]['tmt_leltor_200'];?>" >
											</div>

											<div class="form-group">
												<label for="nama">TMT Leltor 300</label>
												<input type="date" class="form-control" name="tmt_leltor_300" id="tmt_leltor_300" value="<?php echo $data[0]['tmt_leltor_300'];?>" >
											</div>

											<div class="form-group">
												<label for="nama">Keterangan</label>
												<input type="textfield" class="form-control" name="ket" id="ket" value="<?php echo $data[0]['ket'];?>" >
											</div>

											<div class="form-group">
												<label for="nama">Nomor HP</label>
												<input type="text" class="form-control" name="nohp" id="nohp" value="<?php echo $data[0]['nohp'];?>" >
											</div>

											<div class="form-group">
												<label for="nama">Alamat</label>
												<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data[0]['alamat'];?>" >
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-action">
									<input type="submit" name="btnEditStaff" class="btn btn-success" value="Edit">
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