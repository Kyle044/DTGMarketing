<?php
require_once("config.php");
require_once("functions.php");
updateUser($conn,$_POST["fullname"],$_POST["position"],$_POST["office"],$_POST["email"],$_POST["password"],$_POST["id"]);







