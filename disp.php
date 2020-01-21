<?php
require_once 'dbconnect.php';
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
      <?php 
      $sql = "SELECT * FROM crud where display=1";
      $result = $conn-> query($sql);


         while ($row = $result->fetch_assoc()){
          $image = substr($row['image'], 3);
        ?>
        <div class="container">
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
        <div class="col-sm-1">
          <?php echo "<img src='".$row['image']."' style='height:80px; width:80px;'/>";?>
        </div>

        <div class="col-sm-1">
          <button type="button" id="<?php echo $row["id"];?>" data-role="update" data-target="#updatemodal" data-toggle="modal" class="up-btn word-break-all" data-id="<?php echo $row["id"];?>" ><span>UPDATE</span></button>
        </div>  
        <div class="col-sm-1">
          <button type="button" id="test_del" data-role="delete" data-target="#deletemodal" data-toggle="modal" class="del-btn word-break-all" data-id="<?php echo $row["id"];?>" 
            ><span>DELETE</span></button>
        </div>  
          <input type="checkbox" name="checkboxlist" value="<?php echo $row["id"];?>" />     
      </div>

      </div>
        <?php
        // }
      }
       ?>
        
            

        <?php
      
    ?>
      