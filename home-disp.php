<?php
    require_once 'dbconnect.php';
    session_start();
    session_destroy();
    window.location.replace("http://localhost/Project1/index.php");
?>