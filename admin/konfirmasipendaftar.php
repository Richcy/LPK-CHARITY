<?php 

$ambil = $koneksi->query("SELECT * FROM pendaftar WHERE id_pendaftar = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

//test berhasil
$username = $pecah['username_pendaftar'];
$nik = $pecah['nik_pendaftar'];
$jadwal = $pecah['tanggal_booking'];
$tempat_lahir = $pecah['tempat_lahir_pendaftar'];
$tanggal_lahir = $pecah['tanggal_lahir_pendaftar'];
$jk = $pecah['jenis_kelamin_pendaftar'];
$alamat = $pecah['alamat_domisili_pendaftar'];
$email = $pecah['email_pendaftar'];
$hp = $pecah['hp_pendaftar'];
$status = "aktif";


$koneksi->query("INSERT INTO murid(username_murid,nik_murid,jadwal_murid,tempat_lahir_murid,tanggal_lahir_murid,jenis_kelamin_murid,alamat_murid,email_murid,no_hp_murid,status_murid) VALUES('$username','$nik','$jadwal','$tempat_lahir','$tanggal_lahir','$jk','$alamat','$email','$hp','$status')");




$koneksi->query("DELETE FROM pendaftar WHERE id_pendaftar = '$_GET[id]'");

echo "<script>alert('pendaftar telah dikonfirmasi!');</script>";
echo "<script>location='index.php?halaman=murid';</script>"

 ?>