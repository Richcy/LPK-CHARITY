<h2>Tambah User</h2>

<form method ="post" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Username</label>
		<input type="text" class = "form-control" name="username">
	</div>
	<div class = "form-group">
		<label>Password</label>
		<input type="text" class = "form-control" name="password">
	</div>

	<div class = "form-group">
		<label>level user</label><br>
		  <select name="level">
          <option disabled="disabled" selected="selected">Level User</option>
          <option value="admin">Admin</option>
		  <option value="staff">Staff</option>
          </select>
	</div>
	<button class = "btn btn-primary" name= "save">Simpan</button>
</form>

<?php 
if(isset($_POST['save']))
{
	/*$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi,"../foto_produk/".$nama);*/
	$koneksi->query("INSERT INTO user 
		(username,password,level_user)
		VALUES('$_POST[username]','$_POST[password]','$_POST[level]')");

	echo "<div class = 'alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv = 'refresh' content='1;url=index.php?halaman=user'>";
} ?>