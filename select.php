<?php
        require_once 'dbconnect.php';

        // $id = $_POST['text1'];

          $id = $_POST['text1'];

         //print_r($id);
         $qry = "SELECT * FROM crud WHERE id=$id";
         $result = $conn-> query($qry);
         while ($row = $result->fetch_assoc()) {

            $arr = array($row["email"], $row["name"], $row["mobile"], $row["address"], $row["id"]);
            echo json_encode($arr);
            //echo $id;
         }
      
?>
