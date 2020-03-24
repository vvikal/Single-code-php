<?php
 if(in_array('A', $_POST['website']))
{
	$conn = mysqli_connect('localhost','root','','estate');

		$Title=$_POST["property-title"];
		$Location=$_POST["location"];
		$Seller=$_POST["seller"];
		$Area=$_POST["square-feet"];
		$Garage=$_POST["Garage"];
		$Bedrooms=$_POST["bedrooms"];
		$Bathrooms=$_POST["bathrooms"];
		$Price=$_POST["Price"];
	     
	     $pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];
	    $tname = $_FILES["myfile"]["tmp_name"];
	$uploads_dir = 'C:\xampp\htdocs\rehomes\rehomes\images';
	    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


		$Query = "insert into property values ('$pname','$Title','$Location','$Seller','$Area','$Garage','$Bedrooms','$Bathrooms','$Price')";
		if (mysqli_multi_query($conn, $Query)) {
		 echo "<h1> Value entered SuccessFully in website 1</h1> ";
		 echo " <a href='index.php'>Visit website </a>";
		} else {
		 echo "Error entering value: " ;
		}
}  if(in_array('B', $_POST['website']))
{
	$conn = mysqli_connect('localhost','root','','estate1');

		$Title=$_POST["property-title"];
		$Location=$_POST["location"];
		$Seller=$_POST["seller"];
		$Area=$_POST["square-feet"];
		$Garage=$_POST["Garage"];
		$Bedrooms=$_POST["bedrooms"];
		$Bathrooms=$_POST["bathrooms"];
		$Price=$_POST["Price"];
	     
	     $pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];
	    $tname = $_FILES["myfile"]["tmp_name"];
	$uploads_dir = 'C:\xampp\htdocs\rehomes\rehomes\images';
	    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


		$Query = "insert into property values ('$pname','$Title','$Location','$Seller','$Area','$Garage','$Bedrooms','$Bathrooms','$Price')";
		if (mysqli_multi_query($conn, $Query)) {
		 echo "<h1> Value entered SuccessFully in website 2</h1> ";
		 echo " <a href='index2.php'>Visit website </a>";
		} else {
		 echo "Error entering value: " ;
		}	
}     if(in_array('C', $_POST['website']))
{
		$conn = mysqli_connect('localhost','root','','estate2');

		$Title=$_POST["property-title"];
		$Location=$_POST["location"];
		$Seller=$_POST["seller"];
		$Area=$_POST["square-feet"];
		$Garage=$_POST["Garage"];
		$Bedrooms=$_POST["bedrooms"];
		$Bathrooms=$_POST["bathrooms"];
		$Price=$_POST["Price"];
	     
	     $pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];
	    $tname = $_FILES["myfile"]["tmp_name"];
	$uploads_dir = 'C:\xampp\htdocs\rehomes\rehomes\images';
	    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


		$Query = "insert into property values ('$pname','$Title','$Location','$Seller','$Area','$Garage','$Bedrooms','$Bathrooms','$Price')";
		if (mysqli_multi_query($conn, $Query)) {
		 echo "<h1> Value entered SuccessFully in website 3</h1> ";
		 echo " <a href='index3.php'>Visit website </a>";
		} else {
		 echo "Error entering value: " ;
		}
}    if(in_array('D', $_POST['website']))
{
		$conn = mysqli_connect('localhost','root','','estate3');

		$Title=$_POST["property-title"];
		$Location=$_POST["location"];
		$Seller=$_POST["seller"];
		$Area=$_POST["square-feet"];
		$Garage=$_POST["Garage"];
		$Bedrooms=$_POST["bedrooms"];
		$Bathrooms=$_POST["bathrooms"];
		$Price=$_POST["Price"];
	     
	     $pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];
	    $tname = $_FILES["myfile"]["tmp_name"];
	$uploads_dir = 'C:\xampp\htdocs\rehomes\rehomes\images';
	    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


		$Query = "insert into property values ('$pname','$Title','$Location','$Seller','$Area','$Garage','$Bedrooms','$Bathrooms','$Price')";
		if (mysqli_multi_query($conn, $Query)) {
		 echo "<h1> Value entered SuccessFully in website 4</h1> ";
		 echo " <a href='index4.php'>Visit website </a>";
		} else {
		 echo "Error entering value: " ;
		}
}    if(in_array('E', $_POST['website']))
{
		$conn = mysqli_connect('localhost','root','','estate4');

		$Title=$_POST["property-title"];
		$Location=$_POST["location"];
		$Seller=$_POST["seller"];
		$Area=$_POST["square-feet"];
		$Garage=$_POST["Garage"];
		$Bedrooms=$_POST["bedrooms"];
		$Bathrooms=$_POST["bathrooms"];
		$Price=$_POST["Price"];
	     
	     $pname = rand(1000,10000)."-".$_FILES["myfile"]["name"];
	    $tname = $_FILES["myfile"]["tmp_name"];
	$uploads_dir = 'C:\xampp\htdocs\rehomes\rehomes\images';
	    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


		$Query = "insert into property values ('$pname','$Title','$Location','$Seller','$Area','$Garage','$Bedrooms','$Bathrooms','$Price')";
		if (mysqli_multi_query($conn, $Query)) {
		 echo "<h1> Value entered SuccessFully in website 5</h1> ";
		 echo " <a href='index5.php'>Visit website </a>";
		} else {
		 echo "Error entering value: " ;
		}
} else {
	echo "Buzz off";
}
?>

