<?php
require_once("config.php");
require_once("functions.php");
createGallery($conn,$_POST["title"],$_POST['description'],$_POST["date"],$_FILES["galleryfiles"]);






