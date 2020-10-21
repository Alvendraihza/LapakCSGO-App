<h5>Tampil Produk</h5>

<table class="table table-bordered table-striped" id="tabelku">
	<thead>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama Produk</th>
			<th>Harga Produk</th>
			<th>Deskripsi Produk</th>
			<th>Kategori Produk</th>
			<th>Foto</th>
			<th>Aksi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			include "koneksi.php";

			$sql = "SELECT * FROM tbl_produk
				JOIN tbl_kategori
				ON tbl_produk.kategori_produk = tbl_kategori.id_kat
				ORDER BY id_produk DESC";
			$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

			$no = 1; //nomor urut

			while($data = mysqli_fetch_array($query)){

				$idp = $data["id_produk"];
				$nmp = $data["nama_produk"];
				$hgp = $data["harga_produk"];
				$dkp = $data["deskripsi_produk"];
				$kat = $data["keterangan"];
				$fto = $data["foto"];

				echo "<tr>
						<td>$no</td>
						<td>$idp</td>
						<td>$nmp</td>
						<td>$hgp</td>
						<td>$dkp</td>
						<td>$kat</td>
						<td><img src='hasil-upload/$fto' height='100' width='100'></td>
						<td><a href='index.php?edit_id=$idp'>Edit</a></td>
						<td><a href='hapus-produk.php?hapus_id=$idp'>Hapus</a></td>
					</tr>";

					$no++;

				}
			?>
		
	</tbody>
</table>