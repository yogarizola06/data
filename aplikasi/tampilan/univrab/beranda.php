<?php
require_once 'html_header.php';
$smt_aktif = "";
$thnajaran = "";

$jmlstaff = staff_view();
$jumlahstaff = count($jmlstaff);

$grafik = dashboard();
$grafik1 = instansi_dash();

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
									<div class="card-title">Jumlah Staff Universitas Abdurrab</div>
									<div class="card-category"></div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<?php
										foreach ($grafik as $value) {
										?>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-<?php echo $value['id_jj'];?>"></div>
											<h6 class="fw-bold mt-3 mb-0"><?php echo $value['nm_jabatan'];?></h6>
										</div>
										<?php
										}
										?>
										
									</div><br>
									

									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<?php
										foreach ($grafik1 as $value) {
										?>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-<?php echo $value['id_instansi'];?>"></div>
											<h6 class="fw-bold mt-3 mb-0"><?php echo $value['nm_instansi'];?></h6>
										</div>
										<?php
										}
										?>
										
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
			<?php
			foreach ($grafik as $value) {
			?>
			Circles.create({
			id:'circles-<?php echo $value['id_jj']; ?>',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: <?php echo $value['cn'] ?>,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
			})
			<?php
			}
			?>


			<?php
			foreach ($grafik1 as $value) {
			?>
			Circles.create({
			id:'circles-<?php echo $value['id_instansi']; ?>',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: <?php echo $value['cnins'] ?>,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
			})
			<?php
			}
			?>
			

		
		};
		</script>
<?php
require_once 'html_footer.php';
?>