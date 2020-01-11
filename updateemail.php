<?php
    session_start();
        require_once 'dbconnect.php';

        $sql = "UPDATE `crud` SET email= '".$_POST['new_user_email']."' WHERE email='".$_POST['old_user_email']."'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
        }
        else{
            echo 0;
        }      
?>
