<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/4deb8dd6fa.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="Navbar">
        <div class="Navbar__Link Navbar__Link-brand">
           Influencer Product
         </div>
         <div class="Navbar__Link Navbar__Link-toggle">
           <i class="fas fa-bars"></i>
         </div>
       <nav class="Navbar__Items Navbar__Items--right">
         <div class="Navbar__Link">
           <a href="index.php">home</a>
         </div>
         <div class="Navbar__Link">
           <a href="./ourProduct.php">Our Products</a>
         </div>
         <div class="Navbar__Link">
           <a href="./contact.php">Contact Us</a>
         </div>
         <div class="Navbar__Link">
        <a href="./logout.php">logout</a>
        <div class="user"><small >Hello, <?php echo $user_data['user_name']; ?></small></div>
      </div>
      <div class="Navbar__Link">
        <a href="./signup.php">Sign up</a>
      </div>
       </nav>
     </div>
     <div class="container">
        <h2 style="text-align:center;margin-top:10px;">Contact Us</h2>
        <form action="mailto:walidhasan201002114@gmail.com" method="post" enctype="text/plain">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="First name">
              </div>
            <div class="form-group">
              <label for="Email">Email address</label>
              <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="phnNumber">Contact Number</label>
              <input type="number" class="form-control" id="phnNumber" name="contact" placeholder="Contact Number">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control"  name="description" id="description" cols="30" rows="10"></textarea>
              </div>
            <button type="submit" value="send" class="btn btn-primary">Submit</button>
          </form>

     </div>

     <footer class="foot">
        <h3 class="foot-height">Influencer Products</h3>
        <small class="foot-small">copyright &copy; 2022 influencer products</small>
        <small class="foot-small">All Rights Reserved</small>
        <div class="foot-icon">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-reddit-square"></i>
        </div>
    </footer>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>