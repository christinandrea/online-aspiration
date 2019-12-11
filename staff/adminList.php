<?php
include '../conn.php';

$query=mysqli_query($conn,"SELECT * FROM admin ORDER BY id_admin ASC");

  // if (isset($_GET['nis'])){
  //   $nis = $_GET['nis'];

  //   $q="UPDATE laporan SET status='On_Going' WHERE nis='$nis'";
  //   $result = mysqli_query($conn,$q);

  //   if($result){
  //     echo 
  //   }
  // }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin List</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/admin.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Staff</div>
      <div class="list-group list-group-flush">
        <a href="staffList.php" class="list-group-item list-group-item-action bg-light">Admin List</a>
        <a href="newRep.php" class="list-group-item list-group-item-action bg-light">New Reports</a>
        <a href="completedRep.php" class="list-group-item list-group-item-action bg-light">Completed Reports</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-danger" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4 text-center">Admin List</h1>
  <table class="table table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col"> ID Admin</th>
      <th scope="col"> Name </th>
      <th scope="col"> Email </th>
    </tr>
  </thead>
  <tbody>
    <?php
  if(mysqli_num_rows($query)>0) { ?>
    <?php
      while($data=mysqli_fetch_array($query)){
        ?>
        <tr>
          
          <td style="text-align: center"><?php echo $data["id_admin"]; ?></td>
          <td style="text-align: center"><?php echo $data["nama_admin"]; ?></td>
          <td style="text-align: center"><?php echo $data["email_admin"]; ?></td>
          
    <?php }} ?> 
  </tbody>
    </table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
 
 
  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
 
</body>

</html>
