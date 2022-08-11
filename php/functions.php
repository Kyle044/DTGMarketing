<?php
function truncate($text, $chars) {
    if (strlen($text) <= $chars) {
        return $text;
    }
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}


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
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
$sql = 'INSERT INTO users (usersName,usersPosition,usersOffice,usersEmail,usersPassword) VALUES ("'.$fullname.'","'.$position.'","'.$office.'","'.$email.'","'.$hashedPwd.'")';

    if ($conn->query($sql) === TRUE) {
      echo "New User created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
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
    $result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
         echo '<tr>
         <td>'.$row["usersName"].'</td>
        <td>'.$row["usersPosition"].'</td>
          <td>'.$row["usersOffice"].'</td>
       <td>'.$row["usersEmail"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['usersId'].'" class="cmsbutton upUser" >Update</a><a href="#" name ="'.$row['usersId'].'" class="cmsbutton cmsbutton2 delUser" >Delete</a>
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


    $conn->close();

}
function updateUser($conn,$fullname,$email,$office,$position,$password,$id){
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
$sql = "UPDATE users SET usersName = '".$fullname."', usersPosition='".$position."',usersOffice='".$office."'
,usersEmail='".$email."',usersPassword='".$hashedPwd."' WHERE usersId='".$id."';";
$update = $conn->query($sql);
echo("User Updated Successfully!");
}


function deleteUser($conn,$id){
$sql = 'DELETE FROM users WHERE usersId='.$id.';';
if ($conn->query($sql) === TRUE) {
  echo "User deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
}


//SERVICE FUNCTIONS



function getService($conn){
$sql = "SELECT * FROM service ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo '<tr>
         <td>'.$row["id"].'</td>
        <td>'.$row["title"].'</td>
          <td ><p class="truncate">'.truncate($row["description"],20).'</p></td>
       <td>'.$row["detailed_descrip"].'</td>
       <td>'.$row["benefits"].'</td>
       <td>'.$row["approach"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="cmsbutton upService" >Update</a><a href="#" name ="'.$row['id'].'" class="cmsbutton cmsbutton2 delService" >Delete</a>
            </div>
            </td>
            </tr>';
  }
  echo "</table>";
} else {
return false;
}
$conn->close();
}
function getFrontService($conn){
$sql = "SELECT service.title, service.id,service.description,files.directory FROM service JOIN files ON service.file_fk=files.id";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
         echo '<div class="serviceCard"  >
	<div class="serviceLeft">
			<div style="display:flex; align-items:center; transform:translateX(-2rem); ">
		<i class="bi bi-brightness-low-fill " style="color:#e26a0b; text-align:center; margin-right:15px;"></i>
		<h2 style=" margin:0;color:white;">'.$row['title'].'</h2>
		</div>
		<p class="lead">
		'.$row['description'].'
		</p>
        	
	</div>
	<div class="serviceRight">
		<img  src="'.$row['directory'].'" alt="">
	</div>
	</div>';
    }

}else{
    return false;
}
$conn->close();
// <div id="accordion">

//Accordion


// 		<div class="card">
// 			<div class="card-header" id="headingOne">
// 				<h5 class="mb-0">
// 					<button class="btn btn-link white" data-toggle="collapse" data-target="#'.$row['id'].'" aria-expanded="true" aria-controls="collapseOne">
// 						See more
// 					</button>
// 				</h5>

// 			</div>
// 		</div>
// 		<div id="'.$row['id'].'" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
// <div class="card-body white">
// 	'.$row['supervisor'].'
// </div>
// 		</div>
		// </div>
}



function createService($conn,$title,$description,$detail_desc,$benefits,$approach,$file){
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
    $sql = 'INSERT INTO service (title, description, detailed_descrip, benefits, approach, file_fk) VALUES ("'.$title.'","'.$description.'","'.$detail_desc.'","'.$benefits.'","'.$approach.'",'.$fk.')';
    if ($conn->query($sql) === TRUE) {
     echo"Service Was Successfully Added!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}
    $conn->close();
}
function deleteService($conn,$id){
    $sql = 'SELECT * FROM service WHERE id = '.$id.'';
    $stmt = mysqli_stmt_init($conn);
     $result = $conn->query($sql);
    if($row = $result->fetch_assoc()){
    $fk = $row['file_fk'];
    // echo$fk;
        if(deleteFile($conn,$fk)){
            $sql1 = 'DELETE  FROM service WHERE id = '.$id.'';
        if ($conn->query($sql1) === TRUE) {
              echo "Service deleted successfully";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
        }else{
            echo"There was an Error Deleting the service File";
        }

    }else{
        return false;
    }
$conn->close();

}






function updateService($conn,$title,$description,$detail_desc,$benefits,$approach,$file,$id){
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


    
    $sql = "UPDATE service SET title='".$title."',description='".$description."',detailed_descrip='".$detail_desc."',
    benefits='".$benefits."',approach='".$approach."',file_fk='".$fk."' WHERE id='".$id."'";
    $conn->query($sql);
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
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo '<tr>
         <td>'.$row["title"].'</td>
       <td>'.$row["position"].'</td>
        <td>'.$row["description"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="cmsbutton upCareer" >Update</a><a href="#" name ="'.$row['id'].'" class="cmsbutton cmsbutton2 delCareer" >Delete</a>
            </div>
            </td>
            </tr>';
  }
} else {
return false;
}
$conn->close();




}


