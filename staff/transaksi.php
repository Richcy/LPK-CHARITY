<h2>Data Transaksi</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pendaftar</th>
			<th>Tanggal Booking</th>
			<th>Foto Bukti Transfer</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM pendaftar" ); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['username_pendaftar'];?></td>
			<td>
				<?php $pecah['tanggal_booking'];
					$timestamp = strtotime($pecah['tanggal_booking']);
					$tanggal = date("d-m-Y",$timestamp);
					echo $tanggal;
				?>
			</td>

			<td><img src="../pendaftar/assets/img/<?php echo $pecah['bukti_transfer'] ?>" width = "500"></td>
		
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>