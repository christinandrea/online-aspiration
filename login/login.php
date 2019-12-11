<?php

session_start();
require_once '../conn.php';

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];



$user=mysqli_query($conn,"SELECT * FROM siswa where email_siswa='$email' and password='$password'");

$admin=mysqli_query($conn,"SELECT * FROM admin where email_admin='$email' and password_admin='$password'");
$staff=mysqli_query($conn,"SELECT * FROM staff where email_staff='$email' and password_staff='$password'");

	if($data=mysqli_fetch_assoc($user)){
		$_SESSION['nis']=$data['nis'];
		$_SESSION['nama']=$data['nama_siswa'];
		$_SESSION['domisili']=$data['domisili'];
		$_SESSION['email']=$data['email_siswa'];
		$_SESSION['password']=$data['password'];

		header("location:../user/userpage.php");
		exit();
	}elseif($adminRows=mysqli_fetch_assoc($admin)){
			$_SESSION['id_admin']=$adminRows['id_admin'];
			$_SESSION['nama']=$adminRows['nama_admin'];
			$_SESSION['email']=$adminRows['email_admin'];
			$_SESSION['password']=$adminRows['password_admin'];

			header("location:../admin/admin.php");
			exit();
	}elseif($staffRows=mysqli_fetch_assoc($staff)){
			$_SESSION['id_staff']=$adminRows['id_staff'];
			$_SESSION['nama_staff']=$adminRows['nama_staff'];
			$_SESSION['email']=$adminRows['email_staff'];
			$_SESSION['password']=$adminRows['password_staff'];
		header("location:../staff/staff.php");
		exit();
	}
}




?>