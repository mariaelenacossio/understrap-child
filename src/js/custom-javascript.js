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
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");
    
    const textArray = ["Web Designer", "Web Developer", "Front end Developer", "UX/UI Designer"];
    const typingDelay = 200;
    const erasingDelay = 100;
    const newTextDelay = 2000; // Delay between current and next text
    let textArrayIndex = 0;
    let charIndex = 0;
    
    function type() {
      if (charIndex < textArray[textArrayIndex].length) {
        if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
      } 
      else {
        cursorSpan.classList.remove("typing");
          setTimeout(erase, newTextDelay);
      }
    }
    
    function erase() {
        if (charIndex > 0) {
        if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
        charIndex--;
        setTimeout(erase, erasingDelay);
      } 
      else {
        cursorSpan.classList.remove("typing");
        textArrayIndex++;
        if(textArrayIndex>=textArray.length) textArrayIndex=0;
        setTimeout(type, typingDelay + 1100);
      }
    }
    
    document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
      if(textArray.length) setTimeout(type, newTextDelay + 250);
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




