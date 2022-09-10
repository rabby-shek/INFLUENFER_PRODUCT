




<!doctype html>
<html lang="en">
  <head>
    <title>json data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="actioncameradetails.css">
    <link rel="stylesheet" href="style.css">
  
    <script src="https://kit.fontawesome.com/4deb8dd6fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h2>json data</h2>


    <?php
      $json_data = file_get_contents("products_row_1.json");
      $products = json_decode($json_data, true);

  
        foreach ($products as $product) {
           ?>
           
             <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $product['image']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product[2]->name; ?></h5>
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
     
  ?>
           
          

   
  
  

      
    <!-- Optional JavaScript -->
    <script src="test.js"></script>
    <script src="back_to_top_button.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>