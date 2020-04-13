<?php
require_once 'html_header.php';
if(isset($_POST['btnhapus'])){
	$hps = kelas_kuliah_hapus();
}
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Kelas Kuliah</h2>
								<h5 class="text-white op-7 mb-2">Semua Data Kelas Kuliah</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">	
								<a href="<?php echo URL;?>/index.php/mahasiswa/kelaskuliah/tambah" class="btn btn-success">Tambah Kelas Kuliah</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Kelas Kuliah</h4>
								</div>
								<div class="card-body">
								<?php
									if(isset($hps)){
										if($hps){
										?>
										<div class="alert alert-success">
											Data Kelas Kuliah Berhasil Dihapus!
										</div>
										<?php
										}else{
										?>
										<div class="alert alert-success">
											Data Kelas Kuliah Gagal Dihapus!
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
													<th>Status</th>
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
													<th>Status</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
											<?php
											$data = kelas_kuliah_semua();
											$no=0;
											if($data){
											foreach($data as $val){
												$no++;
												
												if($val['status'] == 0){
													$sts = 'Tidak Aktif';
												}else{
													$sts = 'Aktif';
												}
											?>	
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $val['kode_mk'];?></td>
													<td><?php echo $val['nm_mk'];?></td>
													<td><?php echo $val['nm_dsn'];?></td>
													<td><?php echo $val['sks_mk'];?></td>
													<td><?php echo $sts;?></td>
													<td>
														
														<a href="" class="fa fa-trash" style="color:#730a0ac7" title="Hapus Data" data-toggle="modal" data-target="#hapus<?php echo $val['id_kelas'];?>">
														</a>
														<!-- Modal -->
														  <div class="modal fade" id="hapus<?php echo $val['id_kelas'];?>" role="dialog">
															<div class="modal-dialog">
															<form method="post" action="">
															  <!-- Modal content-->
															  <div class="modal-content">
																<div class="modal-header">
																  <button type="button" class="close" data-dismiss="modal">&times;</button>
																  <h4 class="modal-title">Hapus Data</h4>
																</div>
																<div class="modal-body">
																  <p>Anda Yakin Ingin Menghapus Kelas Kuliah Ini <b></b> ?</p>
																  <input type="hidden" name="idhapus" value="<?php echo $val['id_kelas'];?>" />
																</div>
																<div class="modal-footer">
																  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																  <input type="submit" name="btnhapus" value="Hapus" class="btn btn-danger"/>
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