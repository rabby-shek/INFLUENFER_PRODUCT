
    function myFunction() {
        var sum = 0;
        var price = document.getElementById("inputProductPrice").value;
        var quantity = document.getElementById("quantity").value;
        var total = price * quantity;
        document.getElementById("totalPrice").innerHTML = total + "$";
         
    }
