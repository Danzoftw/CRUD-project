<?php
    session_start();
        require_once 'dbconnect.php';

        $sql = "DELETE FROM `crud` WHERE name='".$_POST['name_delete']."'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
        }
       
?>
