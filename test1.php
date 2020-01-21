<?php
require_once 'dbconnect.php';
?>


<div id="logoutdisp" class="d-flex">
  <form method="POST">
    <div class="col-sm-6">
      <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#Logout">Logout</button>
    </div>
    <div class="col-sm-6">
      <button type="button"  class="btn btn-info btn-lg ins-btn" data-toggle="modal" data-target="#insertmodal">Insert</button>
    </div>
  </form>
</div>

<!-- Modal INSERT -->
  <div class="modal" id="insertmodal">
    <div class="modal-dialog">            
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="insertform" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group row">
             <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Email</p>
                <input type="email" class="form-control form-control-sm"  id="user_email"  name="user_email" required="required"/>
                <p class="d-none danger emailreg">Email already taken!!</p>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Name</p> 
                <input type="text" class="form-control form-control-sm" id="user_name" name="user_name" required="required"/> 
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Mobile</p> 
                <input type="text" class="form-control form-control-sm" id="user_mobile" name="user_mobile" required="required"/> 
                <p class="d-none danger mobreg">Mobile number already taken!!</p>
              </div>
            </div> 
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Address</p> 
                <input type="text" class="form-control form-control-sm" id="user_address" name="user_address" required="required"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Image</p>
                <input type="file" class="file-loading" name="userImage"  required="required"/>
              </div>
            </div>
            <div class="col-xs-2 col-md-2 col-md-offset-5">
              <button type="submit" class="btn btn-primary" id="insert_btn">INSERT</button>
            </div>      
          </form> 
        </div>
      </div>
    </div>
  </div>
  <!-- Modal insert -->

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
          <button type="button" id="<?php echo $row["id"];?>" data-role="update" data-target="#updatemodal" data-toggle="modal" class="up-btn" data-id="<?php echo $row["id"];?>" ><span>UPDATE</span></button>
        </div>  
        <div class="col-sm-1">
          <button type="button" id="test_del" data-role="delete" data-target="#deletemodal" data-toggle="modal" class="del-btn" data-id="<?php echo $row["id"];?>" 
            ><span>DELETE</span></button>
        </div>       
      </div>
      <?php
        }
      ?> 
    </div>
    <!-- Modal update -->
  <div class="modal" id="updatemodal">
    <div class="modal-dialog">            
      <!-- Modal content-->
      <div class="modal-content update-color">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="ce-padd">
            <div class="form-group row">
              <div class="col-sm-6">
                <form method="POST">
                  <label>Email</label>
                  <input type="text" id="email" class="form-control" readonly="true">
                  <label>Name</label>
                  <input type="text" id="name" class="form-control">
                  <label>Mobile</label>
                  <input type="text" id="mobile" class="form-control">
                  <label>Address</label>
                  <input type="text" id="address" class="form-control">
                  <input type="hidden" id="userId" class="form-control">
                  <a href='#' id="savebtn" class='btn btn-info btn-lg' >UPDATE</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal update -->
  <!-- Modal INSERT -->
  <div class="modal" id="insertmodal">
    <div class="modal-dialog">            
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="insertform" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group row">
             <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Email</p>
                <input type="email" class="form-control form-control-sm"  id="user_email"  name="user_email" required="required"/>
                <p class="d-none danger emailreg">Email already taken!!</p>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Name</p> 
                <input type="text" class="form-control form-control-sm" id="user_name" name="user_name" required="required"/> 
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Mobile</p> 
                <input type="text" class="form-control form-control-sm" id="user_mobile" name="user_mobile" required="required"/> 
                <p class="d-none danger mobreg">Mobile number already taken!!</p>
              </div>
            </div> 
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Address</p> 
                <input type="text" class="form-control form-control-sm" id="user_address" name="user_address" required="required"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Image</p>
                <input type="file" class="file-loading" name="userImage"  required="required"/>
              </div>
            </div>
            <div class="col-xs-2 col-md-2 col-md-offset-5">
              <button type="submit" class="btn btn-primary" id="insert_btn">INSERT</button>
            </div>      
          </form> 
        </div>
      </div>
    </div>
  </div>
  <!-- Modal insert -->