<?php
include 'includes/Common.php';
$user_id=$_SESSION['user_id'];
$id=$_GET['id'];
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

// sql to delete a record
$sql = "DELETE FROM user_items WHERE user_id= $user_id  and  item_id= $id ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location:cart.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();



?>