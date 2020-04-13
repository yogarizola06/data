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
								<h2 class="text-white pb-2 fw-bold">Fakultas</h2>
								<h5 class="text-white op-7 mb-2">Edit Data Fakultas</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data Fakultas</div>
								</div>
								
								<form method="post" action="">					
								<div class="card-body">
								
								<?php
								if(isset($simpan)){
									if($simpan){
									?>
									<div class="alert alert-success">
										Data Fakultas Berhasil Diedit!
									</div>
									<?php
									}else{
									?>
									<div class="alert alert-success">
										Data Fakultas Gagal Diedit, Isi Data Dengan Benar!
									</div>
									<?php	
									}
								}
								?>
									<div class="row">
									
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="nama">Nama Fakultas</label>
												<input type="text" class="form-control" name="nm_fakultas" id="nm_fakultas" value="<?php echo $data[0]['nm_fakultas'];?>" placeholder="Nama Fakultas" required>
												<input type="hidden" class="form-control" name="id_fakultas" id="id_fakultas" value="<?php echo $data[0]['id_fakultas'];?>" placeholder="Nama Fakultas" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card-action">
									<input type="submit" name="btnEditFakultas" class="btn btn-success" value="Edit">
									<a href="<?php echo URL;?>/index.php/univrab/fakultas" class="btn btn-danger">Kembali</a>
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
								<a class="nav-link" href="#">
									Aprizal
								</a>
							</li>
						</ul>
					</nav>		
				</div>
			</footer>
		</div>
<?php
require_once 'html_footer.php';
?>