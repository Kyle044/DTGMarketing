<?php
require_once("config.php");
require_once("functions.php");
updateUser($conn, $_POST["fullname"], $_POST["email"], $_POST["office"], $_POST["position"], $_POST["password"], $_POST["id"]);
