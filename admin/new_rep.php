<?php

include '../conn.php';

  if (isset($_GET['send'])){
  	$idStaff=$_POST['staff'];
    $q="UPDATE laporan SET id_staff='$idStaff'";
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

  <title>New Reports</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/admin.css" rel="stylesheet">

</head>
<body>
<form method="post">
              <div class="form-group row">
               <div class="form-group col-sm-9">
                <label for="inputKategori"> Staff </label>
                <select class="form-control" name="staff" placeholder="Category">
                  <option value="S0001"> Ardina Setyawan </option>
                  <option value="S0002"> Administration </option>
                  <option value="S0003"> Teacher </option>
                  <option value="S0004"> Infrastructure </option>
                  <option value="S0005"> Hygiene </option>
                </select>
                <button name="send"> Send </button>
                <button href="reportNew.php"></button>
            </div>
          </div>
        </form>
</body>
</html>