<?php
$serverName="localhost";
$dBUsername="root";
$dBPassword="";
$dbName="dtgmarket";
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dbName);
if (!$conn) {
    die("Connection Failed : " .mysqli_connect_error());
}







?>