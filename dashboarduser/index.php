<?php   
session_start();
include"../config/database.php";

                    if(isset($_POST['Kirim'])){

                        $data = mysqli_query($con,"SELECT * FROM user_info WHERE username = '$_SESSION[username]'");
                        $r = mysqli_fetch_array($data);
                        $departemen = $r['departmen'];
                        $username = $_SESSION['form-username'];
                        $nama = $r['nama'];
                        $tanggal = $_POST['date-input'];
                        $departmen = $_POST['departemen'];
                        $jenis_kerusakan = $_POST['jenis-kerusakan'];
                        $kerusakan = $_POST['kerusakan'];
                        $keterangan = $_POST['keterangan'];


                        @$query = mysqli_connect($con,$sql);

                        @$sql = mysqli_query($con,"INSERT INTO report VALUES('$tanggal' , '$nama' , '$departemen','$jenis_kerusakan', '$kerusakan', '$keterangan' , '')");

                        echo "<script>alert('Data berhasil dikirim');document.location.href='?menu=user'</script>";
                            }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo_hotel.png" alt="Lido"/>
                </a>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <div class="mess-dropdown js-dropdown">
                                            
                                        </div>
                                    </div>
                                </div>
<?php 

include"../config/database.php";

$data = mysqli_query($con,"SELECT * FROM user_info WHERE username = '$_SESSION[username]'");
$r = mysqli_fetch_array($data);
$departemen = $r['departmen'];
$username = $_SESSION['form-username'];
$nama = $r['nama'];
 ?>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="imagess/iconn/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $username; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="imagess/iconn/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php   echo $nama; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $departemen; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
<style type="text/css">
.chart{
    padding: 30px;
    border-radius: 5px;
    height: 200px;
}
.over{
    margin-bottom: 10px;
}
</style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       <div class="col-lg-12">
                        <form method="post">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Silahkan masukan</strong> Laporan
                                    </div>
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Tanggal</label>
                                                    </div>
                                                    <div class="col-15 col-md-9">
                                                        <input type="date" id="text-input" name="date-input"  class="form-control" required>
                                                        <small class="form-text text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Departemen</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="departemen" id="select" class="f
                                                        orm-control" required>
                                                <?php 
                                                    include"../config/config.php";
                                                    $sql = mysqli_query($con,"SELECT * FROM departemen");
                                                 ?>
                                                            <option value="0">Silahkan Pilih</option>
                                                            <?php while ($dep = mysqli_fetch_array($sql)) {
                                                                ?><option value="1"><?php echo $dep['departemen'] ?></option>
                                                           <?php  } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                  <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Jenis Kerusakan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select   name="jenis-kerusakan" id="select" class="form-control" required>
                                                            <option value="0">Silahkan Pilih</option>
                                                            <option value="Hardware">Hardware</option>
                                                            <option value="Software">Software</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Kerusakan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="input" name="kerusakan" placeholder="Kerusakan" class="form-control"required>
                                                        <small class="help-block form-text">Masukan kerusakan anda</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Kerusakan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="input" name="keterangan" placeholder="Keterangan" class="form-control"required>
                                                        <small class="help-block form-text">Masukan keterangan anda</small>
                                                    </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm" name="Kirim">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- footer -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 TimCBT. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
<!-- end document-->
