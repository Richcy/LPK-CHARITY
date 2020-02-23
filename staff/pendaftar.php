<h2>Data Pendaftar</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>NIK</th>
			<!--
			<th>Tanggal Booking</th>
			-->
			<th>Tanggal Daftar</th>
			<th>Jenis Kelamin</th>
			<th>Email</th>
			<th>No HP</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php  $ambil = $koneksi->query("SELECT * FROM pendaftar")?>
		<?php while($pecah = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['username_pendaftar']; ?></td>
			<td><?php echo $pecah['nik_pendaftar']; ?></td>
			<!--
			<td>
				<?php /*$pecah['tanggal_booking'];
					$timestamp = strtotime($pecah['tanggal_booking']);
					$tanggal = date("d-m-Y",$timestamp);
					echo $tanggal;*/
				?>
			</td>
			-->

			<td><?php echo $pecah['tanggal_daftar'];?></td>
			<td><?php echo $pecah['jenis_kelamin_pendaftar'];?></td>
			<td><?php echo $pecah['email_pendaftar'];?></td>
			<td><?php echo $pecah['hp_pendaftar'];?></td>
			<td>
				<a href = "index.php?halaman=hapuspendaftar&id=<?php echo $pecah["id_pendaftar"];?>" class="btn-danger btn">Hapus</a>
				<a href = "index.php?halaman=ubahpendaftar&id=<?php echo $pecah['id_pendaftar'];?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>