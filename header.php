<?php
session_start();
?>
<header>


  <div class="container">
    <div class="col-sm-12">
      <div class="row">
        <?php
          if ($_SESSION) {
            ?>
             <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#Logout">Logout</button>
             
             <div class="col-sm-12 col_test">
              <div class="insert_padding">
                <h1>CRUD BASIC OPERATIONS</h1>
             <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#crud_btn">Insert</button>
             <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#update-btn">Update</button>
             <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#delete-btn">Delete</button>
             </div>
             <div class="col-sm-12">
             <h1>CRUD BASIC OPERATIONS FOR SESSION</h1>
           </div>
           </div>
            <?php
          }else{
        ?>
        <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#btnlogin">Login</button>
        <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#Reg">Registration</button>
      
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
                      <div class="col-xs-2 col-md-2 col-md-offset-5 login-align">
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
      <div class="col-sm-12 succ_login_align">
        <p>Successfully-Logged-in</p>
      </div>
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
                <!-- <div class="container"> -->
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

        <!-- Modal update -->
         <div class="modal" id="update-btn">
          <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
              </div>
              <div class="modal-body">
                <!-- <div class="container"> -->
                <form action="" method="POST" id="updateemail" >
                      <div class="form-group row">
                       <div class="col-xs-3 col-md-3 col-md-offset-5 email-inline">
                          <p class="">Old email</p>
                          <input type="email" class="form-control form-control-sm"  id="old_user_email"  name="old_user_email" required="required"/>
                          <p class="">New email</p>
                          <input type="email" class="form-control form-control-sm"  id="new_user_email"  name="new_user_email" required="required"/>
                          <input type="submit" class="btn btn-primary btn-sm" id="update-submit" value="Update">                        
                          <p class="d-none safe email-updated ">Email updated successfully</p>
                       </div>
                      </div>
                </form> 
                <form action="" method="POST" id="updatename" >
                      <div class="form-group row">
                       <div class="col-xs-3 col-md-3 col-md-offset-5 name-inline">
                          <p class="">Old Name</p>
                          <input type="text" class="form-control form-control-sm"  id="old_user_name"  name="old_user_name" required="required"/>
                          <p class="">New Name</p>
                          <input type="text" class="form-control form-control-sm"  id="new_user_name"  name="new_user_name" required="required"/>
                          <input type="submit" class="btn btn-primary btn-sm" id="name-submit" value="Update">                        
                          <p class="d-none safe name-updated ">Name updated successfully</p>
                       </div>
                      </div>
                </form> 
            <!--    <form action="" method="POST" id="delete-btn" >
                    <div class="form-group row">
                     <div class="col-xs-3 col-md-3 col-md-offset-5 name-inline">
                        <p class="">Name</p>
                        <input type="text" class="form-control form-control-sm"  id="data-deleted"  name="" required="required"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="delete-submit" value="Update">                        
                        <p class="d-none safe data-deleted ">Data successfully deleted</p>
                     </div>
                    </div>
              </form> -->      
                
              </div>
            </div>
          </div>
        </div>
             <div class="modal" id="delete-btn">
          <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
              </div>
              <div class="modal-body">
                <!-- <div class="container"> -->
               <form action="" method="POST" id="delete-data" >
                    <div class="form-group row">
                     <div class="col-xs-3 col-md-3 col-md-offset-5">
                        <p class="">Name</p>
                        <input type="text" class="form-control form-control-sm"  id="name_delete"  name="" required="required"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="delete-submit" value="Update">                        
                        <p class="d-none safe data-deleted">Data successfully deleted</p>
                     </div>
                    </div>
              </form>      
                
              </div>
            </div>
          </div>
        </div>
        <!-- Modal update -->
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
</div>

</header>