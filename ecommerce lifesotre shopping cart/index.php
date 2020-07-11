 
<?php 
require 'includes/Common.php';
  
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
else{
  
}
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
<style type="text/css">
footer{
bottom: 0;
position: fixed;
background-color: black;	
}
#banner_image
{
	margin-top: 100px;
	padding-top: 75px;
 padding-bottom: 50px;
  text-align: center;
  height: 160px;
 color: #f8f8f8;
  background: url(image/intro-bg_1.jpg) no-repeat center center;
  background-size: cover;
}
 #banner_image .invisibleLink {
    display: block;
    left: 55px; top: 55px;
    position: absolute;
    height: 55px width: 55px;
}
#banner_content
{
	position: relative; padding-top: 6%;
 padding-bottom: 6%;
  margin-top: 12%;
  margin-bottom: 12%;
  background-color: rgba(0, 0, 0, 0.7);
  max-width: 660px;

}
</style>
</head>
<body>
  <div class="container"> 

<?php
 include 'includes/header.php';

?>
  <div id="banner_image">
  	<a href="prducts.html" class="invisibleLink">  </a>
  	 <div class= “container”>
  	 	<div id="banner_content">
  	 		<a href="products.php" class ="btn btn-danger
btn-lg active">shop now</a>
  	 	</div>
  	 </div>
  </div>
 <?php
include 'includes/footer.php';
?>
</div>
  
</body>
</html>