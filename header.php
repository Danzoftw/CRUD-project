<header>
  <div class="container">
    <div class="col-sm-6">
      <div class="row">
        <?php 
          if (!isset($_SESSION)){
            ?>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Reg">Registration</button>
             <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#Logout">Logout</button>
            <?php
          }else{
        ?>
        <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#Logout">Logout</button>
          <?php 
            }
          ?>
          
          <!-- Modal Login -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <form action="" method="POST">
                  <div class="container">
                      <div class="form-group row">
                       <div class="col-xs-3 col-md-3 col-md-offset-5">
                          <p class="font">Email :</p>
                          <input type="text" class="form-control form-control-sm"  id="email_id"  name="email_id" required="required" /> 
                       </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-xs-3 col-md-3 col-md-offset-5">
                          <p class="font">Password :</p> 
                          <input type="password" class="form-control form-control-sm" id="user_password" name="user_password" required="required" /> 
                        </div>
                      </div>  
                      <div class="col-xs-2 col-md-2 col-md-offset-5">
                        <button class="btn btn-primary" type="submit" name="save">login</button>
                      </div>      
                  </div>
                </form>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
   <!-- Modal Logout-->
    <form action="" method="POST">
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
      if(isset($_POST['logout_session']))
      {
      session_destroy();
      }
    ?>
    <?php
      if(session_id() == ''){
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
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <div class="signin-form">
              <div class="container">
                <form action="" method="POST" id="register-form" class="form-signin">
                  <div class="form-group row">
                   <div class="col-xs-3 col-md-3 col-md-offset-5">
                     <p class="font">Email :</p>
                     <input type="email" class="form-control form-control-sm"  id="reg_email_id"  name="reg_email_id" required="required" /> 
                     <p class="d-none email-empty" id="danger" >Email id cannot be empty</p>
                     <p class="d-none reg-empty" id="danger" >Email already registered</p>
                   </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-3 col-md-3 col-md-offset-5">
                      <p class="font">Password :</p> 
                      <input type="password" class="form-control form-control-sm" id="password" name="password" required="required" value="pass1" />
                      <p class="d-none pass-empty" id="danger" >Password cannot be empty</p> 
                    </div>
                  </div> 
                  <div class="password-font-confirm">
                    <div class="form-group row">
                      <div class="col-xs-3 col-md-3 col-md-offset-5">
                        <p class="font">Re-Enter Password :</p> 
                        <input type="password" class="form-control form-control-sm" id="user_password_two" name="user_password_two" required="required" value="pass2" />
                        <p class="d-none passtwo-empty" id="danger" >Password cannot be empty</p> 
                        <p class="d-none pass-error" id="danger" >Password do not match</p>
                        
                      </div>
                    </div>  
                  </div>
                  <div class="col-xs-2 col-md-2 col-md-offset-5">
                    <button class="btn btn-primary" type="submit" name="register" id="btnsubmit">Register</button>
                  </div>  
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