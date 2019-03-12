<form action="<?php echo site_url("produk/submit"); ?>" method="POST">
  <div class="form-group">
    <label>Nama Produk</label>
    <input type="text" name="nmProduk" class="form-control" value="<?php echo(isset($data_produk[0]->nmProduk)? $data_produk[0]->nmProduk:''); ?>" placeholder="Nama Produk">
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" value="<?php echo(isset($data_produk[0]->harga)? $data_produk[0]->harga:''); ?>" placeholder="Harga">
  </div>
  <div class="form-group">
    <label>Satuan</label>
    <input type="text" name="satuan" class="form-control" value="<?php echo(isset($data_produk[0]->satuan)? $data_produk[0]->satuan:''); ?>" placeholder="Satuan">
  </div>
  <div class="form-group">
    <label>Qty</label>
    <input type="number" name="qty" class="form-control" value="<?php echo(isset($data_produk[0]->qty)? $data_produk[0]->qty:''); ?>" placeholder="Qty">
  </div>
  <div class="form-group">
    <label>Image</label><br>
    <input type="file" name="image" value="<?php echo(isset($data_produk[0]->image)? $data_produk[0]->image:''); ?>">
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"><?php echo(isset($data_produk[0]->deskripsi)? $data_produk[0]->deskripsi:''); ?></textarea>
  </div>
  <input type="hidden" name="idProduk" value="<?php echo(isset($data_produk[0]->produkId)? $data_produk[0]->produkId:''); ?>"><button type="submit" class="btn btn-primary">Proses Data</button>
</form>