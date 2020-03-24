<!DOCTYPE html>
<html>
<head>
<title>Website 2</title>
<style>
table {
border-collapse: 1px;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
	<h1 style="text-align: center;"	> Website 2</h1>
<table>
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
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "estate2");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM property";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . "<img height=200px width=200px src=\"images/" . $row['image'] .  " \"  />". "</td><td>" . $row["title"] . "</td><td>"
. $row["Location"]. "</td><td>" . $row["Seller"] . "</td><td>" . $row["Area"] . "</td><td>" . $row["Garages"] . "</td><td>" . $row["Bedrooms"] . "</td><td>" . $row["Bathrooms"] . "</td><td>" . $row["Price"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>