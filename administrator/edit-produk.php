<h5>Tambah Produk</h5>

<?php

	include "koneksi.php";

	$ide = $_GET["edit_id"];
	$sql = "SELECT * FROM tbl_produk WHERE id_produk='$ide'";
	$query = mysqli_query($konek, $sql) or die (mysqli_error($konek));
	$data = mysqli_fetch_array($query);	

?>

<form action="update-produk.php" method="post" enctype="multipart/form-data">
	<input type="text" name="idp" value="<?php echo $data["id_produk"];?>">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" class="form-control" name="nm" value="<?php echo $data["nama_produk"];?>">
	</div>
	<div class="form-group">
		<label>Harga Produk</label>
		<input type="number" class="form-control" name="hg" value="<?php echo $data["harga_produk"];?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Produk</label>
		<textarea class="form-control" name="dk" cols="30" rows="5"><?php echo $data["deskripsi_produk"];?></textarea>
	</div>
	<div class="form-group">
		<select name="kat" class="form-control">
			<option value="">PILIH</option>
			<option value="1"<?php if($data["kategori_produk"] == "1") echo "selected";?>>AWP</option>
			<option value="2"<?php if($data["kategori_produk"] == "2") echo "selected";?>>RIFLE</option>
			<option value="3"<?php if($data["kategori_produk"] == "3") echo "selected";?>>PISTOL</option>
			<option value="4"<?php if($data["kategori_produk"] == "4") echo "selected";?>>SMG</option>
			<option value="5"<?php if($data["kategori_produk"] == "5") echo "selected";?>>HEAVY</option>
		</select>
	</div>
	<div class="form-group">
		<img src="hasil-upload/<?php echo $data["foto"];?>" width="100" height="100">
	</div>
	<div class="form-group">
		<label>Foto Produk</label>
		<input type="file" class="form-control-file" name="fileku">
	</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary">Tambah</button>
	</div>
</form>