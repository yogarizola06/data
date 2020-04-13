<?php
require_once 'html_header.php';
if(isset($_POST['btnDeleteProdi'])){
	$hps = prodi_delete();
}
?>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Kelas Prodi</h2>
								<h5 class="text-white op-7 mb-2">Semua Data Kelas Prodi</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">	
								<a href="<?php echo URL;?>/index.php/univrab/tambah_prodi" class="btn btn-success">Tambah Prodi </a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Kelas Prodi</h4>
								</div>
								<div class="card-body">
								<?php
									if(isset($hps)){
										if($hps){
										?>
										<div class="alert alert-success">
											Data Kelas Prodi Berhasil Dihapus!
										</div>
										<?php
										}else{
										?>
										<div class="alert alert-success">
											Data Kelas Prodi Gagal Dihapus!
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
													<th>Nama Prodi</th>
													<th>Fakultas</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Nama Prodi</th>
													<th>Fakultas</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
											<tbody>
											<?php
											$data = prodi_view();
											$no=0;
											if($data){
											foreach($data as $val){
												$no++;
												
												
											?>	
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $val['nm_prodi'];?></td>
													<td>
														
													<?php $data1 = fakultas_view("id_fakultas='".$val['id_fakultas']."'"); ?>
														<?php
													echo $data1[0]['nm_fakultas'];

														 ?>
													</td>
													<td>
														
														<a href="" class="fa fa-trash" style="color:#730a0ac7" title="Hapus Data" data-toggle="modal" data-target="#hapus<?php echo $val['id_prodi'];?>">
														</a>
														<a href="<?php echo URL;?>/index.php/univrab/edit_prodi/<?php echo $val['id_prodi'];?>" class="fa fa-edit" style="color:#730a0ac7" title="Edit Data">
														</a>
														<!-- Modal -->
														  <div class="modal fade" id="hapus<?php echo $val['id_prodi'];?>" role="dialog">
															<div class="modal-dialog">
															<form method="post" action="">
															  <!-- Modal content-->
															  <div class="modal-content">
																<div class="modal-header">
																  <button type="button" class="close" data-dismiss="modal">&times;</button>
																  <h4 class="modal-title">Hapus Data</h4>
																</div>
																<div class="modal-body">
																  <p>Anda Yakin Ingin Menghapus Kelas Prodi Ini <b></b> ?</p>
																  <input type="hidden" name="id_prodi" value="<?php echo $val['id_prodi'];?>" />
																</div>
																<div class="modal-footer">
																  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																  <input type="submit" name="btnDeleteProdi" value="Hapus" class="btn btn-danger"/>
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