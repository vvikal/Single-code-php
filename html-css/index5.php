<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Website 5</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left" style="text-align: center;">Website 5</h2>
                    </div>
                    <?php
                   $conn = mysqli_connect("localhost", "root", "", "estate4");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM property";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    ?>
                      <table class='table table-bordered table-striped'>
                      
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
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?><?php
                    echo "<tr><td>" . "<img height=200px width=200px src=\"images/" . $row['image'] .  " \"  />". "</td><td>" . $row["title"] . "</td><td>"
. $row["Location"]. "</td><td>" . $row["Seller"] . "</td><td>" . $row["Area"] . "</td><td>" . $row["Garages"] . "</td><td>" . $row["Bedrooms"] . "</td><td>" . $row["Bathrooms"] . "</td><td>" . $row["Price"] . "</td></tr>";
?>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>