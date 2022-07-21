<?php
require_once("config.php");
require_once("functions.php");
createService($conn,$_POST['title'],$_POST['description'],$_POST['supervisor'],$_FILES['file']);