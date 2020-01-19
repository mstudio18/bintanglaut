<html lang="en">

<head>
<<<<<<< HEAD
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
	<!-- DataTables -->
	<link rel="stylesheet" href="<?=base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- toastr -->
	<link rel="stylesheet" href="<?=base_url()?>plugins/toastr/toastr.min.css">
	<!-- Bootstrap >
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf"-->
=======
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General UI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }
>>>>>>> 81679bc9620f30dbdb4f8af8a0804f91829c1382

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }

  </style>
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
<<<<<<< HEAD
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="Treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
=======
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
>>>>>>> 21606ccf403a32c9ba8029bde585b3989f35aac5

						<li class="nav-item">
							<a href="<?= base_url()?>index.php/artikel/index/" class="nav-link active">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Artikel
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url()?>index.php/banner/index/" class="nav-link">
								<i class="nav-icon fas fa-eye"></i>
								<p>
									Banner
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
						<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-book"></i>
							<p>
								Baner
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-book"></i>
							<p>
								Galeri
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
					</li>

					<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-book"></i>
						<p>
							Visi & Misi
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
				</li>
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
							<h1>Daftar Artikel</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Project List</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
				<div class="card card-primary card-outline">
					<!-- /.card-header -->
					<div class="card-body">
						<a class="btn btn-primary" href="<?=base_url()?>index.php/artikel/tambah">Tambah Data</a>
						<form action="<?=base_url()?>index.php/artikel/index" method="get">
							<table id="data_artikel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Judul</th>
										<th>isi artikel</th>
										<th>gambar</th>
										<th>status</th>
										<th>aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $data): ?>
									<tr>
										<td>
											<?php echo $data->judul?>
										</td>
										<td>
											<?php echo substr($data->artikel, 0 , 250) ?>
										</td>
										<td>
											<img src="<?=base_url()?>assets/picture/<?=$data->foto?>" alt="foto"
												style="max-width:150px">
										</td>
										<td>Terposting</td>
										<td class="btn-group-vertical">
											<a href="<?=base_url()?>index.php/artikel/edit/<?=$data->id?>"
												class="btn btn-default fas fa-edit" role="button"></a>
											<a href="<?=base_url()?>index.php/artikel/deletedata/<?=$data->id?>/<?=$data->foto?>"
												class="btn btn-default fas fa-trash-alt" role="button"></a>
										</td>
									</tr>
									<?php endforeach; ?>
							</table>
						</form>
					</div>

					<div class="container">
						<?php echo $pagination ?>
					</div>
				</div>
			</section>
			<!-- /.card-body -->
		</div>

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.0.2-pre
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
			reserved.
		</footer>

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
	<!-- DataTables -->
	<script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.js"></script>
	<script src="<?= base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- Toastr -->
	<script src="<?= base_url() ?>plugins/toastr/toastr.min.js"></script>
	<!-- page script -->
	<script>
		$(function () {
			$('#example1').DataTable();
			$('#data_artikel').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});

	</script>
	<script type="text/javascript">
		$(function () {
			$('.toastrDefaultError').click(function () {
			toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
			});
		});
	</script>
	<!-- END KONTEN UTAMA >
		<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script-->
	</div>
</body>

</html>
