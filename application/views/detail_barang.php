<!--Main layout-->
<main class="mt-5 pt-4">

	<?php foreach ($barang as $brg ) : ?>
	<div class="container dark-grey-text mt-5">
		<!--Grid row-->
		<div class="row wow fadeIn">
			<!--Grid column-->
			<div class="col-md-6 mb-4">
				<img src="<?php echo base_url().'uploads/'.$brg->gambar_brg ?>" class="img-fluid"
					 alt="">
			</div>
			<!--Grid column-->
			<!--Grid column-->
			<div class="col-md-6 mb-4">
				<!--Content-->
				<div class="p-4">
					<div class="mb-3">
						<a href="">
							<span class="badge purple mr-1"><?php echo $brg->kategori?></span>
						</a>
					</div>
				
					<p class="lead font-weight-bold">Sinopsis</p>
					<p><?php echo $brg->keterangan?></p>
					<p> Stock Barang : <?php echo $brg->stok?></p>
					<a href="<?php echo base_url("dashboard/tambah_ke_keranjang/".$brg->id_brg) ?>" class="btn btn-primary btn-md my-0 p">Add to cart
						<i class="fas fa-shopping-cart ml-1"></i>
					</a>
				</div>
				<!--Content-->
			</div>
			<!--Grid column-->
		</div>
		<?php endforeach ; ?>
		<!--Grid row-->
	</div>

