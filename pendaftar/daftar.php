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

    <!-- CSS POP UP-->
    <style>
    /* Popup container - can be anything you want */
    .popup {
      position: relative;
      display: inline-block;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* The actual popup */
    .popup .popuptext {
      visibility: hidden;
      width: 160px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 8px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s;
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
      from {opacity: 0;} 
      to {opacity: 1;}
    }

    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity:1 ;}
    }
    </style>

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Pendaftaran</h2>
                    <form method="POST" enctype="multipart/form-data">
                        
                            
                                <div class="input-group">
                                    <label class="label">Nama Lengkap (Sesuai KTP)</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            
                            
                                <div class="input-group">
                                    <label class="label">Nomor Induk KTP</label>
                                    <input class="input--style-4" type="text" name="nik">
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
                                    <label class="label">Pilih Tanggal Booking Kursus</label>
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
                                    <label class="label">Nomor HP/WA (Harus Aktif)</label>
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
                            <input class="input" type="file" name="bukti_transfer">
                        </div>
                        <div class="input-group">
                            <label class="label">Pendidikan Akhir</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pendidikan_akhir">
                                    <option disabled="disabled" selected="selected">Pendidikan Akhir</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Sarjana">Sarjana</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <a href="cekdaftar.php">sudah mendaftar?</a>

                        
                        <div class="row row-space">
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="kembali">Kembali</button>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="daftar">Daftar</button>
                            </div>

                        </div>
                        <!-- POP UP
                        <script>
                        // When the user clicks on <div>, open the popup
                        function myFunction() {
                          var popup = document.getElementById("myPopup");
                          popup.classList.toggle("show");
                        }
                    </script>
                    <div class="popup" onclick="myFunction()">Click me!
                      <span class="popuptext" id="myPopup">Popup text...</span>
                    </div>
                    -->
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
                          
                            //mengambil isian nama, nik dll

                            date_default_timezone_set('Asia/Jakarta');
                            $username = $_POST["username"];
                            $nik = $_POST["nik"];
                            $tempat_lahir = $_POST["tempat_lahir"];
                            $tanggal_lahir = $_POST["tanggal_lahir"];
                            $tanggal_lahir2 = DateTime::createFromFormat('d/m/Y', $tanggal_lahir);
                            $tanggal_lahir3 =  $tanggal_lahir2->format('Y-m-d');
                            $tanggal = $_POST["tanggal"];
                            $tanggal2 = DateTime::createFromFormat('d/m/Y', $tanggal);
                            $tanggal3 =  $tanggal2->format('Y-m-d');
                            if (isset($_POST['jenis_kelamin'])) {
                                $_POST['jenis_kelamin'];
                            }
                            $jenis_kelamin = $_POST["jenis_kelamin"];
                            $email = $_POST["email"];
                            $hp = $_POST["hp"];
                            $alamat_ktp = $_POST["alamat_ktp"];
                            $alamat_domisili = $_POST["alamat_domisili"];
                            $pendidikan_akhir = $_POST["pendidikan_akhir"];
                            $tanggal_daftar = date("Y-m-d H:i:sa");
                            //upload foto bukti transfer
                            $bukti_transfer = $_FILES['bukti_transfer']['name'];
                            $lokasi = $_FILES['bukti_transfer']['tmp_name'];
                            move_uploaded_file($lokasi,"assets/img/".$bukti_transfer);

                          

                            //konversi tanggal

                            $dt=$tanggal3;
 
                            $dt1 = strtotime($dt);
                            $dt2 = date("l", $dt1);
                            $dt3 = strtolower($dt2);
                                                           

                            //cek email 

                            $ambil = $koneksi->query("SELECT * FROM user
                                WHERE email_user ='$email'");
                            $yangcocok = $ambil->num_rows;
                            //cek tanggal
                            $ambil2 = $koneksi->query("SELECT * FROM user
                                WHERE tanggal_booking ='$tanggal3'");
                            $tanggalcocok = $ambil2->num_rows;

                            //logic untuk input data

                            //cek hari booking apakah memilih hari jum'at?

                            /*if(($dt3 != "friday"))
                            {
                                echo "<script>alert('pendaftaran gagal ,booking hari hanya dapat memilih hari jumat!')</script>";
                                echo"<script>location='daftar.php';</script>";
                            } */
                            //cek email apakah sudah digunakan?

                            if($yangcocok==1)
                            {
                                echo "<script>alert('pendaftaran gagal ,email sudah digunakan!')</script>";
                                echo"<script>location='daftar.php';</script>";
                            }

                            //cek apakah booking sudah penuh?
                            elseif($tanggalcocok>5)
                            {
                                echo "<script>alert('pendaftaran gagal ,booking penuh!')</script>";
                                echo"<script>location='daftar.php';</script>";
                            }
                            //persyaratan memenuhi kriteria
                            else
                            {
                                //query insert ke tabel pendaftar

                                $koneksi->query("INSERT INTO pendaftar
                                    (username_pendaftar,nik_pendaftar,tanggal_booking,tanggal_daftar,
                                    tempat_lahir_pendaftar,tanggal_lahir_pendaftar,jenis_kelamin_pendaftar,alamat_ktp_pendaftar,alamat_domisili_pendaftar,pendidikan_akhir_pendaftar,email_pendaftar,bukti_transfer,hp_pendaftar)
                                    VALUES('$username','$nik','$tanggal3','$tanggal_daftar','$tempat_lahir','$tanggal_lahir3','$jenis_kelamin','$alamat_ktp','$alamat_domisili','$pendidikan_akhir','$email','$bukti_transfer','$hp') ");

                                 echo "<script>alert('Terima kasih anda sudah mendaftar! Silahkan tunggu konfirmasi dari admin ke nomer WA anda')</script>";
                                echo"<script>location='cekdaftar.php';</script>";
                            }

                            
                        }
                        else if(isset($_POST["kembali"]))
                        {
                            echo "<script>location='../index.php';</script>";
                        }

                         ?>