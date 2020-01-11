<?php
    session_start();
        require_once 'dbconnect.php';

        $sql = "UPDATE `crud` SET name= '".$_POST['new_user_name']."' WHERE name='".$_POST['old_user_name']."'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
        }
        else{
            echo 0;
        }      
?>
