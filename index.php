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
                <a class="pre-button" href="./ourProduct.php">Our Products</a>
            </div>
            <div class="top-img">
                <img src="./images/main-camera.png" alt="camera">
            </div>
            
    </section>
    <hr>
    <div class="container">
            <!--product row 1 start here -->
      
            <div class="first_row">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/action.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Action Camera</h5>
                  <h3>$599.00</h3>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>5.0</span>
                </div>
                  <p class="card-text">5K Video, Waterproof, HyperSmooth 3.0, Live Streaming, Webcam, TimeWarp 3.0, Front Display +
                    Rear Touch Screen,
                    20MP Photo with SuperPhoto...</p>
                  <a href="actioncameradetails.php" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
              
           
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/airpod.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Earbuds</h5>
                      <h3>$299.00</h3>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.5</span>
                            </div>
                      <p class="card-text">True Wireless Noise Cancelling, Compatible with Apple & Android, Built-in Microphone, IPX4
                        Rating...</p>
                      <a href="earbuds.php" class="btn btn-primary" style="margin-top:10px">Buy Now</a>
                    </div>
                  </div>
                  
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/camera.png"alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Vlogging Camera</h5>
                      <h3>$599.00</h3>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.5</span>
                            </div>
                      <p class="card-text">20.1 Megapixels, Shoot then share easily, Shoot 4K video like a Pro, Designed for creators to
                        love...</p>
                      <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                  </div>
      
            </div>
              <!--product row 1 ends here -->
      
              <!--2nd row start here-->
              <div class="second_row">
      
              
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/drone.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Drone</h5>
                  <h3>$1399.00</h3>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>5.0</span>
                </div>
                  <p class="card-text">Vision Sensor + GPS Precise Hover, 30-min Max. Flight Time, 3-Axis Gimbal 2.7K Camera, 4 km
                    HD Video Transmission...</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
      
              <div class="card" style="width: 18rem;">
                <img class="card-img-top"src="./images/tripod.png"  alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Flex Tripod</h5>
                  <h3>$90.00</h3>
                  <div class="rating">
                    <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                    <span>4.0</span>
                </div>
                  <p class="card-text">Great Quality Material, Lightweight and Portable, Perfect
                    For Events and Sports Activity...</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
      
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/lights.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Light Setup</h5>
                  <h3>$350.00</h3>
                  <div class="rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <span>4.5</span>
                  </div>
                  <p class="card-text">Best for YouTube Home Studio setup, Best Suitable for Continuous Light Source...</p>
                  <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
            </div>
      
      
              <!--2nd row ends here-->
      
      <!--3rd row start here-->
      <div class="third_row">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./images/mic.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Microphone</h5>
            <h3>$180.00</h3>
              <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span>4.0</span>
              </div>
            <p class="card-text">smooth, natural sound and low noise, Custom shock mount, Switchable 80 Hz high-pass filter...</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./images/setup.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Photoshoot Set</h5>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>4.5</span>
          </div>
            <p class="card-text">Background Support System, 4 x 85W 5500K Bulbs, Umbrellas Softbox Lighting Kit...</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./images/single-light.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Green Screen</h5>
            <h3>$99.00</h3>
              <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span>5.0</span>
              </div>
            <p class="card-text">Soft Pure GreenScreen Sheet Virtual Background, Cotton Cloth Fabric Curtain...</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
      <!--3rd row ends here-->

    </div>

               

                 
      

    

  
        
        
         

       
         
      
      <div class="see-more">
          <a href="./seemore.php">See More</a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>