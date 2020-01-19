	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 3 | Project Edit</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<!-- Toastr -->
		<link rel="stylesheet" href="<?=base_url()?>plugins/toastr/toastr.min.css">

		<!-- Bootstrap >
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf"-->

	</head>

	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Welcome to Administrator</a>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="<?= base_url()?>index.php" class="brand-link">
					<img src="<?= base_url()?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
						class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">Administrator</span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
							data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

							<li class="nav-item">
								<a href="<?= base_url()?>index.php/artikel/index/" class="nav-link active">
									<i class="nav-icon fas fa-book"></i>
									<p>
										Artikel
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="pages/widgets.html" class="nav-link">
									<i class="nav-icon fas fa-eye"></i>
									<p>
										Visi & Misi
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="pages/widgets.html" class="nav-link">
									<i class="nav-icon fas fa-users"></i>
									<p>
										Tentang Kami
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="pages/widgets.html" class="nav-link">
									<i class="nav-icon fas fa-photo-video"></i>
									<p>
										Galeri
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="pages/widgets.html" class="nav-link">
									<i class="nav-icon fas fa-address-book"></i>
									<p>
										Kontak
									</p>
								</a>
							</li>
						</ul>
						</li>
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Edit Artikel</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="<?= base_url()?>index.php/artikel/index/">Home</a>
									</li>
									<li class="breadcrumb-item active">Edit Artikel</li>
								</ol>
							</div>
						</div>
					</div><!-- /.container-fluid -->
				</section>

				<!-- KONTEN UTAMA -->

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">General</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse"
											data-toggle="tooltip" title="Collapse">
											<i class="fas fa-minus"></i></button>
									</div>
								</div>
								<div class="card-body">
									<form action="<?=base_url()?>index.php/artikel/updatedata" method="post"
										enctype="multipart/form-data" class="form-group">
										<div class="form-group">
											<label>Judul</label>
											<input class="form-control" type="text" name="name" value="<?=$data->judul?>">
											<small class="text-danger form-text"><?php form_error('name'); ?></small>
										</div>
										<div class="form-group">
											<label>Isi Artikel</label>
											<textarea class="form-control" name="alamat" rows="8"
												cols="80"><?=$data->artikel?></textarea>
										</div>
										<div class="form-group">
											<label>foto</label>
											<input class="form-control" type="file" name="fotopost">
										</div>
										<div class="form-group">
											<!-- file lama -->
											<input class="form-control" type="hidden" name="filelama"
												value="<?=$data->foto?>">
											<!-- ID -->
											<input class="form-control" type="hidden" name="id" value="<?=$data->id?>">
										</div>

										<a class="btn btn-default float-left"
											href="http://localhost/bintanglaut/index.php/artikel/index">back</a>
										<input type="submit" name="submit" value="Submit"
											class="btn btn-success float-right">
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- /.content-wrapper -->

			<footer class="main-footer">
				<div class="float-right d-none d-sm-block">
					<b>Version</b> 3.0.2-pre
				</div>
				<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
				reserved.
			</footer>
		</div>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url() ?>dist/js/demo.js"></script>
		<!-- Toastr -->
		<script src="<?= base_url() ?>plugins/toastr/toastr.min.js"></script>
		<!-- END KONTEN UTAMA >
			<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
			<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script-->
		</div>

	</body>

	</html>