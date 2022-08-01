<?php

require_once("config.php");
require_once("functions.php");
if(checkEmail($_POST["email"])!==false){
    echo"Invalid Email";
    exit();
}
if(uidExists($conn,$_POST["email"])){
    echo"User Exists";
    exit();
}
createUser($conn,$_POST["fullname"],$_POST["email"],$_POST["office"],$_POST["position"],$_POST["password"]);
?>