function getsCareer($conn){
$sql = "SELECT career.title,career.description,files.directory,career.qualification,career.responsibility FROM career JOIN files ON career.file_fk=files.id ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo '<div class="CarCard"><div class="CareerLeft"><ul><li><h2>'.$row['title'].'</h2><h3>Qualification</h3> ';
    echo$row['qualification'];
    echo'</li></ul> <ul><li style="list-style:none;"><h2 style="opacity:0;">.</h2><h3>Responsibility</h3>';
    echo$row['responsibility'];
    echo '</li></ul></div><div class="CareerRight"><img src="'.$row['directory'].'" alt=""></div></div>';
    }

}else{
    return false;
}
$conn->close();


}

//INSERT
function createCareer($conn,$title,$position,$description,$file,$qualification,$responsibility){
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
    $sql = 'INSERT INTO career (title,position,description,file_fk,qualification,responsibility) VALUES ("'.$title.'","'.$position.'","'.$description.'",'.$fk.',"'.(string)$qualification.'","'.(string)$responsibility.'")';
   if ($conn->query($sql) === TRUE) {
    echo"Career Was Successfully Added!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
 
}
else{
    echo "There was an error uploading the image";
}

}else{
    echo "You cannot upload files of this type!";
}



}


function updateCareer($conn,$title,$position,$description,$file,$id,$q1,$q2,$q3,$q4,$q5,$r1,$r2,$r3,$r4,$r5){
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
    
    $sql = "UPDATE career SET title='".$title."', position='".$position."',description='".$description."'
    ,file_fk='".$fk."' , Q1='".$q1."',Q2='".$q2."',Q3='".$q3."',Q4='".$q4."',Q5='".$q5."',R1='".$r1."',R2='".$r2."'
    ,R3='".$r3."',R4='".$r4."',R5='".$r5."' WHERE id='".$id."'";
    $stmt = $conn->query($sql);
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
    $sql = 'SELECT * FROM career WHERE id = '.$id.'';
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()){
    $fk = $row['file_fk'];
        if(deleteFile($conn,$fk)){
            $sql1 = 'DELETE  FROM career WHERE id = '.$id.'';
         if ($conn->query($sql1) === TRUE) {
            echo "Career deleted successfully";
            } else {
            echo "Error deleting record: " . $conn->error;
            }
        }else{
            echo"There was an Error Deleting the Career";
        }

    }else{
        return false;
    }
    $conn->close();

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
          <a href="#" name ="'.$row['id'].'" class="cmsbutton upBlog" >Update</a><a href="#" name ="'.$row['id'].'" class="cmsbutton cmsbutton2 delBlog" >Delete</a>
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


    $sql = "UPDATE blog SET title='".$title."', description='".$description."',author='".$author."'
    ,date_publish='".$date."',file_fk='".$fk."' WHERE id='".$id."'";//TO EDIT
    $conn->query($sql);
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
    $sql = 'INSERT INTO article (title,description,author,date_publish,file_fk) VALUES ("'.$title.'","'.$description.'","'.$author.'","'.$date.'",'.$fk.');';
   if ($conn->query($sql) === TRUE) {
    echo "New Article created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    echo "There was an error uploading the image";
}
}else{
    echo "You cannot upload files of this type!";
}



}

function deleteArticle($conn,$id){

    $sql = 'SELECT * FROM article WHERE id = '.$id.'';
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()){
    $fk = $row['file_fk'];
        if(deleteFile($conn,$fk)){
            $sql1 = 'DELETE  FROM article WHERE id = '.$id.'';
     if ($conn->query($sql1) === TRUE) {
        echo "Article deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }
        }else{
            echo"There was an Error Deleting the Article";
        }

    }else{
        return false;
    }
    $conn->close();

}
function getArticle($conn){
    $sql = "SELECT * FROM article;";
    $result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
         echo '<tr>
         <td>'.$row["title"].'</td>
        <td>'.truncate($row["description"],30).'</td>
          <td>'.$row["author"].'</td>
       <td>'.$row["date_publish"].'</td>
         <td>
        <div class="btnGrp">
          <a href="#" name ="'.$row['id'].'" class="cmsbutton upArticle" >Update</a><a href="#" name ="'.$row['id'].'" class="cmsbutton cmsbutton2 delArticle" >Delete</a>
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


$conn->close();

}




