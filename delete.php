<?php
        require_once 'dbconnect.php';
            $id = $_POST['duserId'];
            //print_r($id);
        $sql = "UPDATE `crud` SET display = 0 WHERE id = '$id'";
        $results = $conn->query($sql);
        if($results)
        {
           //echo 1;
           //echo $id;
        }
        else{
            //echo 0;
        }
      




?>