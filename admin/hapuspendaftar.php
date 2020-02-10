<?php 

$ambil = $koneksi->query("SELECT * FROM pendaftar WHERE id_pendaftar = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pendaftar WHERE id_pendaftar = '$_GET[id]'");

echo "<script>alert('pendaftar terhapus');</script>";
echo "<script>location='index.php?halaman=pendaftar';</script>"

 ?>