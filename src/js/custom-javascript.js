// Add your custom JS here.
"use strict";
function validateForm() {
    // Your validation logic here
    // Return true if the form is valid, or false if it's not
}

jQuery(document).ready(function () {
    jQuery('#status').html("Sending...");
    var formData = {
        'name': jQuery('input[name=name]').val(),
        'email': jQuery('input[name=email]').val(),
        'subject': jQuery('input[name=subject]').val(),
        'message': jQuery('textarea[name=message]').val()
    };

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
