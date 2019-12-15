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

	<!-- Bootstrap >
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf"-->

</head>
  <body>
<!-- test repo tambahan buat liat perubahan-->
    <div class="container">
      <h1>BintangLaut.co.id</h1>
      <hr>
      <a href="<?=base_url()?>index.php/artikel/tambah" class="btn btn-success">+ Artikel</a>
    </div>

    <div class="container">
      <h2>Daftar Artikel</h2>
      <form action="<?=base_url()?>index.php/artikel/index" method="get">
        <input type="text" name="cari">
        <input type="submit" value="Cari" class="btn btn-default">
      </form>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->judul?></h3>
              <p>Artikel: <?php echo substr($data->artikel, 0 , 250) ?></p>
              <p>
                <a href="<?=base_url()?>index.php/artikel/edit/<?=$data->id?>" class="btn btn-info" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/artikel/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
