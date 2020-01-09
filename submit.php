<?php
include 'dbconnect.php';
$sql = "INSERT INTO regusers (email, password) VALUES ('".$_POST["reg_email_id"]."','".$_POST["user_password_one"]."')";
$result = $conn->query($sql);
$conn->close();
