<?php
require_once 'dbconnect.php';
session_start();

?>

<html>
    <head>
        <title>Internship</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/piexif.min.js" type="text/javascript"></script>

        <script src="js/canvas-to-blob.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/sortable.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/purify.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <script src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script src="js/script.js"></script> 
    </head>

  
<body>
  <div class="container">
    <div class="col-sm-12">
      <div class="row">
        <?php
        if ($_SESSION){
        ?>
          <form method="POST">
            <div id="logoutdisp" class="d-flex">
            <div class="col-sm-4">
              <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#Logout">Logout</button>
            </div>

            <div class="col-sm-4">
              <button type="button" class="btn btn-info btn-lg ins-btn" data-toggle="modal" data-target="#insertmodal">Insert</button>
            </div>
            <button type="button" id="del_mul" class="btn btn-info btn-lg ins-btn"><span>DELETEMUL</span></button>
          </div>
          </form>
        
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
    <!-- Modal Login -->

    <!-- Modal Logout-->
    <form action="" method="POST" id="logout_sess">
      <div class="modal" id="Logout" >
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <input type='hidden' name='actionLogout' id='actionLogout' value='1'/>
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
  <div class="results" id="results">

  <script type="text/javascript">getdata();</script>

  </div>
<?php
}
?>
  
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
                <input type="email" class="form-control form-control-sm"  id="user_email"  name="user_email" required="required" readonly="true" value='<?php echo $_SESSION['name']?>' />
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
            <div class="form-group row image-up">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Image<span> *Minimum 1 MB</span></p>
                <div id="upload_image" class="btn btn-sm btn-success fa fa-cloud-upload"></div>
                <input type="file" class="file-loading"  hidden="true" name="userImage" required="required" onchange="readURL(this);"/>

                 <button type="button" id="img_btn" class="visible" style="background: transparent; border: hidden;">

                 <img id="image_display"  height="100" width="100" class="benefitImg" id="iconPersonalizeProfile" src="http://upload.wikimedia.org/wikipedia/commons/c/ce/Transparent.gif"/>

                 </button>
              </div>
            </div>
            <!-- <div class="form-group row">
              <div class="col-xs-3 col-md-3 col-md-offset-5">
                <p class="">Image</p>
                <input type="file" class="file-loading" name="userImage"  required="required"/>
              </div>
            </div> -->
            <div class="col-xs-2 col-md-2 col-md-offset-5">
              <button type="submit" class="btn btn-primary" id="insert_btn">INSERT</button>
            </div>      
          </form> 
        </div>
      </div>
    </div>
  </div>
  <!-- Modal insert -->
  
 
</div>

</body>
</html>