<?php
require_once 'html_header.php';
if(isset($_POST['btnDeleteStaff'])){
	$hps = staff_delete();
}

if(isset($_POST['masakerja'])){
	masa_kerja();
}

?>
<div class="main-panel">
	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Kelas Staff</h2>
						<h5 class="text-white op-7 mb-2">Semua Data Kelas Staff</h5>
					</div>
					<div class="ml-md-auto py-2 py-md-0">	
						<a href="<?php echo URL;?>/index.php/univrab/tambah_staff" class="btn btn-success">Tambah Staff </a>
						<a href="<?php echo URL;?>/index.php/univrab/export" class="btn btn-warning">Export Excel </a>
						<a href="<?php echo URL;?>/index.php/univrab/template" class="btn btn-info">Download Template Excel </a>
						
						<form  method="post" role="form" action="" style="float:left;padding-right: 5px;">
						<input type="submit" class="btn btn-secondary" name="masakerja" value="Refresh Masa Kerja">
						</form>
						




					</div>

				</div>
			</div>
		</div>
		<div class="page-inner mt--5">

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Data Kelas Staff</h4>
						</div>
						<div class="card-body">
							<?php
							if(isset($hps)){
								if($hps){
									?>
									<div class="alert alert-success">
										Data Kelas Staff Berhasil Dihapus!
									</div>
									<?php
								}else{
									?>
									<div class="alert alert-success">
										Data Kelas Staff Gagal Dihapus!
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
											<th>Nama Staff</th>
											<th>NIK</th>
											<th>NIDN</th>
											<th>Jabatan Fungsional</th>
											<th>Jabatan Struktural</th>
											<th>Tahun Mulai Bekerja</th>
											<th>Masa Kerja</th>
											<th>Instansi</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Nama Staff</th>
											<th>NIK</th>
											<th>NIDN</th>
											<th>Jabatan Fungsional</th>
											<th>Jabatan Struktural</th>
											<th>Tahun Mulai Bekerja</th>
											<th>Masa Kerja</th>
											<th>Instansi</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
									<tbody>
										<?php
										$data = staff_view();
										$no=0;
										if($data){
											foreach($data as $val){
												$no++;
												
												
												?>	
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $val['nm_staff'];?></td>
													<td><?php echo $val['id_staff'];?></td>
													<td><?php echo $val['nidn'];?></td>
													<td>
														
														<?php $data1 = jabfung_view("id_jabfung='".$val['id_jabfung']."'"); ?>
														<?php
														echo $data1[0]['nm_jabfung'];

														?>
													</td>
													<td>
														<?php
														if(is_array($val['jabatan'])){
															foreach ($val['jabatan'] as $value) {
																echo '- '.$value['nm_jabatan'].'<br>';
															}
														}

														?>
													</td>
													<td><?php echo $val['tmt'];?></td>
													<td><?php echo $val['masa_kerja'];?></td>
													<td>
														<?php
														if(is_array($val['instansi'])){
															foreach ($val['instansi'] as $value) {
																echo '- '.$value['nm_instansi'].'<br>';
															}
														}

														?>
													</td>
													<td><?php echo $val['status'];?></td>

													<td>
														
														<a href="" class="fa fa-trash" style="color:#730a0ac7" title="Hapus Data" data-toggle="modal" data-target="#hapus<?php echo $val['id_staff'];?>">
														</a>
														<a href="<?php echo URL;?>/index.php/univrab/edit_staff/<?php echo $val['id_staff'];?>" class="fa fa-edit" style="color:#730a0ac7" title="Edit Data">
														</a>
														<a href="<?php echo URL;?>/index.php/univrab/cetak_pdf_staff/<?php echo $val['id_staff'];?>" class="fa fa-eye" style="color:#730a0ac7" title="Detail">
														</a>
														<!-- Modal -->
														<div class="modal fade" id="hapus<?php echo $val['id_staff'];?>" role="dialog">
															<div class="modal-dialog">
																<form method="post" action="">
																	<!-- Modal content-->
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal">&times;</button>
																			<h4 class="modal-title">Hapus Data</h4>
																		</div>
																		<div class="modal-body">
																			<p>Anda Yakin Ingin Menghapus Kelas Staff Ini <b></b> ?</p>
																			<input type="hidden" name="id_staff" value="<?php echo $val['id_staff'];?>" />
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																			<input type="submit" name="btnDeleteStaff" value="Hapus" class="btn btn-danger"/>
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