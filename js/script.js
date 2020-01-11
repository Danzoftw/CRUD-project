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

$("#insertform").validate({
         rules: {
            user_email: {
                required: true,
                email: true
            },
            user_name: {
                required: true
            },
             user_mobile: {
                required: true,
                minlength: 10,
                number: true
            },
            user_address:{
                required: true
                 
            }
        },
         submitHandler: function (form) {
             //alert('valid form submission'); // for demo
             var form = new FormData();
        form.append("user_email", $("#user_email").val());
        form.append("user_name", $("#user_name").val());
        form.append("user_mobile", $("#user_mobile").val());
        form.append("user_address", $("#user_address").val());
            $.ajax({

          "url": "http://localhost/Project1/insert.php",
          "method": "POST",
          "data": form,
          "mimeType": "multipart/form-data",
          processData: false,
          contentType: false
        }).done(function (response) {
            console.log(response);
            if (response==1){
            $(".email-registered").removeClass("d-none");
            $(".email-registered").addClass("d-block");
            }
            if(response!=1){
            $(".email-registered").addClass("d-none");
            $(".email-registered").removeClass("d-block");
            }                
            if(response==2){
            $(".mobile-registered").removeClass("d-none");
            $(".mobile-registered").addClass("d-block");
            }
             if(response==12){
            $(".email-registered").removeClass("d-none");
            $(".email-registered").addClass("d-block");

            $(".mobile-registered").removeClass("d-none");
            $(".mobile-registered").addClass("d-block");
            } 
            if(response==0){
            $(".email-registered").addClass("d-none");
            $(".email-registered").removeClass("d-block");

            $(".mobile-registered").addClass("d-none");
            $(".mobile-registered").removeClass("d-block");

            $(".ins-succ").removeClass("d-none");
            $(".ins-succ").addClass("d-block");
          }
        });
             return false; // required to block normal submit since you used ajax
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
            //window.location.replace("http://localhost/Project1/index.php");
            window.location.replace("http://localhost/Project1/index.php");
            //header("location:index.php");
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

$("#updateemail").validate({
         rules: {
            old_user_email: {
                required: true,
                email: true
            },
            new_user_email: {
                required:true,
                email: true
            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("old_user_email", $("#old_user_email").val());
            form.append("new_user_email", $("#new_user_email").val());
            $.ajax({

          "url": "http://localhost/Project1/updateemail.php",
          "method": "POST",
          "data": form,
           processData: false,
           contentType: false
        }).done(function (response) {
            console.log(response);
            if (response==1){
            $(".email-updated").removeClass("d-none");
            $(".email-updated").addClass("d-block");
            }  
        });
             return false; // required to block normal submit since you used ajax
         }
     });

$("#updatename").validate({
         rules: {
            old_user_name: {
                required: true
                
            },
            new_user_name: {
                required:true
            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("old_user_name", $("#old_user_name").val());
            form.append("new_user_name", $("#new_user_name").val());
            $.ajax({

          "url": "http://localhost/Project1/updatename.php",
          "method": "POST",
          "data": form,
           processData: false,
           contentType: false
        }).done(function (response) {
            console.log(response);
            if (response==1){
            $(".name-updated").removeClass("d-none");
            $(".name-updated").addClass("d-block");
            }  
        });
             return false; // required to block normal submit since you used ajax
         }
     });

$("#delete-data").validate({
         rules: {
            name_delete: {
                required: true
            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("name_delete", $("#name_delete").val());
            $.ajax({

          "url": "http://localhost/Project1/delete.php",
          "method": "POST",
          "data": form,
           processData: false,
           contentType: false
        }).done(function (response) {
            console.log(response);
            if (response==1){
            $(".data-deleted").removeClass("d-none");
            $(".data-deleted").addClass("d-block");
            }  
        });
             return false; // required to block normal submit since you used ajax
         }
     });

});

