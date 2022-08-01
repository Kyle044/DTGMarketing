<?php

require_once("functions.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtgmarket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
createService($conn,$_POST['title'],$_POST['description'],$_POST['detail_desc'],
$_POST['benefits'],$_POST['approach'],$_FILES['file']);