<?php
require_once 'html_header.php';
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Export Excel</h2>
								<h5 class="text-white op-7 mb-2">Halaman Export Excel</h5>
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Export Excel Jabatan</div>
									<div class="card-category"></div>
									<form method="GET" action="<?php echo URL;?>/index.php/univrab/proses_excel/" target="_blank">
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<!-- <?php echo URL;?>/index.php/univrab/cetak_pdf/ -->
												

										<div class="col-md-12 col-lg-12">
											<div class="form-group">
												<label for="nama">Jabatan</label>
												<?php $data = jenisjabatan_view(); ?>
												<select class="form-control" name="jabatan">
													<option>Pilih Jabatan</option>
												<?php
													foreach ($data as $value) {
														echo "<option value='".$value['id_jj']."'>".$value['nm_jabatan']."</option>";
													}
												?>	
												</select>
											</div>
										</div>
										<div class="form-group">
												<label for="nama">Ubah Kolom Nama Menjadi:</label>
												<select class="form-control" name="label">
													<option value="nm_staff">Pilih</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="instansi">Instansi</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="gol">Golongan</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom Jabatan Menjadi:</label>
												<select class="form-control" name="label1">
													<option value="jabatan">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="instansi">Instansi</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="gol">Golongan</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom NIK Menjadi:</label>
												<select class="form-control" name="label2">
													<option value="id_staff">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="instansi">Instansi</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="gol">Golongan</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom NO HP Menjadi:</label>
												<select class="form-control" name="label3">
													<option value="nohp">Pilih</option>
													<option value="id_staff">NIK</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="instansi">Instansi</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="gol">Golongan</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom Tahun Mulai Kerja Menjadi:</label>
												<select class="form-control" name="label4">
													<option value="tmt">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="instansi">Instansi</option>
													<option value="gol">Golongan</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom Jabatan Fungsional Menjadi:</label>
												<select class="form-control" name="label5">
													<option value="jabfung">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="instansi">Instansi</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="gol">Golongan</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom Tanggal Lahir Menjadi:</label>
												<select class="form-control" name="label6">
													<option value="tgl_lahir">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="instansi">Instansi</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="gol">Golongan</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom Golongan Menjadi:</label>
												<select class="form-control" name="label7">
													<option value="gol">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="nohp">NO HP</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="instansi">Instansi</option>
													<option value="alamat">Alamat</option>
												</select>
											</div>

											<div class="form-group">
												<label for="nama">Ubah Kolom Alamat Menjadi:</label>
												<select class="form-control" name="label8">
													<option value="alamat">Pilih</option>
													<option value="nm_staff">Nama Staff</option>
													<option value="id_staff">NIK Staff</option>
													<option value="no_ktp">NO KTP</option>
													<option value="nidn">NIDN</option>
													<option value="prodi">Program Studi</option>
													<option value="jabfung">Jabatan Fungsional</option>
													<option value="status">Status</option>
													<option value="jabatan">Jabatan Struktural</option>
													<option value="pend_terakhir">Pendidikan Terakhir</option>
													<option value="perguruan_tinggi">Perguruan Tinggi</option>
													<option value="lanjut_studi">Lanjut Studi</option>
													<option value="sls_studi">Selesai Studi</option>
													<option value="tempat_lahir">Tempat Lahir</option>
													<option value="tgl_lahir">Tanggal Lahir</option>
													<option value="st">ST</option>
													<option value="tmt">Tahun Mulai Kerja</option>
													<option value="instansi">Instansi</option>
													<option value="masa_kerja">Masa Kerja</option>
													<option value="tmt_aa">TMT AA</option>
													<option value="tmt_leltor_200">TMT Leltor 200</option>
													<option value="tmt_leltor_300">TMT Leltor 300</option>
													<option value="ket">Keterangan</option>
													<option value="nohp">NO HP</option>
													<option value="gol">Golongan</option>
												</select>
											</div>
										</div>

										
									</div>
								</div>
								
								<div class="card-action">
									<button type="submit" class="btn btn-primary btn-social btn-submit"><i class="fa fa-print"></i> Export Excel
                </button>
									<a href="<?php echo URL;?>/index.php/univrab/cetak" class="btn btn-danger">Kembali</a>
								</div>
								</form>
							</div>
						</div>
					</div>
												
												
										
									</div>
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
		<script>
		window.onload = function() {
			Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 10,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
			})
			Circles.create({
			id:'circles-2',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 107,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
			})
			Circles.create({
			id:'circles-3',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 60,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
			})

		
		};
		</script>
<?php
require_once 'html_footer.php';
?>