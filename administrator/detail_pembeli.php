<h5>Detail Pembelian</h5>


<?php 
	include "koneksi.php";

	$idd = $_GET["detail_id"];

	$sql = "SELECT * FROM tbl_pembelian_produk
		JOIN tbl_pelanggan
		ON tbl_pembelian_produk.id_pelanggan = tbl_pelanggan.id_pelanggan
		JOIN tbl_pembelian
		ON tbl_pembelian_produk.id_pembelian = tbl_pembelian.id_pembelian
		WHERE id_pembelian_produk='$idd'
		ORDER BY id_pembelian_produk DESC";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
	$data = mysqli_fetch_array($query);

?>

<dl>
	<dt>Nama Pelanggan:</dt>
	<dd><?php echo $data["nama_pelanggan"];?></dd>
	<dt>Tanggal Pembelian:</dt>
	<dd><?php echo $data["tanggal_pembelian"];?></dd>
</dl>

<table class="table table-bordered table-striped" id="tabelku">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Beli</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			include "koneksi.php";

			$sql = "SELECT * FROM tbl_pembelian_produk
				JOIN tbl_pembelian
				ON tbl_pembelian_produk.id_pembelian = tbl_pembelian.id_pembelian
				JOIN tbl_produk
				ON tbl_pembelian_produk.id_produk = tbl_produk.id_produk
				WHERE id_pembelian_produk='$idd'
				ORDER BY id_pembelian_produk DESC";
			$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

			$no = 1; //nomor urut

			while($data = mysqli_fetch_array($query)){

				$kdb = $data["rkode"];
				$ttb = $data["total_pembelian"];
				$sts = $data["status_pembayaran"];
				$idp = $data["id_pembelian"];
				$nmd = $data["nama_produk"];
				$hgp = $data["harga_produk"];
				$jml = $data["jumlah"];

				echo "<tr>
						<td>$no</td>
						<td>$kdb</td>
						<td>$nmd</td>
						<td>$hgp</td>
						<td>$jml</td>
						<td>$ttb</td>
						<td>$sts</td>
					</tr>";

					$no++;

				}
			?>
		
	</tbody>
</table>