<?php
include '../conn.php';
$query=mysqli_query($conn,"SELECT * FROM laporan WHERE status='New' ORDER BY no_laporan ASC");

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

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin</div>
      <div class="list-group list-group-flush">
        <a href="staffList.php" class="list-group-item list-group-item-action bg-light">Staff List</a>
        <a href="studentList.php" class="list-group-item list-group-item-action bg-light">Student List</a>
        <li class="list-unstyled">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light">Reports</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="reportNew.php" class="list-group-item list-group-item-action bg-light">New</a>
                    </li>
                    <li>
                        <a href="reportOnGo.php" class="list-group-item list-group-item-action bg-light">On-Going</a>
                    </li>
                    <li>
                        <a href="reportComplete.php" class="list-group-item list-group-item-action bg-light">Complete</a>
                    </li>
                </ul>
            </li>
        <a href="../register/register.php" class="list-group-item list-group-item-action bg-light">Registration for New Account</a>
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
        <h1 class="mt-4 text-center">New Reports</h1>
  <table class="table table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col"> Report Number</th>
      <th scope="col"> Student Code </th>
      <th scope="col"> Date </th>
      <th scope="col"> Complaint</th>
      <th scope="col"> Status </th>
      <th scope="col"> Action </th>
    </tr>
  </thead>
  <tbody class="data-keluhan">
    <?php
  if(mysqli_num_rows($query)>0) { 
    
      while($data=mysqli_fetch_array($query)){
        echo ("
        <tr>
          <td style: 'text-align : center'>".$data['no_laporan']."</td>
          <td style: 'text-align : center'>".$data['nis']."</td>
          <td style: 'text-align : center'>".$data['tgl_keluhan']."</td>
          <td style: 'text-align : center'>".$data['isi_keluhan']."</td>>
          <td style: 'text-align : center' class='badge badge-primary'>".$data['status']."</td>>
          <td><a href='form-assign.php?no_laporan=".$data['no_laporan']."' class='btn btn-danger'> Assign To </a> </td>
          <td><a href='delete.php?no_laporan=".$data['no_laporan']."' class='btn btn-warning'> Delete </a> </td>
          ");
    }} ?> 
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
 
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}


// Get id

// $('.data-keluhan').on('click', function(e){
//   let id = e.target.id;
//   document.querySelector('#no-lap').value = id;
// });
// // var id = document.querySelector('#no-lap');
// // console.log(id);

</script>
</body>

</html>
