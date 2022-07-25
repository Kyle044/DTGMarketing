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


// Career Functions


//GET
function getCareer($conn){
$sql = "SELECT * FROM career;";
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
         <td>'.$row["title"].'</td>
       <td>'.$row["position"].'</td>
        <td>'.$row["description"].'</td>
          <td>'.$row["supervisor"].'</td>
       <td>'.$row["department"].'</td>
       
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="up upCareer" >Update</a><a href="#" name ="'.$row['id'].'" class="del delCareer" >Delete</a>
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

//INSERT
function createCareer($conn,$title,$position,$supervisor,$department,$description,$file){
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
    $sql = "INSERT INTO career (title,position,supervisor,department,description,file_fk) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sssssi",$title,$position,$supervisor,$department,$description,$fk);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Career Was Successfully Added!";
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}



}


function updateCareer($conn,$title,$position,$supervisor,$department,$description,$file,$id){

$sql1 = "SELECT * FROM career WHERE id = ?;";
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt1,"s",$id);
mysqli_stmt_execute($stmt1);
 $resultData = mysqli_stmt_get_result($stmt1);
if($row = mysqli_fetch_assoc($resultData)){
    if(deleteFile($conn,$row['file_fk'])){
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
    $sql = "UPDATE career SET title=?, position=?,supervisor=?,department=?,description=?,file_fk=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ssssssi",$title,$position,$supervisor,$department,$description,$fk,$id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Career Was Successfully Updated!";
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}
    }
    else{
        echo"Error In Replacing File";
    }


   }else{
        echo "There is no Data in the DB!";
   }


}





function deleteCareer($conn,$id){

    $sql = "SELECT * FROM career WHERE id = ?;";
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
            $sql1 = "DELETE  FROM career WHERE id = ?;";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1,$sql1)){
                echo"SQL Statement Failed...";
                exit();
            }
            mysqli_stmt_bind_param($stmt1,"s",$id);
            mysqli_stmt_execute($stmt1);
            echo "Career Was Deleted Successfully!";
        }else{
            echo"There was an Error Deleting the Career";
        }

    }else{
        return false;
    }
    mysqli_stmt_close($stmt);

}



//Blog



//INSERT
function createBlog($conn,$title,$description,$author,$date,$file){
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
    $sql = "INSERT INTO blog (title,description,author,date_publish,file_fk) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ssssi",$title,$description,$author,$date,$fk);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Blog Was Successfully Added!";
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}



}





//VIEW 

function getBlog($conn){
    $sql = "SELECT * FROM blog;";
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
         <td>'.$row["title"].'</td>
        <td>'.$row["description"].'</td>
          <td>'.$row["author"].'</td>
       <td>'.$row["date_publish"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="up upBlog" >Update</a><a href="#" name ="'.$row['id'].'" class="del delBlog" >Delete</a>
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


//DELETE
function deleteBlog($conn,$id){

    $sql = "SELECT * FROM blog WHERE id = ?;";
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
            $sql1 = "DELETE  FROM blog WHERE id = ?;";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1,$sql1)){
                echo"SQL Statement Failed...";
                exit();
            }
            mysqli_stmt_bind_param($stmt1,"s",$id);
            mysqli_stmt_execute($stmt1);
            echo "Blog Was Deleted Successfully!";
        }else{
            echo"There was an Error Deleting the Blog";
        }

    }else{
        return false;
    }
    mysqli_stmt_close($stmt);

}


//UPDATE

function updateBlog($conn,$title,$description,$author,$date,$file,$id){
$sql1 = "SELECT * FROM blog WHERE id = ?;";                     //TO EDIT
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt1,"s",$id);
mysqli_stmt_execute($stmt1);
 $resultData = mysqli_stmt_get_result($stmt1);
if($row = mysqli_fetch_assoc($resultData)){
    if(deleteFile($conn,$row['file_fk'])){
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
    $sql = "UPDATE blog SET title=?, description=?,author=?,date_publish=?,file_fk=? WHERE id=?";//TO EDIT
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sssssi",$title,$description,$author,$date,$fk,$id);//TO EDIT
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Blog Was Successfully Updated!";  //TO EDIT
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}
    }
    else{
        echo"Error In Replacing File";
    }


   }else{
        echo "There is no Data in the DB!";
   }


}






//Articles


//INSERT
function createArticle($conn,$title,$description,$author,$date,$file){
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
    $sql = "INSERT INTO article (title,description,author,date_publish,file_fk) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ssssi",$title,$description,$author,$date,$fk);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Article Was Successfully Added!";
}
else{
    echo "There was an error uploading the image";
}
}else{
    echo "You cannot upload files of this type!";
}



}

