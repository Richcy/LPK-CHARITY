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
		
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>