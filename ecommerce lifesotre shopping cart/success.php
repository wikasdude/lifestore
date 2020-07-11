<?php
  include 'includes/Common.php';
  if(!isset($_SESSION['email']))
{
	header("Location:index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>product page</title>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- 
<link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 -->
<link  href="index.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
  h3
  {
    margin-top: 70px;
  }
</style>
</head>

<body>
	<body>
  <div class="container"> 
  <?php
   include 'includes/header.php';

  ?>
   <?php 
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$item_id=$_GET['id'];

$sql = "UPDATE user_items SET status='confirmed' WHERE item_id= $item_id  ";

if ($conn->query($sql) === TRUE) {
 // echo "<h2>Record updated successfully</h2>";

  echo "<h3> Your order is confirmed. Thank you for shopping
with us. <a href='products.php'>Click here</a> to purchase any other item.
</h3>";
}
 else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



   ?>
 
 
 
<!-- row  2 end -->
<!-- row  3 start -->

 
  
<footer  class="footer ">
<center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000</center>
  
</footer>
</div>
</body>
</html>
