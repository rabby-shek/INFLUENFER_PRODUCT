<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Drone Display</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dronecamera.css">
    <script src="https://kit.fontawesome.com/4deb8dd6fa.js" crossorigin="anonymous"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

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

   <div class="container">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/Drone Display (1).jpg" style="height:300px;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/Drone Display (2).jpg"  style="height:300px;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/Drone Display (3).jpg"  style="height:300px;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                Drone Display
                    <small>Product by <a href="javascript:void(0);">Adeline</a></small>
                    <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.5</span>
                </div>
                </h2>
                <hr />
                <h3 class="price-container">
                $700.00
                    <small>*includes tax</small>
                </h3>
                <form method="post" action="product_to_database.php">
                <div style="margin-top:10px;">
                    <label for="productname">Enter Product Name</label>
                    <input class="form-control" type="text" id="productname" name ="productname">
                </div>
                <div style="margin-top:10px;">
                    <label for="quantity">Enter Product Price</label>
                    <input class="form-control" type="number" id="inputProductPrice" name ="price" oninput="myFunction()">
                </div>
                <div style="margin-top:10px;">
                    <label for="quantity">Quantity</label>
                    <input class="form-control" type="number" id="quantity" name ="quantity" oninput="myFunction()">
                </div>
                <div>
                    <h2>Total Price : <span id="totalPrice" class="form-control" name ="total">0$</span></h2>
                

                </div>
                <a href="actioncameradetails.php"><input class="btn btn-success btn-lg" type="submit" value="submit"></a>
                </form>
             
                <div class="certified">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">Delivery time<span>7 Working Days</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Certified<span>Quality Assured</span></a>
                        </li>
                    </ul>
                </div>
                <hr />
                <div class="description description-tabs">
                    <ul id="myTab" class="nav nav-pills">
                        <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">More About Product....</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="more-information">
                            <br />
                            <strong>About Product</strong>
                            <p>
                            The HSGN aviator hood for drone pilots mounts to your 7" FPV monitor for improved outdoor ...
                            </p>
                        </div>
                       
                        <div class="tab-pane fade" id="reviews">
                            <br />
                            <form method="post" class="well padding-bottom-10" onsubmit="return false;">
                                <textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
                                <div class="margin-top-10">
                                    <button type="submit" class="btn btn-sm btn-primary pull-right">
                                        Submit Review
                                    </button>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="btn-group pull-right">
                            <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i><a href="contact.php" style="margin-left:5px;">Contact Seller</a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
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
    <script src="calculation.js"></script>
    <script src="back_to_top_button.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>