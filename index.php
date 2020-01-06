<?php
    // Include config file
    require_once 'dbconnect.php';
    $disp = 0;

?>

<html>
    <head>
        <title>Internship</title>
        <center><h1>BASIC CRUD OPERATIONS:</h1></center>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery.js"></script>     
        <script src="js/bootstrap.min.js"></script>      

    </head>


    <header>
        
        <div class="container">
          <div class="col-sm-6">
            <div class="row">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Reg">Registration</button>
                <!-- <button>Login</button> -->
                

                <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
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
                                <div class="email-font">
                                <div class="form-group row">
                                     <div class="col-xs-3 col-md-3 col-md-offset-5">
                                        <p class="font">Email :</p><input type="text" class="form-control form-control-sm"  id="email_id"  name="email_id" required="required" /> 
                                     </div>
                                </div>
                                </div>
                                <div class="password-font">
                                <div class="form-group row">
                                    <div class="col-xs-3 col-md-3 col-md-offset-5">
                                         <p class="font">Password :</p> <input type="password" class="form-control form-control-sm" id="user_password" name="user_password" required="required" /> 
                                    </div>
                                </div>  
                                </div>

                                    <div class="col-xs-2 col-md-2 col-md-offset-5">
                                        <button class="btn btn-primary type="submit" name="save">login</button>
                                    </div>      
                            </div>
                        </form>
                      
                        <?php
                        session_start();
                        if(isset($_POST['save'])){
                         if(empty($_POST['email_id']) || empty($_POST['user_password'])){
                         $error = "Username or Password is Empty";
                         }
                         else
                         {
                            $email=$_POST['email_id'];
                            $pass=$_POST['user_password'];

                            $db = mysqli_select_db($conn, "project1");
                            $query = mysqli_query($conn, "SELECT `email`, `password` FROM `proj1` WHERE email = '$email' AND password='$pass'");
             
                             $rows = mysqli_num_rows($query);
                             if($rows == 1){
                                $disp=1;
                                echo $disp;
                             //header("Location: login.php"); // Redirecting to other page
                             }
                             else
                             {
                            echo "Username of Password is Invalid";
                             }
                             mysqli_close($conn); // Closing connection
                             }
                        }
                        ?>
                    </div>
                  </div>
                  
                </div>
             </div>
            </div>
          </div>

              <?php
            if($disp==1)
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
           
    </header>

    <body>
    


    </body>

    <footer>
        
    </footer>
</html>
