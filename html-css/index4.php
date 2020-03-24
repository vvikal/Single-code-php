<html>
<title>Website 4</title>
<body>
  <h1 style="text-align: center;"> WEBSITE 4 </h1>
<?php 
 
$conn = mysqli_connect("localhost", "root","","estate3"); 
$query = "SELECT * FROM Property";
 
 
echo '<table border="2px" cellspacing="2" cellpadding="2" width="1500px"> 
      <tr>
       <th>Image</th>
        <th>Property-title</th>
        <th>Location</th>
        <th>Seller</th>
        <th>Area</th>
        <th>Garages</th>
        <th>Bedrooms</th>
        <th>Bathrooms</th>
        <th>Price</th>
        </tr>';
 
                  $sql = "SELECT * FROM property";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
       echo "<tr><td>" . "<img height=200px width=200px src=\"images/" . $row['image'] .  " \"  />". "</td><td>" . $row["title"] . "</td><td>"
. $row["Location"]. "</td><td>" . $row["Seller"] . "</td><td>" . $row["Area"] . "</td><td>" . $row["Garages"] . "</td><td>" . $row["Bedrooms"] . "</td><td>" . $row["Bathrooms"] . "</td><td>" . $row["Price"] . "</td></tr>";
    }
    $result->free();
} 
?>
</body>
</html>