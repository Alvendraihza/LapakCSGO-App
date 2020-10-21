<h5>Konfirmasi Status Pembayaran</h5>

<?php
	include "koneksi.php";
	$ids = $_GET["id_status"];
	$sql = "SELECT * FROM tbl_pembelian WHERE id_pembelian='$ids'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
	$data = mysqli_fetch_array($query);


?>

<form action="update-bayar.php" method="post">
	<input type="hidden" name="idb" value="<?php echo $data["id_pembelian"];?>">
	<div class="form-group">
		<label>Status Pembayaran</label>
		<div class="radio">
			<label>
				<input type="radio" name="byr" value="Menunggu"<?php if ($data["status_pembayaran"] == "Menunggu") echo "checked";?>> Menunggu
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="byr" value="Dibayar"<?php if ($data["status_pembayaran"] == "Dibayar") echo "checked";?>> Di Bayar
			</label>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary">Rubah</button>
	</div>

</form>