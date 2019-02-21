<?php
 
include('../config/database.php');
 
if(isset($_POST['view'])){
 
// $con = mysqli_connect("localhost", "root", "", "notif");
 
if($_POST["view"] != '')
 
{
   $update_query = "UPDATE status_report SET status = 1 WHERE status=0";
   mysqli_query($con, $update_query);
}
 
$query = "SELECT * FROM status_report ORDER BY status DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0)
{
 
while($row = mysqli_fetch_array($result))
 
{
 
  $output .= '
  <li>
  <a href="#">
  <strong>'.$row["nama"].'</strong><br />
  <small><em>'.$row["jenis_kerusakan"].'</em></small>
  </a>
  </li>
 
  ';
}
}
 
else{
    $output .= '<li><a href="#" class="text-bold text-italic">Tidak ada notif ditemukan</a></li>';
}
 
$status_query = "SELECT * FROM status_report WHERE status = 0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
 
echo json_encode($data);
}
?>