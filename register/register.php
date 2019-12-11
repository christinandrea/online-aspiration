<!DOCTYPE html>
<html>
<head>
	<title> Register </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="reg.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--Javascript-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-register my-5">
          <div class="card-body">
            <h5 class="card-title text-center"> Register </h5>
            <form class="form-register" action="reg.php" method="post">

              <div class="form-label-group">
              	<label> Student Code </label>
                <input type="text" name="nis" class="form-control" placeholder="Student Code" required autofocus>
                
              </div>

              <div class="form-label-group">
              	<label> Full Name </label>
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
              </div>
               <div class="form-label-group">
                <label for="inputName"> Domicile </label>
                <input type="text" name="domisili" class="form-control" placeholder="Address" required>
              </div>
              <div class="form-label-group">
              	<label> Email Address </label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
              </div>
               <div class="form-label-group">
              	<label> Password </label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              
              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regButton">Register </button>
              <hr class="my-4">
              <br>
              <a href="../admin/admin.php">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>