<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Kutu Buku</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?php echo base_url("assets/css/mdb.min.css") ?>" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="<?php echo base_url("assets/css/style.min.css") ?>" rel="stylesheet">
	<!-- <style type="text/css">
		html,
		body,
		header,
		.carousel {
			height: 60vh;
		}

		@media (max-width: 740px) {

			html,
			body,
			header,
			.carousel {
				height: 100vh;
			}
		}

		@media (min-width: 800px) and (max-width: 850px) {

			html,
			body,
			header,
			.carousel {
				height: 100vh;
			}
		}

	</style> -->
</head>
<body id="page-top">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light white scrolling-navbar">
	<div class="container">

		<!-- Brand -->
		<a class="navbar-brand waves-effect" href="<?php echo base_url() ?>">
			<img src="<?php echo base_url('assets/img/logouhuy.png') ?>" alt="HTML5 icon"
				 style="width:150px; height: 150px">
		</a>

		<!-- Collapse -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

			<!-- Left -->
			<div class="dropdown show">
				<a class="btn btn-secondary dropdown-toggle" 
				href="#" role="button" id="dropdownMenuLink" 
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Kategori
				</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="<?php echo base_url('Kategori/Agama') ?>">Agama</a>
				<a class="dropdown-item" href="<?php echo base_url('Kategori/Perikanan') ?>">Perikanan</a>
				<a class="dropdown-item" href="<?php echo base_url('Kategori/Piskologi') ?>">Psikologi</a>
				<a class="dropdown-item" href="<?php echo base_url('Kategori/Sosial') ?>">Sosial</a>
				<a class="dropdown-item" href="<?php echo base_url('Kategori/Umum') ?>">Umun</a>
				</div>
			</div>

			<form class="form-inline" action="<?php echo base_url("Dashboard/search") ?>" method="post">
					<div class="md-12 my-0">
						<input class="form-control mr-sm-3" type="text" name="keyword" placeholder="Cari Judul / Penulis"
							   aria-label="Search">
					</div>
				</form>
			
			<!-- Right -->
			<ul class="navbar-nav nav-flex-icons">
				<li class="nav-item">
					<?php
					$keranjang = $this->cart->total_items();
					?>
					<a href="<?php echo base_url("Dashboard/detail_keranjang") ?>" class="nav-link waves-effect">
						<span class="badge red z-depth-1 mr-1"> <?php echo $keranjang ?> </span>
						<i class="fas fa-shopping-cart"></i>
						<span class="clearfix d-none d-sm-inline-block"> Keranjang </span>
					</a>
				
				<?php if ($this->session->userdata('name')) { ?>
					<li class="nav-item">
					<a href="<?php echo base_url("auth/logout") ?>"
					   class="nav-link border border-light rounded waves-effect">Logout
					</a>
					<li class="nav-item">
						<a class="nav-link">
							Hi, <?php echo $this->session->userdata('name') ?>
						</a>
					</li>
				<?php } else { ?>
					<a href="<?php echo base_url("auth"); ?>" class="nav-link border border-light rounded waves-effect">
						Login
					</a>
					</li>
				<?php } ?>
			</ul>

		</div>
	</div>
</nav>
</body>
