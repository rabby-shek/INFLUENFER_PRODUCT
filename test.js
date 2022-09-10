fetch("products.json")
.then(function(response){
   return response.json();
})
.then(function(products){
   let placeholder = document.querySelector("#data-output");
   let out = "";
   for(let product of products){
      out += `
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=${product.image} alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">${product.name}</h5>
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
      `;
   }
 
   placeholder.innerHTML = out;
   console.log(placeholder);
});
