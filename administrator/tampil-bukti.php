<h5>Tampil Bukti Pembayaran</h5>

<table class="table table-bordered table-striped table-hover" id="tabelku">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Produk</th>
			<th>Tanggal Upload</th>
			<th>Waktu Upload</th>
			<th>No. Telepon</th>
			<th>Foto Bukti</th>
			<th>Lihat</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			include "koneksi.php";

			$no = 1; //nomor urut

			$sql = "SELECT * FROM tbl_bukti ORDER BY id_bukti DESC";
			$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

			while($data = mysqli_fetch_array($query)){?>

				<?php $wkt =  date("H:i:s", strtotime($data["waktu_upload"]));?>

				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data["rkode"];?></td>
					<td><?php echo $data["tanggal_upload"];?></td>
					<td><?php echo $wkt; ?></td>
					<td><?php echo $data["notlp"];?></td>
					<td><img src="upload-bukti/<?php echo $data["foto_bukti"];?>" width="100" height="100"></td>
					<td>
						<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalku<?php echo $data["id_bukti"];?>">
							<i class="fas fa-fw fa-search-plus"></i>
							Lihat
						</button>

					</td>
				</tr>

				<!-- Modal -->
				<div class="modal fade" id="modalku<?php echo $data["id_bukti"];?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $data["id_bukti"];?>" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Struk Bukti Pembayaran</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <img class="img-fluid" src="upload-bukti/<?php echo $data["foto_bukti"];?>">
				      </div>
				    </div>
				  </div>
				</div>
			
	
				<?php $no++; ?>

				<?php }
			?>
		
	</tbody>
</table>