<?php
include '../conn.php';
session_start();
date_default_timezone_set('UTC');

if(isset($_POST['submit'])){
$nis=$_POST['nis'];
$jenis=$_POST['jenis_keluhan'];
// $tgl=date('d-m-y');
$keluhan=$_POST['keluhan'];

$query = "INSERT INTO laporan(nis, id_keluhan, isi_keluhan) VALUES('$nis', '$jenis', '$keluhan')";
$insert = mysqli_query($conn, $query);

	if($insert){
		echo "<script>alert('Your complaint has been successfully sent! Please wait for further information in your notification box!')</script>";
		echo "<script>window.location.href='userpage.php'</script>";
	}else{
		echo "gagal";
	}
}
?>