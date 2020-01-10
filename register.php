<?php
        require_once 'dbconnect.php';
        $sql = "SELECT email FROM `regusers` WHERE email ='".$_POST["reg_email_id"]."'";
        $result = $conn->query($sql);
        $res = mysqli_query($conn, $sql);
        $rows=mysqli_num_rows($res);
        if($rows > 0){
        echo 0;
        }
         else{
        $sql = "INSERT INTO `regusers` (email, password) VALUES ('".$_POST["reg_email_id"]."','".$_POST["user_password_two"]."')";
        $results = $conn->query($sql);
        echo 1;  
        }
?>

