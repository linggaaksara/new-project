<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "report_hotel";

mysqli_connect("localhost","root","");
@mysqli_select_db("report_hotel");

$con = mysqli_connect($host, $user, $pass, $db) or die('KONEKSI GAGAL');
?>

