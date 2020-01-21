<h2>Data User</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Tanggal Booking</th>
			<th>Tanggal Daftar</th>
			<th>Jenis Kelamin</th>
			<th>Email</th>
			<th>No HP</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php  $ambil = $koneksi->query("SELECT * FROM user")?>
		<?php while($pecah = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['username_user']; ?></td>
			<td><?php echo $pecah['password_user']; ?></td>
			<td><?php $pecah['tanggal_booking'];
					$timestamp = strtotime($pecah['tanggal_booking']);
					$tanggal = date("d-m-Y",$timestamp);
					echo $tanggal;
			?></td>
			<td><?php echo $pecah['tanggal_daftar'];?></td>
			<td><?php echo $pecah['jenis_kelamin_user'];?></td>
			<td><?php echo $pecah['email_user'];?></td>
			<td><?php echo $pecah['hp_user'];?></td>
			<td>
				<a href="" class = "btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>