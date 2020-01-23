<?php
        require_once 'dbconnect.php';
 
        if(isset($_POST['email'])){ 
            // $email = $_POST['email'];
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $id = $_POST['userId'];
  

        $sql = "UPDATE `crud` SET name = '$name', mobile = '$mobile', address = '$address' WHERE id = '$id'";
        $results = $conn->query($sql);
        if($results)
        {
           //echo 1;           
        }
        else{
            //echo 0;
        }      
    }
?>