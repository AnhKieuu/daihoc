<?php
$servername = "ec2-23-21-229-200.compute-1.amazonaws.com";
$username = "fasoxdddbmjmuu";
$password = "829a1c6ab437a586dc620ffe279bd66f32d4f96acfc748493c174620c0cc7d47";
$dbname = "d85gveusb00cai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
