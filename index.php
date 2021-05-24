<?php

include 'conn.php';

if(isset($_POST['done'])){

 $admin = $_POST['admin'];
 $pass = $_POST['pass'];
 
 if($admin=="admin" && $pass=="password")
 {
 	header('location:admin.php');
 }
 else
 {
 	?>
 	<!DOCTYPE html>
	<html>
	<body>
	<script type="text/javascript">
	alert("password or username is incorrect");
	window.location.href = "index.php";
	</script>
	</body>
	</html>
<?php  
 }
}

?>


<!DOCTYPE html>
<html>
<head>
 <title>Admin portal</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 <br><br>
 <form method="post">
 
 <div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Login </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="admin" class="form-control"> <br>

 <label> Password: </label>
 <input type="password" name="pass" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>