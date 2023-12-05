// Add your custom JS here.
"use strict";
jQuery.noConflict();

//Active state for side-bar btn
jQuery(document).ready(function($) {
    $(".nav-item").click(function() {
        // Remove active class from all nav-items
        $(".nav-item").removeClass("active");
        // Add active class to the clicked nav-item
        $(this).addClass("active");
    });
});

//Add animation for hero section
jQuery(document).ready(function($) {
    var container = $(".container.hero");

    // Wait for the image to load
    $(".img-fluid-hero").on('load', function() {
        // Add the 'show' class to the container
        container.addClass('show');
    });
});

