<?php
require_once("config.php");
require_once("functions.php");



createCareer($conn,$_POST["title"],$_POST["position"],$_POST['description'],$_FILES["file"],$_POST["qualification"],$_POST["responsibility"]);




