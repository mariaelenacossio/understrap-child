// Add your custom JS here.
"use strict";
jQuery.noConflict();

//Active state for side-bar btn
jQuery(document).ready(function($) {
    // Set the first nav-item as active by default
    $(".nav-item:first-child").addClass("active");

    $(".nav-item").click(function() {
        // Remove active class from all nav-items
        $(".nav-item").removeClass("active");
        // Add active class to the clicked nav-item
        $(this).addClass("active");
    });
});

//Active state for btn-bar
jQuery(document).ready(function($) {
 // Remove "active" class from all nav links and the btm-bar initially
 $('.nav-link').removeClass('active');
 $('.btm-bar').removeClass('active');

 $('.nav-link').on('click', function() {
     // Remove "active" class from all nav links
     $('.nav-link').removeClass('active');
     
     // Add "active" class to the clicked nav link
     $(this).addClass('active');

     // Remove "active" class from the btm-bar
     $('.btm-bar').removeClass('active');

     // Add "active" class to the btm-bar if the clicked nav link is active
     if ($(this).hasClass('active')) {
         $('.btm-bar').addClass('active');
     }

     console.log("Nav link clicked:", $(this).attr("href"));
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

    // Add the 'hero-hide' class initially to set up the animation
    container.addClass('hero-hide');

    // Remove the 'hero-hide' class after a delay to trigger the animation
    setTimeout(function() {
        container.removeClass('hero-hide');
    }, 900); // Adjust the delay according to your needs
});

//Typing script for the roles
// jQuery(document).ready(function($) {



jQuery(document).ready(function ($) {
    console.log("DOM fully loaded");

    // Your existing code here
    const typedTextSpan = $(".typed-text");
    const cursorSpan = $(".cursor");

    const textArray = ["Web Designer", "Web Developer", "Front end Developer", "UX/UI Designer"];
    const typingDelay = 200;
    const erasingDelay = 100;
    const newTextDelay = 2000;
    let textArrayIndex = 0;
    let charIndex = 0;
    let isTyping = true;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            if (!cursorSpan.hasClass("typing")) cursorSpan.addClass("typing");
            typedTextSpan.text((i, text) => text + textArray[textArrayIndex].charAt(charIndex));
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            cursorSpan.removeClass("typing");
            isTyping = false;
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            if (!cursorSpan.hasClass("typing")) cursorSpan.addClass("typing");
            typedTextSpan.text((i, text) => textArray[textArrayIndex].substring(0, charIndex - 1));
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            cursorSpan.removeClass("typing");
            isTyping = true;
            textArrayIndex++;
            if (textArrayIndex >= textArray.length) textArrayIndex = 0;
            setTimeout(type, typingDelay + 1100);
        }
    }

    // Start typing animation only if the typedTextSpan is found
    if (typedTextSpan.length) {
        if (textArray.length) setTimeout(type, newTextDelay + 250);
    }
});


//For smooth transition between sections
jQuery(document).ready(function($) {
    // Smooth scrolling for anchor links
    $('a[href*="#"]').on('click', function(event) {
        // Prevent default behavior
        event.preventDefault();

        // Get target section ID from href attribute
        var target = $(this.hash);

        // Check if the target section exists
        if (target.length) {
            // Calculate the offset to scroll to (you can adjust this value)
            var offset = target.offset().top;

            // Animate the scroll
            $('html, body').animate({
                scrollTop: offset
            }, 800); // You can adjust the duration of the scroll animation
        }
    });

    // Your other scripts go here...

});
  



//Parallax effect for the hero img
jQuery(document).ready(function($) {
    var lastScrollTop = 0;
    var mobileThreshold = 768;

    // Set initial state (remove 'hidden' class)
    $('.parallax-overlay').removeClass('hidden');

    function updateParallax() {
        var scrollPosition = $(window).scrollTop();
        $('.parallax-image').css('transform', 'translate3d(0, ' + scrollPosition / 2 + 'px, 0)');

        if ($(window).width() > mobileThreshold) {
            var overlay = $('.parallax-overlay');

            if (scrollPosition > lastScrollTop) {
                // Scrolling down
                overlay.addClass('hidden');
            } else {
                // Scrolling up
                overlay.removeClass('hidden');
            }

            lastScrollTop = scrollPosition;
        }
    }

    // Call updateParallax on scroll using requestAnimationFrame
    var ticking = false;
    $(window).scroll(function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateParallax();
                ticking = false;
            });
            ticking = true;
        }
    });

    // Call updateParallax on window resize
    $(window).resize(function() {
        updateParallax();
    });

    // Initial call to set the initial state
    updateParallax();
});




