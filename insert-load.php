  <?php
require_once 'dbconnect.php';
session_start();
?>

  <div class="container">
    <div class="col-sm-12">
      <div class="row">
        <?php
          if ($_SESSION) {
            ?>
            
            <div class="results-insert d-flex">
            <div class="col-sm-8">
              <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#Logout">Logout</button>
            </div>
            <div class="col-sm-8">
              <button type="button"  class="btn btn-info btn-lg ins-btn" data-toggle="modal" data-target="#insertmodal">Insert</button>
              <!-- <p class="d-none ins-succ">Data inserted successfully!!</p> -->
            </div>
            </div>
            
            <?php

          }else{
        ?>
          <div class="col-sm-6">
            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#btnlogin">Login</button>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#Reg">Registration</button>
          </div>
          <?php 
            }
          ?>
    </div>
  </div>


<!-- Modal Logout-->
  <form action="" method="POST" id="logout_sess">
    <div class="modal" id="Logout" >
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Do you really want to logout?</h4>
          </div>
          <div class="modal-body">
            <button type="button" class="btn btn-default" id="logout_session" >Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>
  </form>
    <?php
      if(!$_SESSION){
      }
      else
      {
    ?>
      <div class="db-table">
        <div class="titles-holder d-flex">
          <div class="col-sm-2">
            <h4>Email</h4>
          </div>
          <div class="col-sm-1">
            <h4>Name</h4>
          </div>
          <div class="col-sm-1">
            <h4>Mobile</h4>
          </div>
          <div class="col-sm-4">
            <h4>Address</h4>
          </div>
          <div class="col-sm-2">
            <h4>Images</h4>
          </div>
          <div id="insert_load"></div>
        </div>
        <?php
          $sql = "SELECT * FROM crud"; 
          $result = $conn-> query($sql);
          while ($row = $result->fetch_assoc()){
            $image = substr($row['image'], 3);
        ?>
        <div  class="update-form">
          <div class="single-row d-flex">
            <div class="col-sm-2">
              <h4><?php echo $row["email"]; ?></h4>
            </div>
            <div class="col-sm-1">
              <h4><?php echo $row["name"]; ?></h4>
            </div>
            <div class="col-sm-1">
              <h4><?php echo $row["mobile"]; ?></h4>
            </div>
            <div class="col-sm-4">
              <h4><?php echo $row["address"]; ?></h4>
            </div>
            <div class="col-sm-2">
              <?php echo "<img src='".$row['image']."' style='height:100px; width:100px;'/>";?>
          </div>
            <div class="col-sm-1">
              <button type="button" id="<?php echo $row["id"];?>" data-role="update" data-target="#updatemodal" data-toggle="modal" class="btn btn-info btn-lg up-btn" data-id="<?php echo $row["id"];?>" >UPDATE</button>
            </div>  
            <div class="col-sm-1">
              <button type="button" id="test_del" data-role="delete" data-target="#deletemodal" data-toggle="modal" class="btn btn-info btn-lg del-btn" data-id="<?php echo $row["id"];?>" >DELETE</button>
            </div>       
          </div>
        </div>
        <?php
          }
        ?> 
      </div>