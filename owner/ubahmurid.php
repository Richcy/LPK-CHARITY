<h2>Ubah Murid</h2>

<?php

$ambil=$koneksi->query("SELECT * FROM murid WHERE id_murid='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
//$fotolama=$pecah['foto_produk'];

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>

<form method = "post" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" class="form-control"value ="<?php echo $pecah['username_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Nomor Induk KTP</label>
		<input type="text" name="nik" class="form-control" value = "<?php echo $pecah['nik_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Jadwal Murid</label>
		<input type="text" name="jadwal_murid" class="form-control" value = "<?php echo $pecah['jadwal_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Jenis Kursus</label>
		<input type="text" name="jenis_kursus" class="form-control" value = "<?php echo $pecah['jenis_kursus'];?>">
	</div>
	<div class = "form-group">
		<label>Tempat Lahir</label>
		<input type="text" name="tempat_lahir_murid" class="form-control" value = "<?php echo $pecah['tempat_lahir_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Tanggal Lahir</label>
		<input type="text" name="tanggal_lahir_murid" class="form-control" value = "<?php echo $pecah['tanggal_lahir_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Jenis Kelamin</label>
		<input type="text" name="jenis_kelamin_murid" class="form-control" value = "<?php echo $pecah['jenis_kelamin_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Alamat Domisili</label>
		<input type="text" name="alamat_murid" class="form-control" value = "<?php echo $pecah['alamat_murid'];?>">
	</div>
	<div class = "form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control"value = "<?php echo $pecah['email_murid']; ?>">
	</div>
	<div class = "form-group">
		<label>No HP</label>
		<input type="text" name="no_hp_murid" class="form-control" value = "<?php echo $pecah['no_hp_murid'];?>">
	</div>
		<div class = "form-group">
		<label>Status</label>
		<input type="text" name="status_murid" class="form-control" value = "<?php echo $pecah['status_murid'];?>">
	</div>
	
	<button class = "btn btn-danger" name="kembali">Kembali</button>
	<button class = "btn btn-primary" name="ubah">Ubah</button>
	

</form>

<?php

if(isset($_POST['ubah']))
{
	/*$namafoto=$_FILES['foto']['name'];
	$lokasifoto =$_FILES['foto']['tmp_name'];
	//jika foto dirubah
	if(!empty($lokasifoto))
	{
		unlink("../foto_produk/$fotolama");

		move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
			harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',
			foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]'
			WHERE id_produk='$_GET[id]'");
	}*/
	//else
	{
		$koneksi->query("UPDATE murid SET username_murid='$_POST[nama]',
			nik_murid='$_POST[nik]',email_murid='$_POST[email]'
			WHERE id_murid='$_GET[id]'");
	}
	echo "<script>alert('data murid telah diubah');</script>";
	echo "<script>location='index.php?halaman=murid';</script>";

}
elseif(isset($_POST['kembali']))
{
	echo "<script>location='index.php?halaman=murid';</script>";
}

  ?>