<?php

$host = 'localhost';
$uname='root';
$pass="";
$db='complaint-db';

$conn = mysqli_connect($host,$uname,$pass,$db);

if(mysqli_connect_errno()){
	echo "Connection failed : ". mysql_connect_error();
}
?>