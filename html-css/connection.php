

<?php  
$link = mysqli_connect('localhost','root','','estate');  

$email=$_POST["email"];
$Query = "insert into buyer_info values( '$email')";
if (mysqli_multi_query($link, $Query)) {
 echo "<h1> Value entered SuccessFully</h1> ";
} else {
 echo "Error entering value: " ;
}

?>

<?php

$conn = mysqli_connect('localhost','root','','estate');

$Image=$_FILES["img"];
$Title=$_POST["property-title"];
$Location=$_POST["Location"];
$Seller=$_POST["seller"];
$Area=$_POST["square-feet"];
$Garage=$_POST["Garage"];
$Bedrooms=$_POST["bedrooms"];
$Bathrooms=$_POST["bathrooms"];
$Price=$_POST["Price"];

$Query = "insert into property values ('$Image,'$Title','$Location','$Seller','$Area','$Garage','$Bedrooms','$Bathrooms','$Price')";

if (mysqli_multi_query($conn, $Query)) {
 echo "<h1> Value entered SuccessFully</h1> ";
} else {
 echo "Error entering value: " ;
}
?> 

