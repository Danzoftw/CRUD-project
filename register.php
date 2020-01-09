<?php
        require_once 'dbconnect.php';
        $sql = "SELECT email FROM `regusers` WHERE email ='".$_POST["reg_email_id"]."'";
        $result = $conn->query($sql);

        $res = mysqli_query($conn, $sql);
        //retrieving count of rows
        $rows=mysqli_num_rows($res);
        //print_r($rows);


        if($rows > '0'){
        print_r("Email already registerd");
        }
         else{
        $sql = "INSERT INTO `regusers` (email, password) VALUES ('".$_POST["reg_email_id"]."','".$_POST["password"]."')";
        $results = $conn->query($sql);    
        }
?>

