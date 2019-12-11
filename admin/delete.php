<?php

include "../conn.php";

$id = $_GET['no_laporan'];

$del = "DELETE FROM laporan WHERE no_laporan='$id'";

$q = mysqli_query($conn, $del);

if($q){
	echo "Berhasil";
}else{
echo "Gagal";
}

?>