<?php
require_once 'html_header.php';
$data = $view;
?>
<div class="main-panel">
	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
						<h5 class="text-white op-7 mb-2">Halaman Dashboard</h5>
					</div>

				</div>
			</div>
		</div>
		<div class="page-inner mt--5">
			<div class="row mt--2">
				<div class="col-md-12">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title">Detail</div>
							<div class="card-category"></div>
							<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">

								<div class="form-group">
									<label>NIK</label>
									:<br>  <?php echo $data[0]['id_staff']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Nomor KTP</label>
									:<br>  <?php echo $data[0]['no_ktp']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Nama</label>
									:<br>  <?php echo $data[0]['nm_staff']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>NIDN</label>
									:<br>  <?php echo $data[0]['nidn']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Program Studi</label>
									<?php $idprodi = $data[0]['id_prodi'];
									$data3 = prodi_view("id_prodi='$idprodi'"); 
									?>
									: <br> 
									<?php 

									echo $data3[0]['nm_prodi'];

									?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Jabatan Fungsional</label>
									<?php $idjabfung = $data[0]['id_jabfung'];
									$data2 = jabfung_view("id_jabfung='$idjabfung'"); 
									?>
									: <br> 
									<?php 

									echo $data2[0]['nm_jabfung'];

									?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Instansi</label>
									:<br>  <?php echo $data[0]['instansi']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Status</label>
									:<br>  <?php echo $data[0]['status']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Jabatan</label>
									<?php $dat8 = jenisjabatan_view(); ?>
									<?php
									$idjabatan = $data[0]['id_staff'];
									$jj = jabatanstaff_view("id_staff='$idjabatan'");
									?>

									:<br> 
									<?php

									if($jj['id_jj'] == $dat8['id_jj']){
										if(is_array($data[0]['jabatan'])){
											foreach ($data[0]['jabatan'] as $value) {
												echo '- '.$value['nm_jabatan'].'<br>';
											}
										}
									}

									?>

								</div>
								<br>
								<div class="form-group">
									<label>Instansi</label>
									:<br> <?php echo $data[0]['instansi']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Pendidikan Terakhir</label>
									:<br> <?php echo $data[0]['pend_terakhir']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Lanjut Studi</label>
									:<br> <?php echo $data[0]['lanjut_studi']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Perguruan Tinggi</label>
									:<br> <?php echo $data[0]['perguruan_tinggi']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Tempat Lahir</label>
									:<br> <?php echo $data[0]['tempat_lahir']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									:<br> <?php echo $data[0]['tgl_lahir']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>ST</label>
									:<br> <?php echo $data[0]['st']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>TMT</label>
									:<br> <?php echo $data[0]['tmt']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Masa Kerja</label>
									:<br> <?php echo $data[0]['masa_kerja']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Golongan</label>
									:<br> <?php echo $data[0]['gol']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>TMT AA</label>
									:<br> <?php echo $data[0]['tmt_aa']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>TMT Leltor 200</label>
									:<br> <?php echo $data[0]['tmt_leltor_200']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>TMT Leltor 300</label>
									:<br> <?php echo $data[0]['tmt_leltor_300']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Keterangan</label>
									:<br> <?php echo $data[0]['ket']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>No Hp</label>
									:<br> <?php echo $data[0]['nohp']; ?></label>
								</div>
								<br>
								<div class="form-group">
									<label>Alamat</label>
									:<br> <?php echo $data[0]['alamat']; ?></label>
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