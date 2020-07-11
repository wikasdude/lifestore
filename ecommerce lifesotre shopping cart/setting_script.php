<?php
  
  include 'includes/Common.php';
  $oldpass=$_POST['oldpass'];
  $newpass=$_POST['newpass'];
  $repass=$_POST['repass'];

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

$sql = "SELECT password FROM users where password = '$oldpass'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    // password matches then update query
	
  if($row['password']==$oldpass){
$sql = "UPDATE users SET password= '$newpass'  where password=".$row['password']." ";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Record updated successfully</h2>";
} else {
	echo "error";
  
}

    
 }
}
}
  
  

  
 else {
  echo "0 results";
   header("Location:setting.php");
}
$conn->close();

 


?>