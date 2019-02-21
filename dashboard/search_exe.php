<?php 
include '../config/database.php';
?>
 
<h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
 
<form action="search_exe.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>tgl</th>
		<th>Nama</th>
		<th>jenis_kerusakan</th>
		<th>kerusakan</th>
		<th>id_report</th>

	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($con, "SELECT * FROM report WHERE tgl LIKE '%".$cari."%'");				
	}else{
		$data = mysqli_query($con, "SELECT * FROM report");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['tgl']; ?></td>
		<td><?php echo $d['nama_orang']; ?></td>
		<td><?php echo $d['jenis_kerusakan']; ?></td>
		<td><?php echo $d['kerusakan']; ?></td>
		<td><?php echo $d['id_report']; ?></td>
	</tr>
	<?php } ?>
</table>
