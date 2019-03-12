<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
<table class="table">
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Qty</th>
		<th>Image</th>
		<th>Deskripsi</th>
		<th>Action</th>
	</tr>
<?php
$no=1;
foreach ($produk as $value) {
	
?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $value->nmProduk;?></td>
		<td><?php echo $value->harga;?></td>
		<td><?php echo $value->satuan;?></td>
		<td><?php echo $value->qty;?></td>
		<td><?php echo $value->image;?></td>
		<td><?php echo $value->deskripsi;?></td>
		<td>
			<a class="btn btn-warning btn-link" href="<?php echo site_url('Produk/hapus_produk/').$value->produkId;?>" onclick="return confirm('Are you sure?')">Hapus</a>
			<a class="btn btn-info btn-link" href="<?php echo site_url('Produk/edit_produk/').$value->produkId;?>">Edit</a>
		</td>
	</tr>
<?php } ?>

</table>
</body>
</html>