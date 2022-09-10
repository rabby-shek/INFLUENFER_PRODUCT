<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Infulencer Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4deb8dd6fa.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
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
         <a href="./index.php">home</a>
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
      <section class="banner">
            <div class="top-info">
                <h1 class="info-head">Start your Journey as Influencer</h1>
                <p class="info-para">Hey there! are you interested in being an influencer? To be an influencer what
                    thing will motivate you? Of course a high-quality camera. We are going to bring a camera that will
                    take extraordinary pictures and it will be a lightweight device so you can carry it anyplace you
                    like. Be the first owner....
    
                </p>
                <a class="pre-button" href="./prebook.php">Prebook Now</a>
            </div>
            <div class="top-img">
                <img src="./images/main-camera.png" alt="camera">
            </div>
            
    </section>
    <hr>
    <div class="container">
                  <!--product row 1 start here -->
      
                  <div class="first_row">
<?php
      $json_data = file_get_contents("products_row_1.json");
      $products = json_decode($json_data, true);

      if(count($products) != 0){
        foreach ($products as $product) {
           ?>
           
             <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height:245px;" src="<?php echo $product['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']; ?></h5>
                  <h3><?php echo $product['price']; ?></h3>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span><?php echo $product['rate']; ?></span>
                </div>
                  <p class="card-text"><?php echo $product['description']; ?></p>
                  <a href="<?php echo $product['path']; ?>" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
           <?php
        }
     }
  ?>
  </div>
              <!--product row 1 ends here -->
      
              <!--2nd row start here-->
              <div class="second_row">
<?php
      $json_data = file_get_contents("products_row_2.json");
      $products = json_decode($json_data, true);

      if(count($products) != 0){
        foreach ($products as $product) {
           ?>
           
             <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height:245px;" src="<?php echo $product['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']; ?></h5>
                  <h3><?php echo $product['price']; ?></h3>
                  <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                    <span><?php echo $product['rate']; ?></span>
                </div>
                  <p class="card-text"><?php echo $product['description']; ?></p>
                  <a href="<?php echo $product['path']; ?>" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
           <?php
        }
     }
  ?>
  </div>
      
      
              <!--2nd row ends here-->
      
      <!--3rd row start here-->
      <div class="third_row">
<?php
      $json_data = file_get_contents("products_row_3.json");
      $products = json_decode($json_data, true);

      if(count($products) != 0){
        foreach ($products as $product) {
           ?>
           
             <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height:245px;" src="<?php echo $product['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']; ?></h5>
                  <h3><?php echo $product['price']; ?></h3>
                  <div class="rating">
                  <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    <span><?php echo $product['rate']; ?></span>
                </div>
                  <p class="card-text"><?php echo $product['description']; ?></p>
                  <a href="<?php echo $product['path']; ?>" class="btn btn-primary" style="margin-bottom: 0px;">Buy Now</a>
                </div>
              </div>
           <?php
        }
     }
  ?>
  </div>

      <!--4th row start here-->
      <div class="third_row">
<?php
      $json_data = file_get_contents("products_row_4.json");
      $products = json_decode($json_data, true);

      if(count($products) != 0){
        foreach ($products as $product) {
           ?>
           
             <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height:245px;"  src="<?php echo $product['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']; ?></h5>
                  <h3><?php echo $product['price']; ?></h3>
                  <div class="rating">
                  <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    <span><?php echo $product['rate']; ?></span>
                </div>
                  <p class="card-text"><?php echo $product['description']; ?></p>
                  <a href="<?php echo $product['path']; ?>" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
           <?php
        }
     }
  ?>
  </div>
      <!--4th row ends here-->

      <!--5th row start here-->
      <div class="third_row">
<?php
      $json_data = file_get_contents("products_row_5.json");
      $products = json_decode($json_data, true);

      if(count($products) != 0){
        foreach ($products as $product) {
           ?>
           
             <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height:245px;" src="<?php echo $product['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']; ?></h5>
                  <h3><?php echo $product['price']; ?></h3>
                  <div class="rating">
                  <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    <span><?php echo $product['rate']; ?></span>
                </div>
                  <p class="card-text"><?php echo $product['description']; ?></p>
                  <a href="<?php echo $product['path']; ?>" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
           <?php
        }
     }
  ?>
  </div>
      <!--5th row ends here-->

    </div>

               

                 
      

    

  
        
        
         

       
         
      
      
  </section>

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
    <script src="back_to_top_button.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>