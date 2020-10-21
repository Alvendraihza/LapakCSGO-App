<h5>Tambah Produk</h5>

<form action="insert-produk.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" class="form-control" name="nm">
	</div>
	<div class="form-group">
		<label>Harga Produk</label>
		<input type="number" class="form-control" name="hg">
	</div>
	<div class="form-group">
		<label>Deskripsi Produk</label>
		<textarea class="form-control" name="dk" cols="30" rows="5"></textarea>
	</div>
	<div class="form-group">
		<select name="kat" class="form-control">
			<option value="">PILIH</option>
			<option value="1">AWP</option>
			<option value="2">RIFLE</option>
			<option value="3">PISTOL</option>
			<option value="4">SMG</option>
			<option value="5">HEAVY</option>
		</select>
	</div>
	<div class="form-group">
		<label>Foto Produk</label>
		<input type="file" class="form-control-file" name="fileku">
	</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary">Tambah</button>
		<button type="reset" name="reset" class="btn btn-danger">Cancel</button>
	</div>
</form>