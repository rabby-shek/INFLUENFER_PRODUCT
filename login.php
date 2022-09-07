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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	
		
	<div class="container" style="background:black;margin-top:40px;border-radius:40px;height:350px;width:400px;">
	<h3 style="text-align:center;color:white">Sign in</h3>
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
  <button type="submit" class="btn btn-primary" value="login">Submit</button>
</form>
<div style="color:white;">New Here ? <a style= "color:white;"href="signup.php">Sign Up</a></div>

	</div>
	
</body>
</html>