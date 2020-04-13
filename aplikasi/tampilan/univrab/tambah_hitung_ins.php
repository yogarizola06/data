<?php
require_once 'html_header.php';
require_once 'html_header.php';
if(isset($_POST['btnAddHitungIns'])){
	$simpan = jmlinstansi();
}
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Instansi</h2>
								<h5 class="text-white op-7 mb-2">Tambah Data Instansi</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tambah Data Instansi</div>
								</div>
								
								<form method="post" action="">					
								<div class="card-body">
								
								<?php
								if(isset($simpan)){
									if($simpan){
									?>
									<div class="alert alert-success">
										Data Instansi Berhasil Disimpan!
									</div>
									<?php
									}else{
									?>
									<div class="alert alert-success">
										Data Instansi Gagal Disimpan, Isi Data Dengan Benar!
									</div>
									<?php	
									}
								}
								?>
									<div class="row">
									
										<div class="col-md-6 col-lg-4">
											<div class="form-check">
												<label for="nama">Instansi</label>
												<?php $data = instansi_view(); ?>
												<select class="form-control" name="id_instansi">
												<br>
												<?php
													foreach ($data as $value) {
														echo "<option value='".$value['id_instansi']."'>".$value['nm_instansi']."</option>";

													}
												?>	
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-action">
									<input type="submit" name="btnAddHitungIns" class="btn btn-success" value="Tambah">
									<a href="<?php echo URL;?>/index.php/univrab/hitunginstansi" class="btn btn-danger">Kembali</a>
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