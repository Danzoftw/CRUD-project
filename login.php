<?php 
session_start();
require_once 'dbconnect.php';
?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = $_POST['login_email_id'];

    }
    $emailid = $_POST['login_email_id'];
    $passw = $_POST['login_user_password'];   


    $sql = "SELECT email,password FROM regusers WHERE email='$emailid' AND password='$passw'";

    $result = $conn->query($sql);
    $res = mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    if($rows > 0){
    echo 0;
    }
    if($rows == 0){
    echo 1; 
    }
?>

