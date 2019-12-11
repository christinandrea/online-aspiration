
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

<!--Header-->
<header class="masthead">
 
 
  <div class="h-100" id="home" style="background-repeat:no-repeat;background-size: cover;background-color: rgba();background-image:url('sekolah.jpg');">
      <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light text-white"> Welcome, User! </h1>
        <p class="lead text-white">Please fill the complaint form due to your needs! </p>
      </div>
  </div>
 
</header>
<!--About-->

<div id="about" class="about">
  <div class="container section appear clearfix">
    <div class="row">
      <div class="col-lg-12">
        <div class="about align-center">
          <div class="about pad-top40 pad-bot40 clearfix">
            <h1 class="font-weight-light text-center text-uppercase"> About </h1>
            <br>
            <h3 class="lead"> SMK Telkom Jakarta is a vocational school that based in West Jakarta. This school  focused in building it's students to be competent in technological area. SMK Telkom Jakarta is directly under Yayasan Pendidikan Telkom, which is owned by Telkom Indonesia. </h3>
          </div>
      </div>
    </div>
  </div>
</div>
<br>

<!--Complaint form -->
<div class="form" id="form">
  <form action="input_check.php" method="post">
  <div class="container">
    <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="heading">
      <h1 class="font-weight-light text-center text-uppercase "> Complaint Form</h1>
    </div>
    <br>
    <div class="form-group">
      <label for="inputNIS "> Student Code </label>
      <input type="text" name="nis" class="form-control" placeholder="Student Code">
    </div>
    <div class="form-group">
      <label for="inputKategori"> Category </label>
      <select class="form-control" name="jenis_keluhan" placeholder="Category">
        <option value="C0001"> Extracurricular </option>
        <option value="C0002"> Administration </option>
        <option value="C0003"> Teacher </option>
        <option value="C0004"> Infrastructure </option>
        <option value="C0005"> Hygiene </option>
      </select>
    </div>
    <!-- 
    <div class="form-group">
      <label for="inputTanggal"> Date </label>
      <input type="date"  name="tanggal_keluhan" class="form-control" placeholder="Date">
    </div>
     --><div class="form-group">
      <label for="inputKeluhan"> Complaint </label>
      <textarea class="form-control" name="keluhan"  rows="5"></textarea>
    </div>
    <br>
      <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit"> Submit </button>
      <hr class="my-4">
              
  </div>
  </div>
  </div>
</form>
</div>
<!-- Modal -->

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</html>