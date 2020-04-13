<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Halaman Data Center Universitas Abdurrab</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo URL;?>/assets/admin/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?php echo URL;?>/assets/admin/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo URL;?>/assets/admin/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo URL;?>/assets/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>/assets/admin/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo URL;?>/assets/admin/css/demo.css">
	<link href="<?php echo URL;?>/assets/plugins/datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
<div class="class-url" style="display: none;"><?php echo URL;?></div>
<div class="wrapper">
	<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="<?php echo URL;?>" class="logo">
					<img src="<?php echo URL;?>/assets/admin/img/univrab.png" alt="navbar brand" width="50px;" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
	
	
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?php echo URL;?>/assets/admin/img/profile.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?php echo URL;?>/assets/admin/img/profile.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $_SESSION['nama'];?></h4>
												<p class="text-muted"><?php echo $_SESSION['username'];?></p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Profile</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?php echo URL;?>/index.php/univrab/keluar">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo URL;?>/assets/admin/img/profile.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $_SESSION['username'];?>
									<span class="user-level">Admin</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">Profile</span>
										</a>
									</li>
									
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/keluar">
											<span class="link-collapse">Keluar</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?php echo URL;?>/index.php/univrab/index" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#master">
								<i class="fas fa-layer-group"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="master">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/fakultas">
											<span class="sub-item">Fakultas</span>
										</a>
									</li>
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/prodi">
											<span class="sub-item">Program Studi</span>
										</a>
									</li>
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/jabfung">
											<span class="sub-item">Jabatan Fungsional</span>
										</a>
									</li>
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/jenisjabatan">
											<span class="sub-item">Jenis Jabatan</span>
										</a>
									</li>
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/instansi">
											<span class="sub-item">Instansi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="<?php echo URL;?>/index.php/univrab/staff">
								<i class="fas fa-th-list"></i>
								<p>Staff</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#jabatan">
								<i class="fas fa-layer-group"></i>
								<p>Data Jabatan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="jabatan">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/cetak">
											<span class="sub-item">Cetak Jabatan</span>
										</a>
									</li>
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/excel_jabatan">
											<span class="sub-item">Export Excel Jabatan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#Instansi">
								<i class="fas fa-layer-group"></i>
								<p>Data Instansi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="Instansi">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/cetakinstansi">
											<span class="sub-item">Cetak Instansi</span>
										</a>
									</li>
									<li>
										<a href="<?php echo URL;?>/index.php/univrab/excel_instansi">
											<span class="sub-item">Export Excel Instansi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a href="<?php echo URL;?>/index.php/univrab/hitung">
								<i class="fas fa-th-list"></i>
								<p>Chart Hitung Jabatan</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo URL;?>/index.php/univrab/hitunginstansi">
								<i class="fas fa-th-list"></i>
								<p>Chart Hitung Instansi</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		