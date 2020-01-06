
<html>
	<div>
	<form action="login.php" method="POST">

           

                <div class="container">
                    <div class="form-group row">
                         <div class="col-xs-3 col-md-3 col-md-offset-5">
                            <p class="font">Email :</p><input type="text" class="form-control form-control-sm"  name="email" required="required" /> 
                         </div>
                    </div>
            
                    <div class="form-group row">
                        <div class="col-xs-3 col-md-3 col-md-offset-5">
                             <p class="font">Password :</p> <input type="password" class="form-control form-control-sm" name="password" required="required" /> 
                        </div>
                    </div>  
        
                        <div class="col-xs-2 col-md-2 col-md-offset-5">
                            <button class="btn btn-primary type="submit" name="save">Login</button>
                        </div>      
                </div>


    </form>




	
	</div>
</html>



<!-- <?php                  
                    $user = 'root';
                    $pass = '';
                    $db = 'project1';

                        $con = mysqli_connect('localhost', $user, $pass, $db);
                            mysqli_select_db($con,'project1');
                                 $sql = "SELECT email,password from proj1";
                                    $result = mysqli_query($con,$sql);
   
                                    if(!$result) 
                                        {
                                    die('Could not get data: ' . mysqli_error());
                                    }
                        
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        echo '<tr>
                                        <td>'.$row['id'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['password'].'</td>
                                    </tr>';
                                  }
?> -->