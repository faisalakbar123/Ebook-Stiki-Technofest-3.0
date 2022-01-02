<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-2"></div>	
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php $grand_total = 0; 

				if($keranjang = $this->cart->contents())
				{
					foreach($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "Total Belanja Anda : Rp.".number_format($grand_total,0,',','.');
				

					?>
			</div><br><br>
				<h3>Input alamat pengiriman dan pembayaran</h3>

				<form method="post" action="<?php echo base_url().'dashboard/proses_pesanan' ?> ">
					
					<div class="form-group">
						<label>Nama lengkap</label>
						<input type="text" name="nama" placeholder="Nama lengkap anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Alamat lengkap</label>
						<input type="text" name="alamat" placeholder="alamat lengkap anda" class="form-control">
					</div>	

					<div class="form-group">
						<label>No telepon</label>
						<input type="text" name="no_telepon" placeholder="no telepon anda" class="form-control">
					</div>	

					<div class="form-group">
						<label>Jasa pengiriman</label>
						<select class="form-control">
							<option>JNE</option>
							<option>TIKI</option>
							<option>POS indonesia</option>
							<option>Go Jek</option>
						</select>
					</div>

					<div class="form-group">
						<label>Pilih bank</label>
						<select class="form-control">
							<option>BCA - xxxxxxxxxx</option>
							<option>BNI - xxxxxxxxxx</option>
							<option>mandiri - xxxxxxxxxx</option>
							<option>BRI - xxxxxxxxxx</option>
						</select>
					</div>	

					<button type="submit" class="btn btn-sm btn-primary">Pesan</button>	

				</form>

				<?php 
				} else {
					echo "keranjang Belanja Anda Masih Kosong";
				}
				?>
		</div>


		<div class="col-md-2"></div>	
	
	</div>
</div>	