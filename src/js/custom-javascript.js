// Add your custom JS here.
"use strict";
"use strict";
$(document).ready(function () {
  $('#contact-form').submit(function (e) {
    e.preventDefault(); // Prevent the default form submission

    document.getElementById('status').innerHTML = "Sending...";

    var formData = {
      'name': $('input[name=name]').val(),
      'email': $('input[name=email]').val(),
      'subject': $('input[name=subject]').val(),
      'message': $('textarea[name=message]').val()
    };

    $.ajax({
      url: "mail.php",
      type: "POST",
      data: formData,
      success: function (data) {
        $('#status').text(data.message);
        if (data.code === 1) {
          $('#contact-form')[0].reset(); // Reset the form if the email was sent successfully
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        $('#status').text('Error: ' + errorThrown);
      }
    });
  });
});
