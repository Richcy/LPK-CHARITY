<?php include 'koneksi.php'; ?>

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
    <title>Pendaftaran</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Pendaftaran</h2>
                    <form method="POST">
                        
                            
                                <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            
                            
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat Lahir</label>
                                    <input class="input--style-4" type="text" name="tempat_lahir">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="tanggal_lahir">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pilih Tanggal Booking</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="tanggal">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Laki-Laki
                                            <input type="radio" name="jenis_kelamin" value="laki-laki">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input type="radio" name="jenis_kelamin" value="perempuan">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nomor HP (WA)</label>
                                    <input class="input--style-4" type="text" name="hp">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Alamat KTP</label>
                            <input class="input--style-4" type="text" name="alamat_ktp">
                        </div>
                        <div class="input-group">
                            <label class="label">Alamat Domisili (Sekarang)</label>
                            <input class="input--style-4" type="text" name="alamat_domisili">
                        </div>
                        <div class="input-group">
                            <label class="label">Bukti Transfer</label>
                            <input class="input--style-4" type="text" name="bukti_transfer">
                        </div>
                        <div class="input-group">
                            <label class="label">Pendidikan Akhir</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pendidikan_akhir">
                                    <option disabled="disabled" selected="selected">Pendidikan Akhir</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <a href="login.php">sudah punya akun? login</a>
                        
                        <div class="row row-space">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="kembali">Kembali</button>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="daftar">Daftar</button>
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
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<?php 

                        //jika ada tombol daftar (ditekan tombol daftar)

                        if(isset($_POST["daftar"]))
                        {
                            //mengambil isian nama, password dll

                            date_default_timezone_set('Asia/Jakarta');
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $tempat_lahir = $_POST["tempat_lahir"];
                            $tanggal_lahir = $_POST["tanggal_lahir"];
                            $tanggal = $_POST["tanggal"];
                            $date2 = strtotime($tanggal);
                            $tanggal2 = date("Y-m-d", $date2);
                            if (isset($_POST['jenis_kelamin'])) {
                                $_POST['jenis_kelamin'];
                            }
                            $jenis_kelamin = $_POST["jenis_kelamin"];
                            $email = $_POST["email"];
                            $hp = $_POST["hp"];
                            $alamat_ktp = $_POST["alamat_ktp"];
                            $alamat_domisili = $_POST["alamat_domisili"];
                            $pendidikan_akhir = $_POST["pendidikan_akhir"];
                            $bukti_transfer = $_POST["bukti_transfer"];
                            $tanggal_daftar = date("Y-m-d H:i:sa");

                            //cek apakan email sudah digunakan

                            $ambil = $koneksi->query("SELECT * FROM user
                                WHERE email_user ='$email'");
                            $yangcocok = $ambil->num_rows;
                            if($yangcocok==1)
                            {
                                echo "<script>alert('pendaftaran gagal ,email sudah digunakan')</script>";
                                echo"<script>location='daftar.php';</script>";
                            }
                            else
                            {
                                //query insert ke tabel pelanggan

                                $koneksi->query("INSERT INTO user
                                    (username_user,password_user,tanggal_booking,tanggal_daftar,
                                    tempat_lahir_user,tanggal_lahir_user,jenis_kelamin_user,alamat_ktp_user,alamat_domisili_user,pendidikan_akhir_user,email_user,bukti_transfer,hp_user)
                                    VALUES('$username','$password','$tanggal2','$tanggal_daftar','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat_ktp','$alamat_domisili','$pendidikan_akhir','$email','$bukti_transfer','$hp') ");

                                    echo "<script>alert('pendaftaran sukses ,silahkan login')</script>";
                                echo"<script>location='login.php';</script>";
                            }

                            
                        }
                        else if(isset($_POST["kembali"]))
                        {
                            echo "<script>location='../index.php';</script>";
                        }

                         ?>