function getFrontArticle($conn){
$sql = "SELECT article.title, article.description, article.id,article.date_publish,files.directory FROM article JOIN files ON article.file_fk=files.id";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
         echo '<div class="ar2Container">

    <h1>'.$row['title'].'</h1>

<div class="ar2ComboPic">
    <p>
'.$row['description'].'
 
   </p>
        
    <img src="'.$row['directory'].'" alt="" style="border-radius:10px;">
</div>
</div>
';
    }

}else{
    return false;
}
$conn->close();

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

    
    $sql = "UPDATE article SET title='".$title."', description='".$description."'
    ,author='".$author."',date_publish='".$date."',file_fk='".$fk."' WHERE id='".$id."'";//TO EDIT
    $conn->query($sql);
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
$sql1 = 'INSERT INTO gallery (title,description,date) VALUES ("'.$title.'","'.$description.'","'.$date.'")';
if ($conn->query($sql1) === TRUE) {
    $last_id = $conn->insert_id;
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
        $sql = 'INSERT INTO galleryPic (title,directory,size,gallery_fk) VALUES ("'.$fileNameNew.'","'.$fileDestination.'","'.$fileSize.'",'.$last_id.')';
        if ($conn->query($sql) === TRUE) {
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit();
        }
    
}
else{
    echo "There was an error uploading the image";
}
}else{
    echo "You cannot upload files of this type!";
}
}

} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

  echo"Gallery Was Successfully Added!";
  $conn->close();
}


function getGallery($conn){
    $sql = "SELECT * FROM gallery;";
    $result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
         echo '<tr>
         <td>'.$row["title"].'</td>
        <td>'.$row["description"].'</td>
          <td>'.$row["date"].'</td>
       
         <td>
        <div class="btnGrp">
        <a href="#" name ="'.$row['id'].'" class="cmsbutton cmsbutton2 delGallery">Delete</a>
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


$conn->close();
}




function getFrontGallery($conn){
    $sql = "SELECT service.title,service.description,files.directory FROM service JOIN files ON service.file_fk=files.id";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
         echo '<div class="serviceCard"  >
	<div class="serviceLeft">
			<div style="display:flex; align-items:center; transform:translateX(-2rem); ">
		<i class="bi bi-brightness-low-fill " style="color:#e26a0b; text-align:center; margin-right:15px;"></i>
		<h2 style=" margin:0;color:white;">'.$row['title'].'</h2>
		</div>
		<p class="lead">
		'.$row['description'].'
		</p>
	</div>
	<div class="serviceRight">
		<img  src="'.$row['directory'].'" alt="">
	</div>
	</div>';
    }

}else{
    return false;
}
$conn->close();
}

//Delete
function deleteGallery($conn,$id){
$sql = 'SELECT gallery.id,gallery.title, gallerypic.directory FROM gallery JOIN gallerypic ON gallery.id=gallerypic.gallery_fk WHERE gallery.id= '.$id.'';
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
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
$sql1 = 'DELETE FROM gallerypic WHERE gallery_fk ='.$id.'';
$conn->query($sql1);
$sql2 = 'DELETE FROM gallery WHERE id ='.$id.'';
$conn->query($sql2);
$conn->close();
echo"A Post Sucessfully Deleted";
}




























//Files Function

//Create a file and returns its id
function getFileId($conn,$name,$directory,$size){
$sql = 'INSERT INTO files (name,directory,size) VALUES ("'.$name.'","'.$directory.'","'.$size.'")';
if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;

    return $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

//Will Delete the file from the directory and Delete the data in the database at the same time
//Will need the id of the file in file table
function deleteFile($conn,$id){



$sql = 'SELECT * FROM files WHERE id = '.$id.'';
$result = $conn->query($sql);
if($row = $result->fetch_assoc()){
$file_pointer = $row['directory'];

if (!unlink($file_pointer)) {
    echo ("$file_pointer cannot be deleted due to an error");
}
else {
$sql1 = 'DELETE FROM files WHERE id ='.$id.'';
if ($conn->query($sql1) === TRUE) {
  return true;
} else {
    echo"di gumana yung query";
    return false;
}

}
}else{
    echo"di nag fetch";
    return false;
}

}







//Will Delete the file from the directory and Delete the data in the database at the same time
//Will need the id of the file in file table
function deleteGalleryFile($conn,$id){

}