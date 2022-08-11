<?php
require_once("config.php");
require_once("functions.php");
updateCareer($conn, $_POST["title"], $_POST["position"], $_POST['description'], $_FILES["file"], $_POST["id"], $_POST["qualification"], $_POST["responsibility"]);


// print_r($_POST["id"]);
