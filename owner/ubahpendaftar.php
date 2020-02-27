<h2>Ubah Pendaftar</h2>

<?php

$ambil=$koneksi->query("SELECT * FROM pendaftar WHERE id_pendaftar='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
//$fotolama=$pecah['foto_produk'];

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
		<label>Email</label>
		<input type="email" name="email" class="form-control"value = "<?php echo $pecah['email_pendaftar']; ?>">
	</div>
	
	<button class = "btn btn-primary" name="ubah">Ubah</button>
	<button class = "btn btn-danger" name="kembali">Kembali</button>

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