$(document).ready(function(){
   $("#btnsubmit").click(function(e){
         e.preventDefault();
        //Email validation
        var res = '<?php echo $rows;';
        if(res=='0')
        {
            $(".reg-empty").addClass("d-block");
            $(".reg-empty").removeClass("d-none");
        }
        if($("#reg_email_id").val()== ''){
            $(".email-empty").addClass("d-block");
            $(".email-empty").removeClass("d-none");
        }
        else if($("#reg_email_id").val()!= ''){
            $(".email-empty").removeClass("d-block");
            $(".email-empty").addClass("d-none");
        }
        //Email validation
        //Password validation
        if($("#password").val()== ''){
            $(".pass-empty").addClass("d-block");
            $(".pass-empty").removeClass("d-none");
        }
        else if($("#password").val()!= ''){
            $(".pass-empty").removeClass("d-block");
            $(".pass-empty").addClass("d-none");
        }
        else if($("#password").val()== '' && $("#user_password_two").val()== '')
        {
            $(".pass-empty").addClass("d-block");
            $(".pass-empty").removeClass("d-none");
            $(".passtwo-empty").addClass("d-block");
            $(".passtwo-empty").removeClass("d-none");
        }
        //Password validation
        //confirm password validation
        if($("#user_password_two").val()== ''){
            $(".passtwo-empty").addClass("d-block");
            $(".passtwo-empty").removeClass("d-none");
        }
        else if($("#user_password_two").val()!= ''){
            $(".passtwo-empty").removeClass("d-block");
            $(".passtwo-empty").addClass("d-none");
        }
        if($("#password").val() != $("#user_password_two").val()){
            $(".pass-error").addClass("d-block");
            $(".pass-error").removeClass("d-none");
        }
        else if($("#password").val() == $("#user_password_two").val())
        {
            $(".pass-error").removeClass("d-block");
            $(".pass-error").addClass("d-none");
        // }
        // //confirm password validation
        // else{
            
            
            var form = new FormData();
            form.append("reg_email_id", $("#reg_email_id").val());
            form.append("password",  $("#password").val());
            $.ajax({

              "url": "http://localhost/Project1/register.php",
              "method": "POST",
              "data": form,
              processData: false,
              contentType: false
            }).done(function (response) {
              console.log(data);
            });
        }
});
});

