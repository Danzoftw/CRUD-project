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
           echo 1;           
        }
        else{
            echo 0;
        }      
    }
?>

  <div class="container">
        <div class="titles-holder d-flex">
          <div class="col-sm-3 word-break-all">
            <h4 class="sub-title">Email</h4>
          </div>
          <div class="col-sm-1 word-break-all">
            <h4 class="sub-title">Name</h4>
          </div>
          <div class="col-sm-2 word-break-all">
            <h4 class="sub-title">Mobile</h4>
          </div>
          <div class="col-sm-3 word-break-all">
            <h4 class="sub-title">Address</h4>
          </div>
          <div class="col-sm-2 ">
            <h4 class="sub-title">Images</h4>
          </div>
        </div>
      </div>
      <div class="container">
      <?php 
        $sql = "SELECT * FROM crud"; 
        $result = $conn-> query($sql);
        while ($row = $result->fetch_assoc()){
          $image = substr($row['image'], 3);
      ?>
        <div class="single-row d-flex">
          <div class="col-sm-3 word-break-all">
            <p><?php echo $row["email"]; ?></p>
          </div>
          <div class="col-sm-1 word-break-all">
            <p><?php echo $row["name"]; ?></p>
          </div>
          <div class="col-sm-2 word-break-all">
            <p><?php echo $row["mobile"]; ?></p>
          </div>
          <div class="col-sm-3 word-break-all">
            <p><?php echo $row["address"]; ?></p>
          </div>
          <div class="col-sm-2">
            <?php echo "<img src='".$row['image']."' style='height:100px; width:100px;'/>";?>
          </div>
          <div class="col-sm-1">
            <button type="button" id="<?php echo $row["id"];?>" data-role="update" data-target="#updatemodal" data-toggle="modal" class="up-btn" data-id="<?php echo $row["id"];?>" >UPDATE</button>
          </div>  
          <div class="col-sm-1">
            <button type="button" id="test_del" data-role="delete" data-target="#deletemodal" data-toggle="modal" class="del-btn" data-id="<?php echo $row["id"];?>" >DELETE</button>
          </div>       
        </div>
        <?php
          }
        ?> 
    </div>  