<?php
        require_once 'dbconnect.php';

        $mobile = $_POST['user_mobile'];
        $emailid = $_POST['user_email'];

        $sql = "SELECT email FROM crud WHERE email='$emailid'";
        $result = $conn->query($sql);
        $res = mysqli_query($conn, $sql);
        $rows=mysqli_num_rows($res);

        $sqll = "SELECT mobile FROM crud WHERE mobile='$mobile'";
        $rest = $conn->query($sqll);
        $ress = mysqli_query($conn, $sqll);
        $row=mysqli_num_rows($ress);

        if($rows >= 1){
        echo 1;
        }
        if($row >= 1){
        echo 2;
        }
         else{
        $sql = "INSERT INTO `crud` (email, name, mobile, address) VALUES ('".$_POST["user_email"]."','".$_POST["user_name"]."', '".$_POST["user_mobile"]."', '".$_POST["user_address"]."')";
        $results = $conn->query($sql);
        echo 0;  
    }   
?>

