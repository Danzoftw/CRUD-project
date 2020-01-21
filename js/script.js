$(document).ready(function(){
      
      //$('#content_disp').load('index.php');
      //alert("WOrking");

$('#del_mul').click(function(){
  var checkValues = $('input[name=checkboxlist]:checked').map(function()
            {
                return $(this).val();
            }).get();
   $.ajax({
        
        type: 'POST',
        url: 'deletemultiple.php',
        data: { ids: checkValues },
        success: function(response) {
          getdata();
        }
    });

});

      $( ".results" ).on( "click", ".up-btn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
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
        form.append("name", $("#name").val());
        form.append("mobile", $("#mobile").val());
        form.append("address", $("#address").val());
        form.append("userId", $('#userId').val());

          $.ajax({
          "url": "http://localhost/Project1/update.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false,
          success :function(response){
                    // $('.results').html(response);
                    getdata();
                   $('#updatemodal').modal('toggle');
            }
        });
});
$( ".results" ).on( "click", ".del-btn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
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
                    // $('.results').html(response);
                    getdata();
                   $('#deletemodal').modal('toggle');

            }
        });
});
$("#cb_delete").click(function(e){
        e.preventDefault();
        var form = new FormData();

          $.ajax({

          "url": "http://localhost/Project1/delete.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false,
          success :function(response){
                    // $('.results').html(response);
                    getdata();
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
            $('#Reg').modal('toggle');
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
    $("#insertform").unbind('submit').bind('submit', function(e){
        e.preventDefault();
     
        var formData = new FormData($(this)[0]);
        $.ajax({
          type: 'POST',
          url: 'http://localhost/Project1/insert.php',
          dataType: 'json',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
           }).done(function (response) {
              //$('.results').html(response);
            getdata();
            //console.log(response);
             $('#insertmodal').modal('toggle');
             
            
        });
      });
     $("#loginpage").click(function(e){
        e.preventDefault();
        var form = new FormData();
        form.append("login_email_id", $("#login_email_id").val());
        form.append("login_user_password",  $("#login_user_password").val());
        pageurl = ('crud.php');
        $.ajax({
          "url": "http://localhost/Project1/login.php",
          "method": "POST",
          "data": form,
          processData: false,
          contentType: false,
          success :function(response){
            console.log(response);
              if(response==0)
              {
               window.location.replace("http://localhost/Project1/crud.php");
              }
        }
    });
});



$("#logout_session").click(function(e){
        e.preventDefault();
          $.ajax({

          "url": "http://localhost/Project1/home-disp.php",
          processData: false,
          contentType: false,
           }).done(function (response) {
                  $('#Logout').modal('toggle');
                  window.location.replace("http://localhost/Project1/index.php");
               });
          });
});
function getdata(){
  var form = new FormData();
form.append("user_email", "cool.vaibhaqv15@gmail.com");
form.append("user_name", "Vaibhava");
form.append("user_mobile", "0951168949");
form.append("user_address", "6 Brooklodge Ln Md 21769");

var settings = {
  "url": "http://localhost/Project1/disp.php",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Content-Type": "multipart/form-data; boundary=--------------------------440022383388894510873016"
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
$('#results').html(response);
});
}

function getmain(){
var form = new FormData();
form.append("user_email", "cool.vaibhaqv15@gmail.com");
form.append("user_name", "Vaibhava");
form.append("user_mobile", "0951168949");
form.append("user_address", "6 Brooklodge Ln Md 21769");

var settings = {
  "url": "http://localhost/Project1/home-disp.php",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Content-Type": "multipart/form-data; boundary=--------------------------801410586992815505092846"
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  $('#hmdisp').html(response);
});
}

function logoutinsert(){
  var form = new FormData();
var settings = {
  "url": "http://localhost/Project1/login.php",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Content-Type": "multipart/form-data; boundary=--------------------------744456061707360223360602"
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  $('#logoutdisp').html(response);
});
}



