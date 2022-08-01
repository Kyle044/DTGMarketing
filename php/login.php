<?php
include("config.php");

$username = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE usersEmail ='".$username."'";
$result = $conn->query($sql);
$count = $result->num_rows;
                    if ($count==0) {
                        ?>
                        <script>
                            alert("Error in Username Or Password.")
                            history.back();
                        </script>
                    <?php
                    }
                    else{
        while($row = $result->fetch_assoc()){
            if(password_verify($password,$row["usersPassword"])){
                session_start();
                $_SESSION["usersId"] = $row["usersId"];
                $_SESSION["usersName"] = $row["usersName"];
                $_SESSION["usersPosition"] = $row["usersPosition"];
                $_SESSION["usersEmail"] = $row["usersEmail"];
                echo"Login Succesfully";
                exit();
            }
            }
        }
    ?>



