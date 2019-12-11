<?php
include "../conn.php";

$id  = $_GET['no_laporan'];
$status = $_GET['status'];

switch($status){
	case 'New' : 
	$status = 'On-Going';
	break;
	case 'On-Going':
	 $status = 'Complete';
	 	break; 
}

$upd = "UPDATE laporan SET status='$status' WHERE no_laporan='$id'";
$query = mysqli_query($conn, $upd);

if($query){
	echo "berhasil";
}else{
	echo "gagal";
}

?>