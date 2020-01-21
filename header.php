<?php
require_once 'dbconnect.php';
session_start();
?>

<header>
  <div class="container">
    <div class="col-sm-12">
      <div class="row">
        <?php
          if ($_SESSION){
            ?>
            <?php
          }else{
        ?>
        <div id="login_disp">
          <div class="d-flex">
            <div class="col-sm-6">
              <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#btnlogin">Login</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#Reg">Registration</button>
            </div>
          </div>
        </div>
          <?php 
            }
          ?>
          <!-- Modal User/admin Login -->
        <div class="modal" id="btnlogin">
          <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-7 user-login">
                <p>USER LOGIN</p>
                </div>
                <div class="col-sm-4 admin-login">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#adminloginform">Admin?</button>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="" method="POST" id="loginform">

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

                 <form action="" method="POST" id="adminloginform" class="d-none">
                  <div class="form-group row">
                   <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Email :</p>
                      <input type="text" class="form-control form-control-sm"  id="admin_login_email_id"  name="admin_login_email_id" required="required"/>
                   </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Password :</p> 
                      <input type="password" class="form-control form-control-sm" id="admin_login_user_password" name="admin_login_email_id" required="required"/> 
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
        <!-- Modal User/admin Login -->
    </div>
  </div>
</div>

</header>