<?php
session_start(); 

if(isset($_POST['actionLogin']) && isset($_POST['user']) && isset($_POST['passwd']){
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['passwd'] = $_POST['passwd'];
    echo "true"; //successful log in

} else if(isset($_POST['actionLogout']) && isset($_SESSION)) {
    foreach($_SESSION as $k => $v) {
        unset($_SESSION[$k]);
    }
    echo "false"; //successful log out
}
?>