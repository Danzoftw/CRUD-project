<?php
session_start();
?>
<header>
<div id="align_login">
  <p class="d-none succ_login danger">You have successfully logged in</p>
</div>

  <div class="container">
    <div class="col-sm-6">
      <div class="row">
        <?php
          if ($_SESSION) {
            ?>
             <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#Logout">Logout</button>
             
            <?php
          }else{
        ?>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#btnlogin">Login</button>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Reg">Registration</button>
          <?php 
            }
          ?>
          <!-- Modal Login -->
        <div class="modal" id="btnlogin">
          <div class="modal-dialog">            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
              </div>
              <div class="modal-body">
                <!-- <div class="container"> -->
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
                      <div class="col-xs-2 col-md-2 col-md-offset-5">
                        <button class="btn btn-primary" type="submit" name="loginpage" id="loginpage">login</button>
                          <p class="d-none unsucc_login danger">Invalid username or password</p>
                      </div>      
                </form> 
                
                  
                
                <!-- </div>  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
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
    <div class="login-succ">
      <div class="col-sm-6">
        <p>Logged-in</p>
      </div>
    </div>
    <?php
    }
    ?>
</div>

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
              <div class="container">
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

                  <div class="col-xs-2 col-md-2 col-md-offset-5">
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
</div>

</header>