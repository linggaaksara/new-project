<?php   
session_start();
include "../config/database.php";
if (isset($_GET['hapus'])) {
    $hapus = mysqli_query($con,"DELETE FROM report WHERE id_report = '$_GET[id]'");
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
                        <a class="logo" href="index.html">
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
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="stat.php">
                                <i class="fas fa-table"></i>Stats</a>
                        </li>
                        
                        
                        
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo_hotel.png" alt="Lido"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data.php">
                                <i class="fas fa-table"></i>Data Pegawai</a>
                        </li>
                        <li>
                            <a href="stat.php">
                                <i class="fas fa-chart-bar"></i>Stats</a>
                        </li>

                        <li>
                            <a href="riwayat.php">
                                <i class="far fa-check-square"></i>Riwayat</a>
                        </li>
                        
                       
                    </ul>
                </nav>
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
                                <form action="search_exe.php" method="get">
 
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                    <?php
                    include"../config/database.php"; 
                        $kueri = mysqli_query($con, "SELECT * FROM report");
 
                        $data = array ();
                        while (($row = mysqli_fetch_array($kueri)) != null){
                            $data[] = $row;
                        }
                            $cont = count ($data);
                    ?>
                                                <p>You have <?php echo $cont ?> Notifications</p>
                                            </div>
                                            <?php
            include "../config/database.php";
                $no = 0;
                $sql = "SELECT * FROM report";
                $query = mysqli_query($con, $sql);
                $cek = mysqli_num_rows($query);
            ?>
                <?php if ($cek == ""): ?>
                echo "  <p>NO RECORD</p>";
                <?php else: ?>

                <?php while($r= mysqli_fetch_array($query)): ?>     
                <?php $no++; ?>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p><a href="stat.php"><?php echo $r['nama'] ?></a></p>
                                                    <p><?php echo $r['departmen'] ?></p>
                                                    <span class="date"><?php echo $r['jenis_kerusakan']." | ".$r['kerusakan'] ?></span>
                                                </div>
                                            </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                            <div class="notifi__footer">
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
<?php 

include"../config/database.php";
$data = mysqli_query($con,"SELECT * FROM admin");
$r = mysqli_fetch_array($data);
$username = $_SESSION['form-username'];

 ?>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $username; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php   echo $username; ?></a>
                                                    </h5>
                                                    <span class="email">Admin</span>
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
</style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                   <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                        <?php 
                        $kueri = mysqli_query($con, "SELECT * FROM report");
 
                        $data = array ();
                        while (($row = mysqli_fetch_array($kueri)) != null){
                            $data[] = $row;
                        }
                            $cont = count ($data);
                                             ?>
                                                <h2><?php echo $cont ?></h2>
                                                <span>Kerusakan</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data Laporan</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        
                                                    </label>
                                                </th>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>ID Laporan</th>
                                                <th>Tanggal</th>
                                                <th>Jenis Kerusakan</th>
                                                <th>Kerusakan</th>
                                                <th>Keterangan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
            <?php
                $no = 0;
                $sql = "SELECT * FROM report";
                $query = mysqli_query($con, $sql);
                $cek = mysqli_num_rows($query);
            ?>
                <?php if ($cek == ""): ?>
                echo "<tr><td align='center' colspan='8'>NO RECORD</td></tr>";
                <?php else: ?>

                <?php while($r= mysqli_fetch_array($query)): ?>     
                <?php $no++; ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        
                                                    </label>
                                                </td>
                                                <td><?php echo $no ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $r['nama'] ?></span>
                                                </td>
                                                <td class="desc"><?php echo "0".$r['id_report'] ?></td>
                                                <td><?php echo $r[0] ?></td>
                                                <td>
                                                    <span class="status--process"><?php echo $r[3] ?></span>
                                                </td>
                                                <td><?php echo $r[4] ?></td>
                                                <td><?php echo $r[5] ?></td>
                                                <td>
                                                    
                                                    <div class="table-data-feature">
                                                        
                                                        <a href="stat.php?&hapus&id=<?= $r[6]?>" value="delete" name="hapus" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete" href="stat.php?&hapus&id=<?= $data['id_report']; ?>"></i>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                                    
                                        
                                    </div>
                                </div>
                            </div>
        
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