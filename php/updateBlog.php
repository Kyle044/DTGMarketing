<?php
require_once("config.php");
require_once("functions.php");
updateBlog($conn,$_POST["title"],$_POST["description"],$_POST['author'],$_POST['date'],$_FILES["file"],$_POST["id"]);

