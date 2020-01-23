  
<?php
require_once 'dbconnect.php';
 $maxsize = 65000;
if($_POST){


    $email = $_POST['user_email'];
    $name = $_POST['user_name'];
    $mobile = $_POST['user_mobile'];
    $address = $_POST['user_address'];

    $type = explode('.', $_FILES['userImage']['name']);
    $type = $type[count($type) - 1];
    $url = '../Project1/images/' . uniqid(rand()) . '.' . $type;

if(($_FILES['userImage']['size'] >= $maxsize) || ($_FILES["userImage"]["size"] == 0)) {
print_r("Image size exceeded");
}
else
{
if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
        if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

                // insert into database
                $sql = "INSERT INTO crud (email, name, mobile, address, image, display) VALUES ('$email', '$name', '$mobile', '$address', '$url', 1)";
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
    }
    
        
?>