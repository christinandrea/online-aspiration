<!DOCTYPE html>
<html>
<head>
  <title> Student Complaints Center </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="user.css">
  
  <!--Bootstrap-->

  <  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>


</head>

<body></body>
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">
    <img src="../pics/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" class="image-responsive"> 
    Student Complaints Center
  </a>
  <!-- Button trigger modal -->
  <a href="history.php" class="btn btn-warning">
    Notifications
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> 
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto nav-fill w-50">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-value="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-value="form">Form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Log Out</a>
      </li>
    </div>
  </div>
</nav>
<div class="container-fluid mt-4">
  <table class="table">
    <thead>
      <th></th>
      <th></th>
      <th></th>
    </thead>
    <tbody>
<?php
    include "../conn.php";

    $query=mysqli_query($conn,"SELECT * FROM laporan WHERE status='Complete' DESC");

    if($query){ 
      while($data=mysqli_fetch_array($query)){
      echo ("<tr>
         <td style='text-align: center'>".$data['tgl_keluhan']."</td>
          <td style='text-align: center'>".$data['isi_keluhan']."</td>
           <td style='text-align: center' class='badge badge-success'>".$data['status']."</td>
          </tr> 
          ");

    }} ?>
    </tbody>
    </table> 
    </div>


    </body>