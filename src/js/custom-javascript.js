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

    // Add the 'hero-hide' class initially to set up the animation
    container.addClass('hero-hide');

    // Remove the 'hero-hide' class after a delay to trigger the animation
    setTimeout(function() {
        container.removeClass('hero-hide');
    }, 900); // Adjust the delay according to your needs
});

//Parallax effect for hero section and typing script for the roles
jQuery(document).ready(function($) {
        var roleText = $("#roleText .role");
        var cursorSpan = $("#roleText .cursor");
    
        var roles = ["Front-end Developer", "Content Creator", "UX/UI Designer"];
        var currentRoleIndex = 0;
    
        function typeRole(role, index, callback) {
            var typedRole = "";
            var roleInterval = setInterval(function() {
                typedRole += role[index];
                roleText.text("Web Designer " + typedRole);
                index++;
                if (index >= role.length) {
                    clearInterval(roleInterval);
                    callback();
                }
            }, 100); // You can adjust the typing speed (milliseconds per character)
        }
    
        function changeRole() {
            typeRole("", 0, function() {
                roleText.fadeOut(400, function() {
                    typeRole(roles[currentRoleIndex], 0, function() {
                        roleText.fadeIn(400, function() {
                            // Increment the role index, and reset if it exceeds the number of roles
                            currentRoleIndex = (currentRoleIndex + 1) % roles.length;
                        });
                    });
                });
            });
        }
    
        // Set an interval to change the role every 3000 milliseconds (3 seconds)
        setInterval(changeRole, 3000);
    
        // Text typing effect
        const textArray = ["hard", "fun", "a journey", "LIFE"];
        const typingDelay = 200;
        const erasingDelay = 100;
        const newTextDelay = 2000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;
    
        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.hasClass("typing")) cursorSpan.addClass("typing");
                roleText.text("Web Designer " + textArray[textArrayIndex].substring(0, charIndex + 1));
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.removeClass("typing");
                setTimeout(erase, newTextDelay);
            }
        }
    
        function erase() {
            if (charIndex > 0) {
                if (!cursorSpan.hasClass("typing")) cursorSpan.addClass("typing");
                roleText.text("Web Designer " + textArray[textArrayIndex].substring(0, charIndex - 1));
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.removeClass("typing");
                textArrayIndex = (textArrayIndex + 1) % textArray.length;
                setTimeout(type, typingDelay + 1100);
            }
        }
    
        // Initiate the typing effect on DOM Load
        $(document).ready(function() {
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });
    });
    
    
    

