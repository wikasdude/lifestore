<?php

	require 'includes/Common.php';
	if(!isset($_SESSION['email']))
{
	header("Location:login.php");
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
.container	.row3{
		margin-bottom: 60px;
	}
</style>
</head>

<body>
	<body>
  <div class="container"> 
 
 <?php
include 'includes/header.php';
include 'includes/Check-if-added.php';
 ?>
<div class="container">
<div class="jumbotron">
	<h1>Welcome to our Lifestyle Store!</h1>
	<p>
		We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place
	</p>
	 
</div>
</div>
<div class="container">  
<div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="cart.html">
        <img src="image/1.jpg" alt="cmaera" style="width:100%">
        <div class="caption">
          <h3>Cannon EOS</h3>
          <p>price 36000 </p>
          <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
         </div>
      </a>
    </div>
  </div>
   <div class="col-md-3">
    <div class="thumbnail">
      <a href="/image/lights.jpg">
        <img src="image/2.jpg" alt="cmaera" style="width:100%">
        <div class="caption">
          <h3>nikon DSLR</h3>
          <p>price 40000 </p>
                 <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
         </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="image/3.jpg" alt="Nicon" style="width:100%">
        <div class="caption">
        	<h3>Sony DSLRx</h3>
          <p>price 45000 </p>
            <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>

          
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="image/4.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
        	 <h3>Olympus DSLR</h3>
          <p>price 50000 .</p>
          <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
         
              </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/image/lights.jpg">
        <img src="image/5.jpg" alt="cmaera" style="width:100%">
        <div class="caption">
          <h3>titan model 301 </h3>
          <p>price 13000 </p>
          <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
        </div>
      </a>
    </div>
  </div>
   <div class="col-md-3">
    <div class="thumbnail">
      <a href="/image/lights.jpg">
        <img src="image/6.jpg" alt="cmaera" style="width:100%">
        <div class="caption">
          <h3>Titan model #201</h3>
          <p>price 3000 </p>
          <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
          
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="image/7.jpg" alt="Nicon" style="width:100%">
        <div class="caption">
        	<h3>HMT milan</h3>
          <p>price 8000</p>
          <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
           </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="image/8.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
        	 <h3>Faber Luba</h3>
          <p>price 18000 .</p>
                   <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>

         
        </div>
      </a>
    </div>

  </div>
</div>
<!-- row  2 end -->
<!-- row  3 start -->
<div class="row" class="row3">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/image/lights.jpg">
        <img src="image/9.jpg" alt="cmaera" style="width:100%">
        <div class="caption">
          <h3>H&W</h3>
          <p>price : 800 </p>
                   <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
           </div>
      </a>
    </div>
  </div>
   <div class="col-md-3">
    <div class="thumbnail">
      <a href="/image/lights.jpg">
        <img src="image/10.jpg" alt="cmaera" style="width:100%">
        <div class="caption">
          <h3>Luis Phil</h3>
          <p>price :1000 </p>
                   <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
           </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="image/11.jpg" alt="Nicon" style="width:100%">
        <div class="caption">
        	<h3>John Zok</h3>
          <p>price 13000 </p>
                   <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
      </div>
     </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="image/12.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
        	 <h3>Jhalsani</h3>
          <p>price 1300 .</p>
                   <?php
              if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added
//to cart or not.
 if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=
//0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 }
  else {
 ?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
         
    </div>
      </a>
    </div>
  </div>
</div>
</div> 
  
<footer  class="footer ">
<center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000</center>
  
</footer>


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