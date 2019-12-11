<?php

include '../conn.php';

if(isset($_POST['regButton'])){
$nis=$_POST['nis'];
$name=$_POST['name'];
$domisili=$_POST['domisili'];
$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($conn,"INSERT INTO siswa(nis,nama_siswa,domisili,email_siswa,password) VALUES('$nis','$name','$domisili','$email','$password')");

if($query){
	echo "<script>alert('Data has been successfully added!')</script>";
	echo "<script>window.location.href='../admin/admin.php'</script>";
}else{
	echo "failed";
}
}
?>