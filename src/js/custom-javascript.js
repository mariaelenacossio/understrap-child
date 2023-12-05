// Add your custom JS here.
"use strict";

//active state for side-bar btn
$(document).ready(function() {
    $(".nav-item").click(function() {
        // Remove active class from all nav-items
        $(".nav-item").removeClass("active");
        // Add active class to the clicked nav-item
        $(this).addClass("active");
    });
});
