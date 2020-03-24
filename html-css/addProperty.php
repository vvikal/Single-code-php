<!DOCTYPE html>
<html>
<body style="text-align: center;">

<form method="POST" action="Property.php" action="index.php" enctype="multipart/form-data">

	<h1 style="text-align: center;"> Add property details </h1><hr>
Select Image : <input type="file" id="img" name="myfile" accept="image/*" style="margin-left: 30px;"><br> <br> 
Property-title : <input type="text" name="property-title" style="margin-left: 30px;"><br><br> 
Location : <input type="text" name="location" style="margin-left: 30px;"><br><br> 
Seller-name : <input type="text" name="seller" style="margin-left: 30px;"><br> <br> 
Area in Sq.ft : <input type="text" name="square-feet" style="margin-left: 30px;"><br><br> 
Number of Garages : <input type="text" name="Garage" style="margin-left: 30px;"><br><br> 
Number of Bedrooms : <input type="text" name="bedrooms" style="margin-left: 30px;"><br><br> 
Bathrooms : <input type="text" name="bathrooms" style="margin-left: 30px;"><br><br> 
Price of flat : <input type="number" name="Price" style="margin-left: 30px;"><br><br> 

<h3> Enter website you want this property to enter </h3><br> 

<input type="checkbox" id="website" name="website[]" value="A" />website 1 
<input type="checkbox" id="website" name="website[]" value="B" />Website 2<br /><br> 
<input type="checkbox" id="website" name="website[]" value="C" />Website 3 
<input type="checkbox" id="website" name="website[]" value="D" />Website 4<br /><br>
<input type="checkbox" id="website" name="website[]" value="E" />Website 5<br /><br> 

<input type="submit" name="Submit data">


</form>
</body>
</html>  





