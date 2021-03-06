<?php
require_once 'html_header.php';
if(isset($_POST['btnDeleteHitung'])){
	$hps = hitung_delete();
}
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Kelas Jabatan</h2>
								<h5 class="text-white op-7 mb-2">Semua Data Kelas Jabatan</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">	
								<a href="<?php echo URL;?>/index.php/univrab/tambah_hitung" class="btn btn-success">Tambah ke Grafik </a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Kelas Jabatan</h4>
								</div>
								<div class="card-body">
								<?php
									if(isset($hps)){
										if($hps){
										?>
										<div class="alert alert-success">
											Data Kelas Jabatan Berhasil Dihapus!
										</div>
										<?php
										}else{
										?>
										<div class="alert alert-success">
											Data Kelas Jabatan Gagal Dihapus!
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
													<th>Nama Jabatan</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Nama Jabatan</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
											<?php
											$data = tampiljumlah();
											$no=0;
											if($data){
											foreach($data as $val){
												$no++;
												
												
											?>	
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $val['nm_jabatan'];?></td>
													<td>
														
														<a href="" class="fa fa-trash" style="color:#730a0ac7" title="Hapus Data" data-toggle="modal" data-target="#hapus<?php echo $val['id_hitung'];?>">
														</a>
														
														<!-- Modal -->
														  <div class="modal fade" id="hapus<?php echo $val['id_hitung'];?>" role="dialog">
															<div class="modal-dialog">
															<form method="post" action="">
															  <!-- Modal content-->
															  <div class="modal-content">
																<div class="modal-header">
																  <button type="button" class="close" data-dismiss="modal">&times;</button>
																  <h4 class="modal-title">Hapus Data</h4>
																</div>
																<div class="modal-body">
																  <p>Anda Yakin Ingin Menghapus Kelas Jabatan Ini <b></b> ?</p>
																  <input type="hidden" name="id_hitung" value="<?php echo $val['id_hitung'];?>" />
																</div>
																<div class="modal-footer">
																  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																  <input type="submit" name="btnDeleteHitung" value="Hapus" class="btn btn-danger"/>
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
				</div>
			</footer>
		</div>
<?php
require_once 'html_footer.php';
?>