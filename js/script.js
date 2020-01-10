$(document).ready(function(){
   $("#btnsubmit").click(function(e){
         e.preventDefault();

        if($("#reg_email_id").val()== ''){
            $(".email-empty").addClass("d-block");
            $(".email-empty").removeClass("d-none");
        }
        else if($("#reg_email_id").val()!= ''){
            $(".email-empty").removeClass("d-block");
            $(".email-empty").addClass("d-none");
        }
        //Email validation
        //user_password_one validation
        if($("#user_password_one").val()== ''){
            $(".pass-empty").addClass("d-block");
            $(".pass-empty").removeClass("d-none");
        }
        else if($("#user_password_one_one").val()!= ''){
            $(".pass-empty").removeClass("d-block");
            $(".pass-empty").addClass("d-none");
        }
        else if($("#user_password_one").val()== '' && $("#user_password_two").val()== '')
        {
            $(".pass-empty").addClass("d-block");
            $(".pass-empty").removeClass("d-none");
            $(".passtwo-empty").addClass("d-block");
            $(".passtwo-empty").removeClass("d-none");
        }
        //user_password_one validation
        //confirm user_password_one validation
        if($("#user_password_two").val()== ''){
            $(".passtwo-empty").addClass("d-block");
            $(".passtwo-empty").removeClass("d-none");
        }
        else if($("#user_password_two").val()!= ''){
            $(".passtwo-empty").removeClass("d-block");
            $(".passtwo-empty").addClass("d-none");
        }
        if($("#user_password_one").val() != $("#user_password_two").val()){
            $(".pass-error").addClass("d-block");
            $(".pass-error").removeClass("d-none");
        }
        else if($("#user_password_one").val() == $("#user_password_two").val())
        {
            $(".pass-error").removeClass("d-block");
            $(".pass-error").addClass("d-none");

        var form = new FormData();
        form.append("reg_email_id", $("#reg_email_id").val());
        form.append("user_password_two",  $("#user_password_two").val());
        $.ajax({

          "url": "http://localhost/Project1/register.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false
        }).done(function (response) {
            console.log(response)
          if (response==1) {
            window.location.replace("http://localhost/Project1/index.php");
            $(".reg-success").removeClass("d-none");
            $(".reg-success").addClass("d-block");

            $(".reg-empty").removeClass("d-block");
            $(".reg-empty").addClass("d-none");
            
          }
          if (response==0) {
            $(".reg-empty").addClass("d-block");
            $(".reg-empty").removeClass("d-none");
          }
        });
    }
});

   $("#loginpage").click(function(e){
        e.preventDefault();
        var form = new FormData();
        form.append("login_email_id", $("#login_email_id").val());
        form.append("login_user_password",  $("#login_user_password").val());
        $.ajax({

          "url": "http://localhost/Project1/login.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false
        }).done(function (response) {
            console.log(response);
          if (response==0) {
            window.location.replace("http://localhost/Project1/index.php");
            console.log("Login successful");
            $(".succ_login").addClass("d-block");
            $(".succ_login").removeClass("d-none");

            $(".unsucc_login").removeClass("d-block");
            $(".unsucc_login").addClass("d-none");
          }
          if (response==1) {
            console.log("Register first");
            $(".unsucc_login").addClass("d-block");
            $(".unsucc_login").removeClass("d-none");
          }
        });
    });

$("#logout_session").click(function(e){
    window.location.replace("http://localhost/Project1/logout.php");
});


});

