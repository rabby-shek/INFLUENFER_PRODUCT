<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			
			

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);
			
			
				header("Location: login.php");
			die;

			

			
		}else
		{
			echo "Please enter some valid information!";
		}

		

		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="background:black;margin-top:40px;border-radius:40px;height:350px;width:400px;">
	<h3 style="text-align:center;color:white">Sign Up</h3>
	<form method="post">
  <div class="form-group">
    <label for="username" style="color:white;">Email address</label>
    <input type="email" class="form-control" id="username"  name="user_name"placeholder="Enter email">
    <small id="emailHelp"  style="color:white;">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password" style="color:white;">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" value="Signup">Submit</button>
</form>
<div style="color:white;">Already have an account ? <a style= "color:white;"href="login.php">Sign in</a></div>

	</div>
	
	
</body>
</html>