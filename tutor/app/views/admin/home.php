<?php
    if(empty($_SESSION['admin'])){
        header("Location: ".BASEURL."/home/login");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= BASEURL; ?>/vend/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= BASEURL; ?>/css/simple-sidebar.css" rel="stylesheet">
  <script type="text/javascript" src="<?= BASEURL; ?>/ckeditor/ckeditor.js"></script>

  <style>
				.dropdown-submenu {
			position: relative;
			}

			.dropdown-submenu>.dropdown-menu {
			top: 0;
			left: 100%;
			margin-top: -6px;
			margin-left: -1px;
			-webkit-border-radius: 0 6px 6px 6px;
			-moz-border-radius: 0 6px 6px;
			border-radius: 0 6px 6px 6px;
			}

			.dropdown-submenu:hover>.dropdown-menu {
			display: inline;
			margin-left: 0px;
			}

			.dropdown-submenu>a:after {
			display: block;
			/* content: " "; */
			float: right;
			width: 0;
			height: 0;
			border-color: transparent;
			border-style: solid;
			border-width: 5px 0 5px 5px;
			border-left-color: #ccc;
			margin-top: 5px;
			margin-right: -10px;
			}

			.dropdown-submenu:hover>a:after {
			border-left-color: #fff;
			}

			.dropdown-submenu.pull-left {
			float: none;
			}

			.dropdown-submenu.pull-left>.dropdown-menu {
			left: -100%;
			margin-left: 10px;
			-webkit-border-radius: 6px 0 6px 6px;
			-moz-border-radius: 6px 0 6px 6px;
			border-radius: 6px 0 6px 6px;
			}

        .disabled {
            pointer-events: none;
            cursor: default;
        }
	</style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <!-- <div class="sidebar-heading">Start Bootstrap </div> -->
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">
            <h2 class="text-center">Tutor Yukss</h2>
            <br>
            <center>
                <img class="rounded-circle" width="125" src="<?= BASEURL; ?>/user/gambaruser/<?= $_SESSION['id']; ?>" alt="">
                <br>
                <h4><?= $_SESSION['nama']; ?></h4>
                [<?= $_SESSION['role']; ?>]
            </center>

        </a>
        <a href="<?= BASEURL; ?>/admin" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?= BASEURL; ?>/admin/buatpolling" class="list-group-item list-group-item-action bg-light">Buat Polling</a>
        <a href="<?= BASEURL; ?>/admin/bukatutor" class="list-group-item list-group-item-action bg-light">Buka tutor</a>
        <a href="<?= BASEURL; ?>/pengumuman" class="list-group-item list-group-item-action bg-light">Buat Pengumuman</a>
        <a href="<?= BASEURL; ?>/admin/anggota" class="list-group-item list-group-item-action bg-light">Anggota</a>
        <a href="<?= BASEURL; ?>/admin/daftarhadir" class="list-group-item list-group-item-action bg-light">Daftar Hadir</a>
        <a href="<?= BASEURL; ?>/admin/hasilpolling" class="list-group-item list-group-item-action bg-light">Hasil Polling</a>
        <a href="<?= BASEURL; ?>/admin/penutor" class="list-group-item list-group-item-action bg-light">Penutor</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
            <span class="navbar-toggler-icon" style="background-color: white;"></span>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href=""><?= date('d-m-Y') ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/home/logout">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="ba container-fluid">



