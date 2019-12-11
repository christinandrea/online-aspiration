
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

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Staff</div>
      <div class="list-group list-group-flush">
        <a href="adminList.php" class="list-group-item list-group-item-action bg-light">Admin List</a>
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
        <h1 class="mt-4 text-center">New Report List</h1>
  <table class="table table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col"> Report Number</th>
      <th scope="col"> Student Code </th>
      <th scope="col"> Staff ID </th>
      <th scope="col"> Date </th>
      <th scope="col"> Complaint </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../conn.php';
    $sql = mysqli_query($conn, "SELECT * FROM laporan WHERE status='New' || status='On-Going' ORDER BY no_laporan ASC");
      while($data=mysqli_fetch_array($sql)){
        echo (" <tr>
         
          <td style='text-align: center'>".$data["no_laporan"]."</td>
          <td style='text-align: center'>".$data["nis"]."</td>
         <td style='text-align: center'>".$data["id_staff"]."</td>
          <td style='text-align: center'>".$data["tgl_keluhan"]."</td>
          <td style='text-align: center'>".$data["isi_keluhan"]."</td>
           <td style='text-align: center' class='badge badge-warning'>".$data["status"]."</td>
          <td style='text-align: center'>
          <a href ='proses-status.php?no_laporan=".$data['no_laporan']."&status=".$data['status']."' class='btn btn-warning'> Process </a>
         <a href ='proses-status.php?no_laporan=".$data['no_laporan']."&status=".$data['status']."' class='btn btn-success'> Complete </a>
          </td>");
       
    } ?> 
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
