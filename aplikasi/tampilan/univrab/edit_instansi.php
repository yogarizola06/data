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
								<h2 class="text-white pb-2 fw-bold">Instansi</h2>
								<h5 class="text-white op-7 mb-2">Edit Data Instansi</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data Instansi</div>
								</div>
								
								<form method="post" action="">					
								<div class="card-body">
								
								<?php
								if(isset($simpan)){
									if($simpan){
									?>
									<div class="alert alert-success">
										Data Instansi Berhasil Diedit!
									</div>
									<?php
									}else{
									?>
									<div class="alert alert-success">
										Data Instansi Gagal Diedit, Isi Data Dengan Benar!
									</div>
									<?php	
									}
								}
								?>
									<div class="row">
									
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="nama">Nama Instansi</label>
												<input type="text" class="form-control" name="nm_instansi" id="nm_instansi" value="<?php echo $data[0]['nm_instansi'];?>" placeholder="Nama Instansi" required>
												<input type="hidden" class="form-control" name="id_instansi" id="id_instansi" value="<?php echo $data[0]['id_instansi'];?>" placeholder="Nama Instansi" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-action">
									<input type="submit" name="btnEditIns" class="btn btn-success" value="Edit">
									<a href="<?php echo URL;?>/index.php/univrab/instansi" class="btn btn-danger">Kembali</a>
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