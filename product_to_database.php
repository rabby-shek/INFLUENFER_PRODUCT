<?php
$productname = filter_input(INPUT_POST, 'productname');
$price = filter_input(INPUT_POST, 'price');
$quantity = filter_input(INPUT_POST, 'quantity');
if(!empty($productname)){


if (!empty($price)){
if (!empty($quantity)){

    
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "products_information";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
   

 


 


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO details (productname,price, quantity)
values ('$productname','$price','$quantity')";

//var_dump($sql);   die(); 
 



if ($conn->query($sql)){
    header ("Location: index.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

}
else{
echo "quantity should not be empty";
die();
}
}
else{
echo "price should not be empty";
die();
}
}
else{
    echo " productname should not be empty";
}
?>