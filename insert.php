  
<?php
require_once 'dbconnect.php';
if($_POST){



    $email = $_POST['user_email'];
    $name = $_POST['user_name'];
    $mobile = $_POST['user_mobile'];
    $address = $_POST['user_address'];

    // print_r($email);
    // print_r($name);
    // print_r($mobile);
    // print_r($address);


    $type = explode('.', $_FILES['userImage']['name']);
    $type = $type[count($type) - 1];
    $url = '../Project1/images/' . uniqid(rand()) . '.' . $type;

    if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
        if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

                // insert into database
                $sql = "INSERT INTO crud (email, name, mobile, address, image) VALUES ('$email', '$name', '$mobile', '$address', '$url')";
                $results = $conn->query($sql);
                } 
                    if($results){
                        echo 1;
                        }
                    else{
                        echo 0;
                        }
                        
                }
            }
        }
?>