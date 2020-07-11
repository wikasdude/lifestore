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
 
 
 <div class="panel panel-primary">
   

    <div class="panel-body"> 
    
    <form action="setting_script.php" method="post"> 
  <div class="form-group">
     <label for="exampleFormControlInput1">Change Password </label>
    <input type="password" name="oldpass" class="form-control" id="exampleFormControlInput1" placeholder="old password">
  </div>
   <div class="form-group">
    
    <input type="password" class="form-control" name="newpass" id="exampleFormControlInput1" placeholder="new password">
  </div>
   <div class="form-group">
  
    <input type="password" class="form-control" name="repass" id="exampleFormControlInput1" placeholder=" Re type new password">
  </div>
    
   
 <button type="submit" class="btn btn-primary">change</button>

   
   
</form>

    
 


</div>
</div>
 
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