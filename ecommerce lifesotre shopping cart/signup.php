<?php
include 'includes/Common.php';
// if(isset($_SESSION['email']))
// {
//    header("Location:products.php");
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- 
<link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 -->
<link  href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="container"> 
 <?php

include 'includes/header.php';
 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">Sign Up</div>
    <div class="panel-body"> 
    <p class="text-warning"> 
    	 

    </p>
    <form method="post" action="Signup_script.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">name </label>
    <input type="name"  name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Email </label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">password </label>
    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">contact </label>
    <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" placeholder="contact">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">city</label>
    <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="city">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">address</label>
    <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="city">
  </div>
 <button type="submit" class="btn btn-primary">submit</button>

   
   
</form>

    
<footer  class="footer ">
<center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000</center>
  
</footer>


</div>
</div>
 <!--
 <div 
 class="header">
        <div class="inner-header">
            <div class="logo"><a href="#">Lifestyle Store</a></div>
            <div class="header-link"><a href="signup.php">Sign Up</a> </div>
            <div class="header-link"><a href="login.php">Log In</a> </div>
        </div>
    </div>
-->
</body>
</html>