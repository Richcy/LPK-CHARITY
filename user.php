<h2>Data User</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level User</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM user" ); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['username'];?></td>
			<td><?php echo $pecah['password'];?></td>
			<td><?php echo $pecah['level_user'];?></td>
			<td>
				<a href = "index.php?halaman=hapususer&id=<?php echo $pecah["id_user"];?>" class="btn-danger btn">Hapus</a>
				<a href = "index.php?halaman=ubahuser&id=<?php echo $pecah['id_user'];?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>