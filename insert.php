  
<?php
require_once 'dbconnect.php';
if($_POST){


    $email = $_POST['user_email'];
    $name = $_POST['user_name'];
    $mobile = $_POST['user_mobile'];
    $address = $_POST['user_address'];

    $type = explode('.', $_FILES['userImage']['name']);
    $type = $type[count($type) - 1];
    $url = '../Project1/images/' . uniqid(rand()) . '.' . $type;

    if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
        if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

                // insert into database
                $sql = "INSERT INTO crud (email, name, mobile, address, image, display, hide ) VALUES ('$email', '$name', '$mobile', '$address', '$url', 1, 0)";
               // $results = $conn->query($sql);
                    if($results = $conn->query($sql)){
                        echo 1;
                        }
                    else{
                        echo 0;
                        }
                    }
                }
            }
        }
        
?>