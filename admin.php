<?php
require_once 'dbconnect.php';
session_start();
?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['adminemail'] = $_POST['admin_login_email_id'];
        $_SESSION['adminpassword'] = $_POST['admin_login_password'];

        $emailid = $_POST['admin_login_email_id'];
        $passw = $_POST['admin_login_password'];

    $sql = "SELECT email,password FROM administrator WHERE email='$emailid' AND password='$passw'";

    $result = $conn->query($sql);
    $res = mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    if($rows){
    echo 0;
    }
    else{
    echo 1; 
    }

}
?>