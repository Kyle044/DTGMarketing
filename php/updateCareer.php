<?php
require_once("config.php");
require_once("functions.php");
updateCareer($conn,$_POST["title"],$_POST["position"],$_POST['supervisor'],$_POST['department'],$_POST['description'],$_FILES["file"],$_POST["id"]);


// print_r($_POST["id"]);










