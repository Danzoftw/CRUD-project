<?php
    session_start();
        require_once 'dbconnect.php';

        $sql = "UPDATE `crud` SET address='".$_POST['new_user_address']."' WHERE email='".$_POST['current_user_email']."'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
        }
        else{
            echo 0;
        }      
?>
