<?php 
session_start();
require_once 'dbconnect.php';
?>


<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = $_POST['login_email_id'];
        
        // if($_SESSION['name']) {
        //     header('location: test1.php');
        // }
    }
    $emailid = $_POST['login_email_id'];
    $passw = $_POST['login_user_password'];   

    //print_r($emailid);
    //print_r($passw);

    $sql = "SELECT email,password FROM regusers WHERE email='$emailid' AND password='$passw'";

    $result = $conn->query($sql);
    $res = mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    //print_r($rows);
    if($rows > 0){

          $_SESSION['name'] = $_POST['login_email_id'];
        //echo $_SESSION['name'] ;
    echo 0;
    }
    if($rows == 0){
    echo 1; 
    }
    // else if(isset($_SESSION)){
    // print_r("Session running");
    //   }else{
    //     print_r("Session not running");
    //   }
    

?>

