<?php 
 require 'includes/Common.php';
 
if (!isset($_SESSION['email'])) {
 header("location: index.php");
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
  .table
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
 
<div class="container">  
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item no</th>
      <th scope="col">Item Name</th>
      <th scope="col">price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     
     
    
     <?php 
  $user_id= $_SESSION['user_id'];
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

$sql = "SELECT items.id, items.name ,items.price FROM items INNER JOIN user_items ON user_items.item_id = items.id where user_items.user_id= $user_id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  
  while($row = $result->fetch_assoc()) {
    
  //$sum =" "+$row['price'];
     
    echo "<tr><td>id: " . $row["id"]."</td>  - <td>Name: " . $row["name"]. "</td> <td>price : " . $row["price"]. "</td><td><a href='cart-remove.php?id={$row['id']}'   class='btn btn-primary'> Remove</a><a href='success.php?id={$row['id']}' class='btn btn-primary'> corfirm order</a></td> </tr></br>";
   // $id+=","+row['id'];

  }
 // echo $sum;
 // echo $id;
  //echo "";
}
else{
  echo "<tr><td><h1>Add items to the cart first!<h1></td></tr>";
}
$conn->close();
 

  
    ?>
   
    
      
  </tbody>
</table>
 
<!-- row  2 end -->
<!-- row  3 start -->

</div> 
  
<footer  class="footer ">
<center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000</center>
  
</footer>
</div>
</body>
</html>