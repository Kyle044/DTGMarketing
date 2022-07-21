<?php



//USER FUNCTIONS
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
         echo '<tr>
         <td>'.$row["usersName"].'</td>
        <td>'.$row["usersPosition"].'</td>
          <td>'.$row["usersOffice"].'</td>
       <td>'.$row["usersEmail"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['usersId'].'" class="up upUser" >Update</a><a href="#" name ="'.$row['usersId'].'" class="del delUser" >Delete</a>
            </div>
            </td>
            </tr>';
        // $data = array("usersId" => $row["usersId"],
        // "usersName" => $row["usersName"],
        // "usersPosition" => $row["usersPosition"],
        // "usersOffice" => $row["usersOffice"],
        // "usersEmail" => $row["usersEmail"]);
        // $users[]=$data;
    }
// return $users;
}else{
    return false;
}


mysqli_stmt_close($stmt);

}

function updateUser($conn,$fullname,$email,$office,$position,$password,$id){
$sql = "UPDATE users SET usersName = ?, usersPosition=?, usersOffice=?,usersEmail=?,usersPassword=? WHERE usersId=?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"sssssi",$fullname,$position,$office,$email,$hashedPwd,$id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
echo("User Updated Successfully!");
}




function deleteUser($conn,$id){
$sql = "DELETE FROM `users` WHERE usersId=?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
echo("User Deleted Successfully!");
}





//SERVICE FUNCTIONS



function getService($conn){
$sql = "SELECT * FROM service ;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($resultData)>0){
    while($row = mysqli_fetch_array($resultData)){
         echo '<tr>
         <td>'.$row["id"].'</td>
        <td>'.$row["title"].'</td>
          <td>'.$row["description"].'</td>
       <td>'.$row["supervisor"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="up upService" >Update</a><a href="#" name ="'.$row['id'].'" class="del delService" >Delete</a>
            </div>
            </td>
            </tr>';
    }

}else{
    return false;
}
mysqli_stmt_close($stmt);

}




function createService($conn,$title,$description,$supervisor,$file){
$fileName = $file['name'];
$fileType = $file['type'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png');
if(in_array($fileActualExt,$allowed)){
if($fileError===0){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName,$fileDestination);
    $fk = getFileId($conn,$fileNameNew,$fileDestination,$fileSize);
    $sql = "INSERT INTO service (title,description,supervisor,file_fk) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ssss",$title,$description,$supervisor,$fk);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Service Was Successfully Added!";
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}

}

function deleteService($conn,$id){

    $sql = "SELECT * FROM service WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$id);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
    $fk = $row['file_fk'];
        if(deleteFile($conn,$fk)){
            $sql1 = "DELETE  FROM service WHERE id = ?;";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1,$sql1)){
                echo"SQL Statement Failed...";
                exit();
            }
            mysqli_stmt_bind_param($stmt1,"s",$id);
            mysqli_stmt_execute($stmt1);
            echo "Service Was Deleted Successfully!";
        }else{
            echo"There was an Error Deleting the service";
        }

    }else{
        return false;
    }
    mysqli_stmt_close($stmt);

}






function updateService($conn,$title,$description,$supervisor,$file,$id){
$sql1 = "SELECT * FROM service WHERE id = ?;";
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt1,"s",$id);
mysqli_stmt_execute($stmt1);
 $resultData = mysqli_stmt_get_result($stmt1);
if($row = mysqli_fetch_assoc($resultData)){
deleteFile($conn,$row['file_fk']);
$fileName = $file['name'];
$fileType = $file['type'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png');
if(in_array($fileActualExt,$allowed)){
if($fileError===0){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName,$fileDestination);
    $fk = getFileId($conn,$fileNameNew,$fileDestination,$fileSize);
    $sql = "UPDATE service SET title=?, description=?,supervisor=?,file_fk=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ssssi",$title,$description,$supervisor,$fk,$id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Service Was Successfully Updated!";
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}
   }else{

   }


}
























//Files Function


//Create a file and returns its id
function getFileId($conn,$name,$directory,$size){
$sql = "INSERT INTO files (name,directory,size) VALUES (?,?,?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt,"sss",$name,$directory,$size);
mysqli_stmt_execute($stmt);
$last_id = mysqli_insert_id($conn);
mysqli_stmt_close($stmt);
return $last_id;
}

//Will Delete the file from the directory and Delete the data in the database at the same time
//Will need the id of the file in file table
function deleteFile($conn,$id){
$sql = "SELECT * FROM files WHERE id = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt,"s",$id);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_assoc($resultData)){
$file_pointer = $row['directory'];
if (!unlink($file_pointer)) {
    echo ("$file_pointer cannot be deleted due to an error");
}
else {
$sql1 = "DELETE FROM files WHERE id =?";
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt1,"i",$id);
mysqli_stmt_execute($stmt1);
mysqli_stmt_close($stmt1);
  return true;
}
}else{
    return false;
}
mysqli_stmt_close($stmt);
}