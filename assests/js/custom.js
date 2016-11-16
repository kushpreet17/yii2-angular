// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("create_user");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var loginModel = document.getElementById('myLogin');

// Get the button that opens the modal
var btn = document.getElementById("login_user");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closelogin")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
   loginModel.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    loginModel.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        loginModel.style.display = "none";
    }
}
/*
$(function() {
   //alert('dfghj');
  $("#signup").validate({
    rules: {
     firstname: "required",
     lastname: "required",
      email: {
        required: true,
        email: true 
     },
      password: {
        required: true,
        minlength: 8
      },
     phone_no:{
         required: true,
        minlength: 10
      },
      country:{
          required: true,
          
      },
      address:{
          required: true,
         }
    },
  
    messages: {
      firstname: "Please enter your firstname",
     lastname: "Please enter your lastname",
      password: {
       required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
     },
      email: "Please enter a valid email address",
      phone_no:{
       required: "Please enter phone no",
        minlength: "Please enter valid phone no"
      },
      address:{
        required: "Please enter address",
        
      },
      country:{
        required: "Please enter country",
       }
    },

   submitHandler: function(form) {
      console.log('submit handler called');
       event.preventDefault();
      
    }
  });
});
*/



$(document).ready(function() {
    
    $("#btnSubmit").click(function(){
        var firstname = $.trim($("#firstname").val());
        var lastname = $.trim($("#lastname").val());
        var email = $.trim($("#email").val());
        var password = $.trim($("#password").val());
        var phone_no = $.trim($("#phone_no").val());
        var country =  $.trim($("#country").val());
        var address = $.trim($("#address").val());
        var name_regex = /^[a-zA-Z ]{3,20}$/;
        var email_regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var password_regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;//Minimum 8 characters at least 1 Alphabet, 1 Number and 1 Special Character:
    // var phone_no_regex=;
//       console.log(firstname);
//      console.log(email);
       //console.log(name_regex);
        if (firstname == "") {
            $("#err_firstname").text("Please enter first name");
            $("#firstname").focus();
            return false;
        }// Validating Name Field.
        else if (!firstname.match(name_regex)) {
            $('#err_firstname').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
            $("#firstname").focus();
            return false;
        }
        if (lastname == "") {
            $("#err_lastname").text("Please enter last name");
            $("#lastname").focus();
            return false;
        }else if (!lastname.match(name_regex)) {
            $('#err_lastname').text("* For your last name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
            $("#lastname").focus();
            return false;
        }
        if (email == "") {
            $("#err_email").text("Please enter email");
            $("#email").focus();
            return false;
        }else if (!email.match(email_regex)) {
            $('#err_email').text("Please enter valid email*"); // This Segment Displays The Validation Rule For Name
            $("#email").focus();
            return false;
        }
        if (password == "") {
            $("#err_password").text("Please enter password ");
            $("#password").focus();
            return false;
        }else if(!password.match(password_regex)) {
            $('#err_password').text("*For enter password with 8 characters at least 1 Alphabet, 1 Number and 1 Special Character*"); // This Segment Displays The Validation Rule For Name
            $("#password").focus();
            return false;
        }
         if (phone_no == "") {
            $("#err_phone_no").text("Please enter phone no");
            $("#phone_no").focus();
            return false;
        }
         if (country == "") {
            $("#err_country").text("Please enter country");
            $("#country").focus();
            return false;
        }
        if (address == "") {
            $("#err_address").text("Please enter address");
            $("#address").focus();
            return false;
        }
    }); 
});



