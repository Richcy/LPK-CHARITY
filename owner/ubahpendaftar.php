<h2>Ubah Pendaftar</h2>

<?php

$ambil=$koneksi->query("SELECT * FROM pendaftar WHERE id_pendaftar='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotolama=$pecah['bukti_transfer'];

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>

<form method = "post" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" class="form-control"value ="<?php echo $pecah['username_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Nomor Induk KTP</label>
		<input type="text" name="nik" class="form-control" value = "<?php echo $pecah['nik_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Tanggal Booking</label>
		<input type="date" name="tanggal_booking" class="form-control" value = "<?php echo $pecah['tanggal_booking'];?>">
	</div>
	<div class = "form-group">
		<label>Jenis Kursus</label>
		<input type="text" name="jenis_kursus" class="form-control" value = "<?php echo $pecah['jenis_kursus'];?>">
	</div>
	<div class = "form-group">
		<label>Tempat Lahir</label>
		<input type="text" name="tempat_lahir" class="form-control" value = "<?php echo $pecah['tempat_lahir_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" class="form-control" value = "<?php echo $pecah['tanggal_lahir_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Jenis Kelamin</label>
		<input type="text" name="jenis_kelamin" class="form-control" value = "<?php echo $pecah['jenis_kelamin_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Alamat KTP</label>
		<input type="text" name="alamat_ktp_pendaftar" class="form-control" value = "<?php echo $pecah['alamat_ktp_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Alamat Domisili</label>
		<input type="text" name="alamat_domisili_pendaftar" class="form-control" value = "<?php echo $pecah['alamat_domisili_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Pendidikan Akhir</label>
		<input type="text" name="pendidikan_akhir_pendaftar" class="form-control" value = "<?php echo $pecah['pendidikan_akhir_pendaftar'];?>">
	</div>
	<div class = "form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control"value = "<?php echo $pecah['email_pendaftar']; ?>">
	</div>
	<div class = "form-group">
		<label>Bukti Transfer</label>
		<input type="text" name="bukti_transfer" class="form-control" value = "<?php echo $pecah['bukti_transfer'];?>">
	</div>
	<div class = "form-group">
		<label>No HP</label>
		<input type="text" name="hp_pendaftar" class="form-control" value = "<?php echo $pecah['hp_pendaftar'];?>">
	</div>
	
	<button class = "btn btn-danger" name="kembali">Kembali</button>
	<button class = "btn btn-primary" name="ubah">Ubah</button>
	

</form>

<?php

if(isset($_POST['ubah']))
{
	$namafoto=$_FILES['bukti_transfer']['name'];
	$lokasifoto =$_FILES['bukti_transfer']['tmp_name'];
	//jika foto dirubah
	if(!empty($lokasifoto))
	{
		unlink("../pendaftar/assets/$fotolama");

		move_uploaded_file($lokasifoto, "../pendaftar/assets/$namafoto");

		$koneksi->query("UPDATE pendaftar SET username_pendaftar='$_POST[nama]',
			nik_pendaftar='$_POST[nik]',email_pendaftar='$_POST[email]'
			WHERE id_produk='$_GET[id]'");
	}
	//else
	{
		$koneksi->query("UPDATE pendaftar SET username_pendaftar='$_POST[nama]',
			nik_pendaftar='$_POST[nik]',email_pendaftar='$_POST[email]'
			WHERE id_pendaftar='$_GET[id]'");
	}
	echo "<script>alert('data pendaftar telah diubah');</script>";
	echo "<script>location='index.php?halaman=pendaftar';</script>";

}
elseif(isset($_POST['kembali']))
{
	echo "<script>location='index.php?halaman=pendaftar';</script>";
}

  ?>