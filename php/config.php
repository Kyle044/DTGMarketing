<?php
// $serverName="localhost";
// $dBUsername="root";
// $dBPassword="";
// $dbName="dtgmarket";
// $conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dbName);
// if (!$conn) {
//     die("Connection Failed : " .mysqli_connect_error());
// }


//Local
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


//production

// $servername = "localhost";
// $username = "dtgadmin";
// $password = "M@st3radm1n";
// $dbname = "dtgmarket";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
?>