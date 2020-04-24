<?php 
session_start();
//koneksi ke database
include 'koneksi.php';


if(!isset($_SESSION['level']))
{
    echo"<script>alert('Anda harus login');</script>";
    echo"<script>location='../login.php'</script>";
}





 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Halaman Staff</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <a class="navbar-brand" href="index.html">Halaman Staff</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li> <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li> <a href="index.php?halaman=pendaftar"><i class="fa fa-dashboard fa-3x"></i> Data Pendaftar</a></li>
                    <li> <a href="index.php?halaman=pembayaran"><i class="fa fa-dashboard fa-3x"></i> Data Pembayaran</a></li>
                    <li> <a href="index.php?halaman=user"><i class="fa fa-dashboard fa-3x"></i> Data User</a></li>
                     <li> <a href="index.php?halaman=murid"><i class="fa fa-dashboard fa-3x"></i> Data Murid</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <?php 
              if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="pendaftar")
                    {
                        include 'pendaftar.php';
                    }
                    else if($_GET['halaman']=="pembayaran")
                    {
                        include 'pembayaran.php';
                    }
                     else if($_GET['halaman']=="user")
                    {
                        include 'user.php';
                    }
                    else if($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                    else if($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    else if($_GET ['halaman']=="murid")
                    {
                        include 'murid.php';
                    }
                    else if ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                } 
              else
                {
                    include 'home.php';
                }?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>