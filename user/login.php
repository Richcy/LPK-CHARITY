
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
    <title>Login User</title>

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
                    <center><h2 class="title">Login</h2></center>
                    <form method="POST">      
                        <div class="input-group">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            <a href="daftar.php">belum punya akun? daftar</a>
                        </div>

                        <div class="row row-space">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="kembali">Kembali</button>
                            </div>
                            <div class="p-t-15">
                                <center><button class="btn btn--radius-2 btn--blue" type="submit" name="login">Login</button></center>
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
    $username = $_POST["username"];
    $password = $_POST["password"];
    //lakukan query ngecek akun di tabel pelanggan di db
    $ambil = $koneksi->query("SELECT * FROM user 
        WHERE username_user='$username' AND password_user='$password'");

    // ngitung akun yang terambil
    $akunyangcocok = $ambil->num_rows;

    // jika 1 akun yang cocok, maka dologinkan
    if($akunyangcocok==1)
    {
        // anda sukses login
        // mendapatkan akun dlm bentuk array
        $akun = $ambil->fetch_assoc();
        // simpan di session pelanggan
        $_SESSION["admin"] = $akun;
        echo "<script>alert('anda sukses login');</script>";
        echo "<script>location='index.php';</script>";
    }
    else
    {
        // anda gagal login
        echo "<script>alert('anda gagal login, periksa akun anda!');</script>";
        echo "<script>location='login.php';</script>";
    }
}
else if(isset($_POST["kembali"]))
{
    echo "<script>location='../index.php';</script>";
}


 ?>