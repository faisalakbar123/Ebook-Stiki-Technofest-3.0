<div class="content-wrapper">
	<section class="contant">
		
		<?php foreach ($barang as $brg) {?>

			<form action="<?php echo base_url().'admin/data_barang/update'; ?>" method = "post">

				<div class="form-group ">
				<label>Nama barang</label>
				<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
				</div>

				<div class="form-group">
				<label>katerangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?>">
				</div>

				<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
				</div>

			

				<div class="form-group">
				<label>stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?>">
				</div>

								

				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
				

			</form>
		<?php } ?>



	</section>
</div>