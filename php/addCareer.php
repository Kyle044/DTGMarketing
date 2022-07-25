<?php
require_once("config.php");
require_once("functions.php");
createCareer($conn,$_POST["title"],$_POST["position"],$_POST['supervisor'],$_POST['department'],$_POST['description'],$_FILES["file"]);




