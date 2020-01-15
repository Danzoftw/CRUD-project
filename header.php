<?php
require_once 'dbconnect.php';
session_start();
?>

<header>
  <div class="container">
    <div class="col-sm-12">
      <div class="row">
        <?php
          if ($_SESSION) {
            ?>
            <div class="col-sm-6">
              <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#Logout">Logout</button>
            </div>
            <div class="col-sm-6">
              <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#crud_btn">Insert</button>
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
          <!-- Modal Login -->
        <div class="modal" id="btnlogin">
          <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="" method="POST" id="loginform" >
                  <div class="form-group row">
                   <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Email :</p>
                      <input type="text" class="form-control form-control-sm"  id="login_email_id"  name="login_email_id" required="required"/> 
                   </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Password :</p> 
                      <input type="password" class="form-control form-control-sm" id="login_user_password" name="login_user_password" required="required"/> 
                    </div>
                  </div>  
                    <div class="col-xs-2 col-md-2 col-md-offset-5 login-align">
                      <button class="btn btn-primary" type="submit" name="loginpage" id="loginpage">login</button>
                      <p class="d-none unsucc_login danger">Invalid username or password</p>
                    </div>      
                </form>                 
              </div>
            </div>
          </div>
        </div>
      </div>
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
    <div class="results">
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
          </div>
        </div>
        <?php
          $sql = "SELECT * FROM crud"; 
          $result = $conn-> query($sql);
          while ($row = $result->fetch_assoc()){
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
            <div class="col-sm-1">
              <button type="button" id="<?php echo $row["id"];?>" data-role="update" data-target="#updatemodal" data-toggle="modal" class="btn btn-info btn-lg up-btn" data-id="<?php echo $row["id"];?>" >UPDATE</button>
            </div>  
            <div class="col-sm-1">
              <button type="button" id="<?php echo $row["id"];?>" data-role="delete" data-target="#deletemodal" data-toggle="modal" class="btn btn-info btn-lg del-btn" data-id="<?php echo $row["id"];?>" >DELETE</button>
            </div>       
          </div>
        </div>
        <?php
          }
        ?> 
      </div>
    </div>
    <!-- Modal update-->
    <div class="modal" id="updatemodal">
      <div class="modal-dialog">            
        <!-- Modal content-->
        <div class="modal-content update-color">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title">Modal Header</h4> -->
          </div>
          <div class="modal-body">
            <div class="ce-padd">
              <div class="form-group row">
                <div class="col-sm-6">
                  <form>
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

    <!-- Modal Delete -->
    <div class="modal" id="deletemodal">
      <div class="modal-dialog">            
        <!-- Modal content-->
        <div class="modal-content update-color">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title">Modal Header</h4> -->
          </div>
          <div class="modal-body">
            <div class="ce-padd">
              <div class="form-group row">
                <div class="col-sm-6">
                  <form>
                    <label>Email</label>
                    <input type="text" id="demail" class="form-control" readonly="true">
                    <label>Name</label>
                    <input type="text" id="dname" class="form-control" readonly="true">
                    <label>Mobile</label>
                    <input type="text" id="dmobile" class="form-control" readonly="true">
                    <label>Address</label>
                    <input type="text" id="daddress" class="form-control" readonly="true">
                    <input type="hidden" id="duserId" class="form-control">
                    <a href='#' id="delbtn" class='btn btn-info btn-lg' >DELETE</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Modal Delete -->
       
  <!-- Modal INSERT -->
    <div class="modal" id="crud_btn">
      <div class="modal-dialog">            
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title">Modal Header</h4> -->
          </div>
          <div class="modal-body">
            <form action="" method="POST" id="insertform" >
              <div class="form-group row">
               <div class="col-xs-3 col-md-3 col-md-offset-5">
                  <p class="">Email</p>
                  <input type="email" class="form-control form-control-sm"  id="user_email"  name="user_email" required="required"/>
                  <p class="d-none email-empty danger">Email cannot be empty</p> 
                  <p class="d-none email-registered danger">Email already taken!!</p>
                  <p class="d-none email-format danger">Email already taken!!</p> 
               </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-3 col-md-3 col-md-offset-5">
                  <p class="">Name</p> 
                  <input type="text" class="form-control form-control-sm" id="user_name" name="user_name" required="required"/> 
                  <p class="d-none name-empty danger">Name cannot be empty</p> 
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-3 col-md-3 col-md-offset-5">
                  <p class="">Mobile</p> 
                  <input type="text" class="form-control form-control-sm" id="user_mobile" name="user_mobile" required="required"/> 
                  <p class="d-none mobile-empty danger">Mobile cannot be empty</p>
                  <p class="d-none mobile-check danger">Mobile number should contain 10 digits</p>
                  <p class="d-none mobile-registered danger">Mobile number already taken!!</p>
                </div>
              </div> 
              <div class="form-group row">
                <div class="col-xs-3 col-md-3 col-md-offset-5">
                  <p class="">Address</p> 
                  <input type="text" class="form-control form-control-sm" id="user_address" name="user_address" required="required"/>
                  <p class="d-none address-empty danger">Address cannot be empty</p> 
                </div>
              </div> 
              <div class="col-xs-2 col-md-2 col-md-offset-5">
                <button class="btn btn-primary" type="submit" name="insert_op" id="crudbtn">INSERT</button>
                <p class="d-none ins-succ ">Data inserted successfully!!</p> 
              </div>      
            </form> 
          </div>
        </div>
      </div>
    </div>
    <!-- Modal insert -->
    <?php
    }
    ?>
    <div class="col-sm-6">
      <div class="row">
          <!-- Modal Register-->
        <div class="modal" id="Reg">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               <!--  <h4 class="modal-title">Modal Header</h4> -->
              </div>
              <div class="modal-body">
                <div class="signin-form">
                    <form action="" method="POST" id="register-form" class="form-signin">
                      <div class="form-group row">
                       <div class="col-xs-3 col-md-3 col-md-offset-5">
                         <p class="font">Email :</p>
                         <input type="email" class="form-control form-control-sm"  id="reg_email_id"  name="reg_email_id" required="required" /> 
                         <p class="d-none email-empty danger" >Email id cannot be empty</p>
                         <p class="d-none reg-empty danger">Email already registered</p>
                       </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-xs-3 col-md-3 col-md-offset-5">
                          <p class="font">Password :</p> 
                          <input type="password" class="form-control form-control-sm" id="user_password_one" name="user_password_one" required="required" value="pass1" />
                          <p class="d-none pass-empty danger">Password cannot be empty</p> 
                        </div>
                      </div> 
                      <div class="form-group row">
                        <div class="col-xs-3 col-md-3 col-md-offset-5">
                          <p class="font">Re-Enter Password :</p> 
                          <input type="password" class="form-control form-control-sm" id="user_password_two" name="user_password_two" required="required" value="pass2" />
                          <p class="d-none passtwo-empty danger" >Password cannot be empty</p> 
                          <p class="d-none pass-error danger">Password do not match</p>
                        </div>
                      </div> 
                      <div class="col-xs-2 col-md-2 col-md-offset-5 reg-align">
                        <button class="btn btn-primary" type="submit" name="register" id="btnsubmit">Register</button>
                      </div>
                      <p class="reg-success d-none">Registered successfully</p> 
                    </form>  
                </div>
              </div>
            </div>
          </div>
       </div>
      </div>
    </div>
</header>
