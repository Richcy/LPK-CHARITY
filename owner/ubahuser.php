<h2>Ubah User</h2>

<?php

$ambil=$koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
//$fotolama=$pecah['foto_produk'];

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>

<form method = "post" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control"value ="<?php echo $pecah['username'];?>">
	</div>
	<div class = "form-group">
		<label>Password</label>
		<input type="text" name="password" class="form-control" value = "<?php echo $pecah['password'];?>">
	</div>
	<div class = "form-group">
		<label>level user</label><br>
		  <select name="level">
          <option disabled="disabled" selected="selected">Level User</option>
          <option value="admin">Admin</option>
		  <option value="staff">Staff</option>
          </select>
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
		$koneksi->query("UPDATE user SET username='$_POST[username]',
			password='$_POST[password]',level_user='$_POST[level]'
			WHERE id_user='$_GET[id]'");
	}
	echo "<script>alert('data user telah diubah');</script>";
	echo "<script>location='index.php?halaman=user';</script>";

}
elseif(isset($_POST['kembali']))
{
	echo "<script>location='index.php?halaman=user';</script>";
}

  ?>