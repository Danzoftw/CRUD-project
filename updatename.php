<?php
    session_start();
        require_once 'dbconnect.php';

        $sql = "UPDATE `crud` SET name= '".$_POST['new_user_name']."' WHERE email='".$_POST['current_user_email']."'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
        }
        else{
            echo 0;
        }      
?>
