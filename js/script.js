$(document).ready(function(){
     $(".update-form .up-btn").click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
        // $('#userId').val(id);
         $.ajax({
        type: 'POST',
        url: 'select.php',
        dataType: 'json',
        data: { text1: id},
        success: function(response) {
           $('#email').val(response[0]);
           $('#name').val(response[1]);
           $('#mobile').val(response[2]);
           $('#address').val(response[3]);
           $('#userId').val(response[4]);
        }
    });
});
$("#savebtn").click(function(e){
        e.preventDefault();
        var form = new FormData();
        form.append("email", $("#email").val());
        form.append("name",  $("#name").val());
        form.append("mobile",  $("#mobile").val());
        form.append("address",  $("#address").val());
        form.append("userId",  $('#userId').val());

          $.ajax({

          "url": "http://localhost/Project1/update.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false,
          success :function(response){
                    $('.results').html(response);
                //console.log(response);
                   $('#updatemodal').modal('toggle');

            }
        });
});
$(".update-form .del-btn").click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
        // $('#userId').val(id);
         $.ajax({
        type: 'POST',
        url: 'select.php',
        dataType: 'json',
        data: { text1: id},
        success: function(response) {
          //console.log("reached");
           $('#demail').val(response[0]);
           $('#dname').val(response[1]);
           $('#dmobile').val(response[2]);
           $('#daddress').val(response[3]);
           $('#duserId').val(response[4]);
          //console.log($('#duserId').val());
        }
    });
});
$("#delbtn").click(function(e){
        e.preventDefault();
        var form = new FormData();
        form.append("email", $("#email").val());
        form.append("name",  $("#name").val());
        form.append("mobile",  $("#mobile").val());
        form.append("address",  $("#address").val());
        form.append("duserId",  $('#duserId').val());

          $.ajax({

          "url": "http://localhost/Project1/delete.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false,
          success :function(response){
                    $('.results').html(response);
                //console.log(response);
                   $('#deletemodal').modal('toggle');

            }
        });
});

$('#email').focus(function() {
$(this).blur();
});
$('#demail').focus(function() {
$(this).blur();
});
$('#dname').focus(function() {
$(this).blur();
});
$('#dmobile').focus(function() {
$(this).blur();
});
$('#daddress').focus(function() {
$(this).blur();
});
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
            window.location.replace("http://localhost/Project1/index.php");
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
        e.preventDefault();
          $.ajax({

          "url": "http://localhost/Project1/logout.php",
          processData: false,
          contentType: false,
          success :function(response){
                   $('.log-disp').html(response);
                   $('#logout_sess').modal('toggle');
                    window.location.replace("http://localhost/Project1/index.php");
            }
        });

     
     
});

$("#updateaddress").validate({
         rules: {
            current_user_email: {
                required: true,
                email: true
            },
            new_user_address: {
                required:true
            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("current_user_email", $("#current_user_email").val());
            form.append("new_user_address", $("#new_user_address").val());
            $.ajax({

          "url": "http://localhost/Project1/updateaddress.php",
          "method": "POST",
          "data": form,
           processData: false,
           contentType: false
        }).done(function (response) {
            console.log(response);
            if (response==1){
                //var loadUrl = "http://localhost/Project1/index.php";
                 $('#update-btn').modal('toggle'); 
            //window.location.replace("http://localhost/Project1/index.php");
            $(".address-updated").removeClass("d-none");
            $(".address-updated").addClass("d-block");
            }  
        });
             return false; // required to block normal submit since you used ajax
         }
     });

$("#updatename").validate({
         rules: {
            current_user_email: {
                required: true
                
            },
            new_user_name: {
                required:true
            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("current_user_email", $("#current_user_email").val());
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
            window.location.replace("http://localhost/Project1/index.php");

            $(".name-updated").removeClass("d-none");
            $(".name-updated").addClass("d-block");
            }  
        });
             return false; // required to block normal submit since you used ajax
         }
     });

$("#delete-data").validate({
         rules: {
            email_delete: {
                required: true
            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("email_delete", $("#email_delete").val());
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

$("#session-update-form").validate({
         rules: {
            new_email: {
                required: true            }
        },
         submitHandler: function (form) {
            var form = new FormData();
            form.append("new_email", $("#new_email").val());
            $.ajax({

          "url": "http://localhost/Project1/session_update.php",
          "method": "POST",
          "data": form,
           processData: false,
           contentType: false
        }).done(function (response) {
            console.log(response);
            if (response==1){
                console.log("Email updated successfully");
            // $(".name-updated").removeClass("d-none");
            // $(".name-updated").addClass("d-block");
            }  
        });
             return false; // required to block normal submit since you used ajax
         }
     });

});

