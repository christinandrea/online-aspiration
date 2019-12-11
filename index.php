<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <meta charset="utf-8">
  <!--Bootstrap-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo "<div class='alert'> Login gagal! </div>";
      }
    }
    ?>
  <!-- Sign In -->

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
         <div class="heading col-md-9 col-lg-8">
           <h1 class="login-heading mb-4 text-center"> Welcome! </h1>
         </div>
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              
              <form action="login/login.php" method="post">
                <div class="form-group">
                   <label for="inputEmail">Email address</label>
                  <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address">
                 
                </div>

                <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
                  
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="login">Sign in</button>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>