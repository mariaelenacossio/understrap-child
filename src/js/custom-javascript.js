// Add your custom JS here.

(function() {
    "use strict";

    /**
     * Intro type effect
     */
    const options = {
        stringsElement: '.typed',
        typeSpeed: 100,       // Typing speed in milliseconds
        backSpeed: 50,        // Backspacing speed in milliseconds
        backDelay: 2000,      // Delay before starting to backspace
        startDelay: 500,      // Delay before typing starts
        loop: true,           // Loop the animation
        showCursor: true,     // Show the blinking cursor
      };
    
      const typed = new Typed('.typed', options);
});