function deleteArticle($conn,$id){

    $sql = "SELECT * FROM article WHERE id = ?;";
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
            $sql1 = "DELETE  FROM article WHERE id = ?;";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1,$sql1)){
                echo"SQL Statement Failed...";
                exit();
            }
            mysqli_stmt_bind_param($stmt1,"s",$id);
            mysqli_stmt_execute($stmt1);
            echo "Article Was Deleted Successfully!";
        }else{
            echo"There was an Error Deleting the Article";
        }

    }else{
        return false;
    }
    mysqli_stmt_close($stmt);

}
function getArticle($conn){
    $sql = "SELECT * FROM article;";
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
         <td>'.$row["title"].'</td>
        <td>'.$row["description"].'</td>
          <td>'.$row["author"].'</td>
       <td>'.$row["date_publish"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="up upArticle" >Update</a><a href="#" name ="'.$row['id'].'" class="del delArticle" >Delete</a>
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







function updateArticle($conn,$title,$description,$author,$date,$file,$id){
$sql1 = "SELECT * FROM article WHERE id = ?;";                     //TO EDIT
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt1,"s",$id);
mysqli_stmt_execute($stmt1);
 $resultData = mysqli_stmt_get_result($stmt1);
if($row = mysqli_fetch_assoc($resultData)){
    if(deleteFile($conn,$row['file_fk'])){
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
    $sql = "UPDATE article SET title=?, description=?,author=?,date_publish=?,file_fk=? WHERE id=?";//TO EDIT
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sssssi",$title,$description,$author,$date,$fk,$id);//TO EDIT
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo"Article Was Successfully Updated!";  //TO EDIT
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}
    }
    else{
        echo"Error In Replacing File";
    }


   }else{
        echo "There is no Data in the DB!";
   }


}

//Gallery
//INSERT
function createGallery($conn,$title,$description,$date,$file){
$sql1 = "INSERT INTO gallery (title,description,date) VALUES (?,?,?);";
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
    exit();
}
mysqli_stmt_bind_param($stmt1,"sss",$title,$description,$date);
mysqli_stmt_execute($stmt1);
$last_id = mysqli_insert_id($conn);
mysqli_stmt_close($stmt1);
$size = count($file['name']);
for ($x = 0; $x < $size; $x++) {
$fileName = $file['name'][$x];
$fileType = $file['type'][$x];
$fileTmpName = $file['tmp_name'][$x];
$fileSize = $file['size'][$x];
$fileError = $file['error'][$x];
$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png');
if(in_array($fileActualExt,$allowed)){
if($fileError===0){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName,$fileDestination);
    $sql = "INSERT INTO galleryPic (title,directory,size,gallery_fk) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo"SQL Statement Failed...";
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sssi",$fileNameNew,$fileDestination,$fileSize,$last_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  
}
else{
    echo "There was an error uploading the image";
}
}else{
    echo "You cannot upload files of this type!";
}
}
  echo"Gallery Was Successfully Added!";
}


function getGallery($conn){
    $sql = "SELECT * FROM gallery;";
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
         <td>'.$row["title"].'</td>
        <td>'.$row["description"].'</td>
          <td>'.$row["date"].'</td>
       
         <td>
        <div class="btnGrp">
        <a href="#" name ="'.$row['id'].'" class="del delGallery">Delete</a>
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










//Delete
function deleteGallery($conn,$id){

 $sql = "SELECT gallery.id,gallery.title, gallerypic.directory FROM `gallery` JOIN gallerypic ON gallery.id=gallerypic.gallery_fk WHERE gallery.id= ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo"SQL Statement Failed...";
    exit();
}  
  mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($resultData)>0){
    while($row = mysqli_fetch_array($resultData)){
if (!unlink($row["directory"])) {
    echo ("cannot be deleted due to an error");
}
else {


}
    }

}else{
    echo"SQL FETCH Failed...";
    exit();
}
$sql1 = "DELETE FROM gallerypic WHERE gallery_fk =?";
$stmt1 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo"SQL Statement Failed...";
}
mysqli_stmt_bind_param($stmt1,"i",$id);
mysqli_stmt_execute($stmt1);


$sql2 = "DELETE FROM gallery WHERE id =?";
$stmt2 = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt2,$sql2)){
    echo"SQL Statement Failed...";

}
mysqli_stmt_bind_param($stmt2,"i",$id);
mysqli_stmt_execute($stmt2);
mysqli_stmt_close($stmt2);







mysqli_stmt_close($stmt1);

mysqli_stmt_close($stmt);







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







//Will Delete the file from the directory and Delete the data in the database at the same time
//Will need the id of the file in file table
function deleteGalleryFile($conn,$id){

}