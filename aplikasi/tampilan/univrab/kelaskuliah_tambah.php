<?php
require_once 'html_header.php';
if(isset($_POST['btnambil'])){
	$ambil = kelas_kuliah_tambah();
}

$matkul = daftar_matkul_smt_ini();
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Kelas Kuliah</h2>
								<h5 class="text-white op-7 mb-2">Ambil Kelas Kuliah</h5>
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Ambil Kelas Kuliah Semester Ini</h4>
								</div>
								<div class="card-body">
								<?php
									if(isset($ambil)){
										if($ambil){
										?>
										<div class="alert alert-success">
											Data Kelas Kuliah Berhasil Diambil!
										</div>
										<?php
										}else{
										?>
										<div class="alert alert-success">
											Data Kelas Kuliah Gagal Diambil!
										</div>
										<?php	
										}
									}
									?>
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Kode Mk</th>
													<th>Nama Mk</th>
													<th>Dosen</th>
													<th>SKS</th>
													<th>Semester</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Kode Mk</th>
													<th>Nama Mk</th>
													<th>Dosen</th>
													<th>SKS</th>
													<th>Semester</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
											<?php
											$data = $matkul;
											$no=0;
											if($data){
											foreach($data as $val){
											?>	
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $val['kode_mk'];?></td>
													<td><?php echo $val['nm_mk'];?></td>
													<td><?php echo $val['nm_dsn'];?></td>
													<td><?php echo $val['sks_mk'];?></td>
													<td><?php echo $val['smt'];?></td>
													<td>
														
														<a href="" class="btn btn-xs btn-success" style="color:#730a0ac7" title="Ambil MataKuliah" data-toggle="modal" data-target="#ambil<?php echo $val['id_ma'];?>">Ambil
														</a>
														<!-- Modal -->
														  <div class="modal fade" id="ambil<?php echo $val['id_ma'];?>" role="dialog">
															<div class="modal-dialog">
															<form method="post" action="">
															  <!-- Modal content-->
															  <div class="modal-content">
																<div class="modal-header">
																  <button type="button" class="close" data-dismiss="modal">&times;</button>
																  <h4 class="modal-title">Ambil Kelas kuliah</h4>
																</div>
																<div class="modal-body">
																  <p>Anda Yakin Ingin Ambil <b><?php echo $val['nm_mk'];?></b> ?</p>
																  <input type="hidden" name="idambil" value="<?php echo $val['id_ma'];?>" />
																</div>
																<div class="modal-footer">
																  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																  <input type="submit" name="btnambil" value="Ambil" class="btn btn-success"/>
																</div>
															  </div>
															</form>
															</div>
														  </div>
													</td>
												</tr>	
											<?php	
											}
											}
											?>
												
											</tbody>
										</table>
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
								<a class="nav-link" href="#">
									Aprizal
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2019, Tugas Akhir by <a href="">Aprizal</a>
					</div>				
				</div>
			</footer>
		</div>
<?php
require_once 'html_footer.php';
?>