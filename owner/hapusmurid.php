<?php 

$ambil = $koneksi->query("SELECT * FROM murid WHERE id_murid = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM murid WHERE id_murid = '$_GET[id]'");

echo "<script>alert('murid terhapus');</script>";
echo "<script>location='index.php?halaman=murid';</script>"

 ?>