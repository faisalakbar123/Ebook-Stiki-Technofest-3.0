<body>
<!--Main layout-->
<main>
	<div class="container">

		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

			<!-- Navbar brand -->
			<span class="navbar-brand">Categories:</span>

			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
					aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="basicExampleNav">

				<!-- Links -->
				<div class="collapse navbar-collapse" id="basicExampleNav">

					<!-- Links -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>">All
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('Kategori/Agama') ?>"> Agama</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('Kategori/Perikanan') ?>">Perikanan dan
								Kelautan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('Kategori/Piskologi') ?>">Psikologi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('Kategori/Sosial') ?>">Sosial, Politik & Hukum</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('Kategori/Umum') ?>">Umum</a>
						</li>
					</ul>
				</div>
				<!-- Links -->

				<form class="form-inline" action="<?php echo base_url("Dashboard/search")?>" method="post">
					<div class="md-form my-0">
						<input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
						<input class="btn btn-outline-white" type="submit" name="submit" value="Search">
					</div>

				</form>
			</div>
			<!-- Collapsible content -->

		</nav>
		<!--/.Navbar-->

		<!--Section: Products v.3-->
		<section class="text-center mb-4">

			<!--Grid row-->
			<div class="row wow fadeIn">
				<?php foreach ($barang as $brg) : ?>
					<!--Grid column-->
					<div class="col-lg-3 col-md-6 mb-4">

						<!--Card-->
						<div class="card">


							<!--Card image-->
							<div class="view overlay">
								<img src="<?php echo base_url().'uploads/'.$brg->gambar_brg?>" class="card-img-top"
									 alt="">
								<a href="<?php echo base_url().'dashboard/detail/'.$brg->id_brg ?>">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
							<!--Card image-->

							<!--Card content-->
							<div class="card-body text-center">
								<!--Category & Title-->
								<a href="" class="grey-text">
									<h5><?php echo $brg->kategori?></h5>
								</a>
								<h5>
									<strong>
										<a href="" class="dark-grey-text"><?php echo $brg->nama_brg ?>
										</a>
									</strong>
								</h5>

								<h4 class="font-weight-bold blue-text">
									<strong>Rp.<?php echo number_format($brg->harga,0,',','.') ?></strong>
								</h4>

							</div>
							<!--Card content-->

						</div>
						<!--Card-->

					</div>
					<!--Grid column-->
				<?php endforeach ; ?>

			</div>
			<!--Grid row-->
		</section>
		<!--Section: Products v.3-->

		<!--Pagination-->
		<nav class="d-flex justify-content-center wow fadeIn">
			<ul class="pagination pg-blue">

				<!--Arrow left-->
				<li class="page-item disabled">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>

				<li class="page-item active">
					<a class="page-link" href="#">1
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>

				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</nav>
		<!--Pagination-->

	</div>
</main>
<!--Main layout-->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
	// Animations initialization
	new WOW().init();

</script>
<!--/.Carousel Wrapper-->
</body>
