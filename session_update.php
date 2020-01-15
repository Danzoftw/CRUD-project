<?php
    session_start();
    require_once 'dbconnect.php';
    
         //$scue = $_POST['new_email'];
         //$sess1 = $_SESSION['name'];
         
         echo $_SESSION['name'];

        //echo  $sess_email;
        //echo  $sess1;

        //$sql = "UPDATE `crud` SET name= '".$_POST['new_user_name']."' WHERE name='".$_POST['old_user_name']."'";


        $sql = "UPDATE `regusers` SET email = '".$_POST['new_email']."' WHERE email = '".$_SESSION['name']."'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
        }
        else{
            echo 0;
        }      
?>
