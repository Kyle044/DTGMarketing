<?php
require_once("config.php");
require_once("functions.php");
createService($conn,$_POST['title'],$_POST['description'],$_POST['detail_desc'],
$_POST['benefits'],$_POST['approach'],$_FILES['file']);