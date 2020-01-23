<?php 
session_start(); 

function loginForm($isHidden) { 
    $display = ($isHidden) ? "none" : "block";
    ?>
    <form method="POST" action="" name="loginForm" id="loginForm" accept-charset='UTF-8' style="display: <?php echo $display; ?>;">
        <input type='hidden' name='actionLogin' id='actionLogin' value='1'/>
        User: <input type="text" name="user" id="user" /><br />
        Password: <input type="password" name="passwd" id="passwd" /><br />
        <input type="submit" name="login" id="login" value="Login" />
    </form>
    <?php 
} 

function logoutForm($isHidden) { 
    $display = ($isHidden) ? "none" : "block";
    ?>
    <form method="POST" action="" name="logoutForm" id="logoutForm" style="display: <?php echo $display; ?>;">
        <input type='hidden' name='actionLogout' id='actionLogout' value='1'/>
        Logout: <input type="submit" value="Log out" name="logout" id="logout" />
    </form>
    <?php 
}

function loggedUser() {
    if(isset($_SESSION['user']) && isset($_SESSION['passwd'])) {
        return $_SESSION;
    } else {
        return array();
    }
}
?>

<html>
<head>
    <title>Form</title>

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#loginForm, #logoutForm').live('submit', function(e) {
                e.preventDefault();
                $.post('loginLogout.php', $(this).serialize(), function (data, textStatus) {
                    if (data == "true") { //login successful
                        $("#loginForm").hide();
                        $("#logoutForm").show();
                    } else {
                        $("#loginForm").show();
                        $("#logoutForm").hide();
                    }
                });
                return false;
            });
        });
    </script>
</head>
<body>

    <div id="logindiv">
        <?php
        $loggedUser = loggedUser();
        if(!empty($loggedUser)) {
            loginForm(true); //hidden
            logoutForm(false); //not hidden
        } else {
            loginForm(false);
            logoutForm(true);
        }
        ?>
    </div>

</body>
</html>