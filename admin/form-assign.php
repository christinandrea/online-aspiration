<?php

include '../conn.php';

  if (isset($_POST['kirim'])){
  	$id = $_GET['no_laporan'];
  	$idStaff=$_POST['staff'];
    $q="UPDATE laporan SET id_staff='$idStaff' WHERE no_laporan='$id'";
    $result = mysqli_query($conn,$q);

    if($result){
      echo "good";
    }else{
    	echo "gagal";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Assignee</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/admin.css" rel="stylesheet">

</head>
<body>
	<a href="reportNew.php" class="btn btn-warning">Back</a>
	<hr>
<form method="post">
	<h1 class="text-center text-monospace">
		Assignee
	</h1>
              <div class="form-group row">
               <div class="form-group col-sm-9">
                <label for="inputKategori"> Staff </label>
                <select class="form-control" name="staff" placeholder="Category">
                  <option value="S0001"> Ardina Setyawan </option>
                  <option value="S0002"> Andrew Majalengka </option>
                  <option value="S0003"> Hera Herawati </option>
                  <option value="S0004"> Ratna Ratnasari </option>
                  <option value="S0005"> Al-Hakim </option>
                </select>
                <input type="submit" name="kirim" class="btn btn-danger" href="">                
                <button href="reportNew.php"></button>
            </div>
          </div>
        </form>
</body>
</html>

