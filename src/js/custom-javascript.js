// Add your custom JS here.
"use strict";
 // Define the validateForm function
 function validateForm() {
    // Your validation logic here
    // Return true if the form is valid, or false if it's not
    function validateForm() {
        var name =  document.getElementById('name').value;
        if (name == "") {
            document.querySelector('.status').innerHTML = "Name cannot be empty";
            return false;
        }
        var email =  document.getElementById('email').value;
        if (email == "") {
            document.querySelector('.status').innerHTML = "Email cannot be empty";
            return false;
        } else {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(email)){
                document.querySelector('.status').innerHTML = "Email format invalid";
                return false;
            }
        }
        var subject =  document.getElementById('subject').value;
        if (subject == "") {
            document.querySelector('.status').innerHTML = "Subject cannot be empty";
            return false;
        }
        var message =  document.getElementById('message').value;
        if (message == "") {
            document.querySelector('.status').innerHTML = "Message cannot be empty";
            return false;
        }
        document.querySelector('.status').innerHTML = "Sending...";
      }
}

jQuery(document).ready(function () {
    jQuery('#status').html("Sending...");
    var formData = {
        'name': jQuery('input[name=name]').val(),
        'email': jQuery('input[name=email]').val(),
        'subject': jQuery('input[name=subject]').val(),
        'message': jQuery('textarea[name=message]').val()
    };

    jQuery('.btn-primary').click(function () {
        // Call the validateForm function
        if (validateForm()) {
            jQuery.ajax({
                url: "mail.php",
                type: "POST",
                data: formData,
                success: function (data, textStatus, jqXHR) {
                    jQuery('#status').text(data.message);
                    if (data.code) {
                        jQuery('#contact-form').closest('form').find("input[type=text], textarea").val("");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    jQuery('#status').text(jqXHR);
                }
            });
        }
    });
});
