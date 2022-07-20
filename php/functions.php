<?php






function checkEmail($email){
    $result=false;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;

}




function uidExists($conn,$email){
$sql = "SELECT * FROM users WHERE usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_assoc($resultData)){
return $row;
}else{
    return false;
}
mysqli_stmt_close($stmt);
}


function createUser($conn,$fullname,$email,$office,$position,$password){


$sql = "INSERT INTO users (usersName,usersPosition,usersOffice,usersEmail,usersPassword) VALUES (?,?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"sssss",$fullname,$position,$office,$email,$hashedPwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
echo("User Added Successfully!");
}

function loginUser($conn,$email,$password){


$sql = "SELECT * FROM users WHERE usersEmail =?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_assoc($resultData)){

    if(password_verify($password,$row["usersPassword"])){
       
        session_start();
        $_SESSION["usersId"] = $row["usersId"];
        $_SESSION["usersName"] = $row["usersName"];
        $_SESSION["usersPosition"] = $row["usersPosition"];
        $_SESSION["usersEmail"] = $row["usersEmail"];
        echo"Login Succesfully";
        exit();
    }
    else{
        echo "Invalid Password";
    }



}else{
    echo "Invalid Email";
}
mysqli_stmt_close($stmt);


}











function getUsers($conn){
    $sql = "SELECT * FROM users ;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($resultData)>0){
    while($row = mysqli_fetch_array($resultData)){
        $data = array("usersId" => $row["usersId"],
        "usersName" => $row["usersName"],
        "usersPosition" => $row["usersPosition"],
        "usersOffice" => $row["usersOffice"],
        "usersEmail" => $row["usersEmail"]);
        $users[]=$data;
    }
return $users;
}else{
    return false;
}


mysqli_stmt_close($stmt);

}