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
        <div class="container">
        <div id="app">
        <label for="name">Name:</label>
        <input id="name" type="text" v-model="name" />
        <p>{{ name }}</p>
      </div>
      
       
      </div>

          <?php 
            }
          ?>
          <!-- Modal User Login -->
        <div class="modal" id="btnlogin">
          <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-7 user-login">
                <p>USER LOGIN</p>
                </div>
                <div class="col-sm-4 admin-login">
                  <button type="button" id="adminbtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#adminbtnlogin">Admin?</button>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form action="" method="POST" id="loginform" class="d-block">
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
        <!-- Modal User Login -->

        <!-- Modal Admin Login -->
        <div class="modal" id="adminbtnlogin">
          <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-sm-7 admin-login">
                <p>ADMIN LOGIN</p>
                </div>
                <div class="col-sm-4 admin-login-align">
                  <button type="button" id="adminlogintoggle" class="btn btn-info btn-lg" data-toggle="modal" data-target="#adminbtnlogin">User?</button>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                     <form action="" method="POST" id="adminloginform" class="d-none">
                  <div class="form-group row">
                   <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Username:</p>
                      <input type="text" class="form-control form-control-sm"  id="admin_login_email_id"  name="admin_login_email_id" required="required"/>
                   </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Password :</p> 
                      <input type="password" class="form-control form-control-sm" id="admin_login_password" name="admin_login_password" required="required"/> 
                    </div>
                  </div>  
                    <div class="col-xs-2 col-md-2 col-md-offset-5 login-align">
                      <button class="btn btn-primary" type="submit" name="adminloginpage" id="adminloginpage">login</button>
                      <p class="d-none unsucc_login danger">Invalid username or password</p>
                    </div>      
                </form>       
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Admin Login -->

        <!-- Modal Register-->
          <div class="col-sm-6">
            <div class="row">
              <div class="modal" id="Reg">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        <!-- Modal Register-->
    </div>
  </div>
</div>

</header>