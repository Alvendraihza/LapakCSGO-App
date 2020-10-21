<h5>Tampil Pembeli</h5>

<table class="table table-bordered table-striped" id="tabelku">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Beli</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal Pembelian</th>
			<th>Waktu</th>
			<th>Total</th>
			<th>Aksi</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			include "koneksi.php";

			$sql = "SELECT * FROM tbl_pembelian_produk
				JOIN tbl_pelanggan
				ON tbl_pembelian_produk.id_pelanggan = tbl_pelanggan.id_pelanggan
				JOIN tbl_pembelian
				ON tbl_pembelian_produk.id_pembelian = tbl_pembelian.id_pembelian
				ORDER BY id_pembelian_produk DESC";
			$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

			$no = 1; //nomor urut

			while($data = mysqli_fetch_array($query)){

				$kdb = $data["rkode"];
				$nmp = $data["nama_pelanggan"];
				$tgb = $data["tanggal_pembelian"];
				$ttb = $data["total_pembelian"];
				$sts = $data["status_pembayaran"];
				$idp = $data["id_pembelian_produk"];
				$idb = $data["id_pembelian"];
				$wkt = $data["waktu"];
				$wkt2 = date("H:i:s", strtotime($wkt));


				echo "<tr>
						<td>$no</td>
						<td>$kdb</td>
						<td>$nmp</td>
						<td>$tgb</td>
						<td>$wkt2</td>
						<td>$ttb</td>
						<td><a href='index.php?detail_id=$idp'>Detail</a></td>
						<td>$sts <a href='index.php?id_status=$idb'><i class='fas fa-edit'></i></a></td>
					</tr>";

					$no++;

				}
			?>
		
	</tbody>
</table>