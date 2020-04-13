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
								<h2 class="text-white pb-2 fw-bold">Program Studi</h2>
								<h5 class="text-white op-7 mb-2">Edit Data Program Studi</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data Program Studi</div>
								</div>
								
								<form method="post" action="">					
								<div class="card-body">
								
								<?php
								if(isset($simpan)){
									if($simpan){
									?>
									<div class="alert alert-success">
										Data Program Studi Berhasil Diedit!
									</div>
									<?php
									}else{
									?>
									<div class="alert alert-success">
										Data Program Studi Gagal Diedit, Isi Data Dengan Benar!
									</div>
									<?php	
									}
								}
								?>
									<div class="row">
									
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="nama">Nama Program Studi</label>
												<input type="text" class="form-control" name="nm_prodi" id="nm_prodi" value="<?php echo $data[0]['nm_prodi'];?>" placeholder="Nama Prodi" required>
												<input type="hidden" class="form-control" name="id_prodi" id="id_prodi" value="<?php echo $data[0]['id_prodi'];?>" placeholder="Nama prodi" required>
											</div>
											<div class="form-group">
												<label for="nama">Nama Fakultas</label>
												<?php $data1 = fakultas_view(); ?>
												<select class="form-control" name="id_fakultas">
												<?php
												$idfakultas = $data[0]['id_fakultas'];
													foreach ($data1 as $value) {
													
														if($idfakultas == $value['id_fakultas']){
															echo "<option value='".$value['id_fakultas']."' selected>".$value['nm_fakultas']."</option>";
														}else{
															echo "<option value='".$value['id_fakultas']."'>".$value['nm_fakultas']."</option>";
														}
														
													}

												?>	

												</select>
											</div>
										</div>
										</div>
									</div>
								</div>
								
								<div class="card-action">
									<input type="submit" name="btnEditProdi" class="btn btn-success" value="Edit">
									<a href="<?php echo URL;?>/index.php/univrab/prodi" class="btn btn-danger">Kembali</a>
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