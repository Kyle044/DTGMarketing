<?php
$serverName="localhost";
$dBUsername="kyle";
$dBPassword="kyle123";
$dbName="dtgmarket";
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dbName);
if (!$conn) {
    die("Connection Failed : " .mysqli_connect_error());
}







?>