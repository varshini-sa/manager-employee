<?php

include 'conn.php';

if(isset($_POST['done'])){

 $username = $_POST['username'];
 $password = $_POST['password'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $dob = $_POST['dob'];
 $email = $_POST['email'];
 $q = " INSERT INTO `employee`(`username`, `password`,`firstname`,`lastname`,`dob`,`email`) VALUES ( '$username', '$password','$firstname','$lastname','$dob','$email' )";

 $query = mysqli_query($con,$q);
 header('location:admin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>Insert</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Employee Details </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <label> First Name: </label>
 <input type="text" name="firstname" class="form-control"> <br>

 <label> Last Name: </label>
 <input type="text" name="lastname" class="form-control"> <br>

 <label> Date of Birth: </label>
 <input type="date" name="dob" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>