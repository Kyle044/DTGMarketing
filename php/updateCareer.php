<?php
require_once("config.php");
require_once("functions.php");
updateCareer($conn,$_POST["title"],$_POST["position"],$_POST['description'],$_FILES["file"],$_POST["id"],$_POST["Q1"],$_POST["Q2"],$_POST["Q3"],$_POST["Q4"],$_POST["Q5"],$_POST["R1"],$_POST["R2"],$_POST["R3"],$_POST["R4"],$_POST["R5"]);


// print_r($_POST["id"]);










