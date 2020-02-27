<h2>Data Murid</h2>
<div class="table-responsive">
<table class = "table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>NIK</th>
			<th>Jadwal</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No HP</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php  $ambil = $koneksi->query("SELECT * FROM murid")?>
		<?php while($pecah = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['username_murid']; ?></td>
			<td><?php echo $pecah['nik_murid']; ?></td>
			<td><?php echo $pecah['jadwal_murid'];?></td>
			<td><?php echo $pecah['tempat_lahir_murid'];?></td>
			<td><?php echo $pecah['tanggal_lahir_murid'];?></td>
			<td><?php echo $pecah['jenis_kelamin_murid'];?></td>
			<td><?php echo $pecah['alamat_murid'];?></td>
			<td><?php echo $pecah['email_murid'];?></td>
			<td><?php echo $pecah['no_hp_murid'];?></td>
			<td><?php echo $pecah['status_murid'];?></td>


		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
</div>