<?php
require_once("config.php");
require_once("functions.php");
createBlog($conn,$_POST["title"],$_POST["description"],$_POST['author'],$_POST['date'],$_FILES["file"]);
// print_r($_POST);

