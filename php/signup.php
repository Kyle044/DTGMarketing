<?php

require_once("config.php");
require_once("functions.php");

createUser($conn,$_POST["fullname"],$_POST["email"],$_POST["office"],$_POST["position"],$_POST["password"]);
