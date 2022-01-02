<div class="container-fluid">
	<h4>Invoice pemesanan produk</h4>

	<table class="table table-bordered table-hoves table-striped">

		<tr>
			<th>Id invoice</th>
			<th>Nama pemesan</th>
			<th>Alamat pengiriman</th>
			<th>Tanggal pemesanan</th>
			<th>Batas Pemesanan</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv) : ?>

			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar?></td>
				<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
			</tr>

	<?php endforeach ; ?>
		
	</table>
</div>