
<?php 

    session_start();
    include 'koneksi.php'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cek Pendaftaran Anda</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <center><h2 class="title">Cek Pendaftaran Anda</h2></center>
                    <form method="POST">      
                        <div class="input-group">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap (Sesuai KTP)*</label>
                                    <input class="input--style-4" type="text" name="nama">
                                </div>
                            
                                <div class="input-group">
                                    <label class="label">Nomor Induk KTP</label>
                                    <input class="input--style-4" type="text" name="nik">
                                </div>
                                <strong>*nama harus sesuai saat pendaftaran</strong><br>
                                <a href="daftar.php">belum mendaftar?</a><br>
                          
                        </div>

                        <div class="row row-space">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="kembali">Kembali</button>
                            </div>
                            <div class="p-t-15">
                                <center><button class="btn btn--radius-2 btn--blue" type="submit" name="login">Cek</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<?php 

// jika ada tombol simpan(tombol simpan di tekan)
if(isset($_POST["login"]))
{
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    //lakukan query ngecek akun di tabel pelanggan di db
    $ambil = $koneksi->query("SELECT * FROM pendaftar 
        WHERE username_pendaftar='$nama' AND nik_pendaftar='$nik'");

    // ngitung akun yang terambil
    $akunyangcocok = $ambil->num_rows;

    // jika 1 akun yang cocok, maka dologinkan
    if($akunyangcocok==1)
    {
        // belum konfirmasi admin
        echo "<script>alert('Maaf data anda belum dikonfirmasi oleh admin');</script>";
        

    }
    else
    {
        // sudah konfirmasi admin
        echo "<script>alert('Selamat! data anda telah di konfirmasi oleh admin');</script>";
    }
}
else if(isset($_POST["kembali"]))
{
    echo "<script>location='../index.php';</script>";
}


 ?>