// Add your custom JS here.

(function() {
    "use strict";

    /**
     * Intro type effect
     */
    const typed = document.querySelector('.typed'); // Use `document.querySelector` instead of `select`
    if (typed) {
        let typed_strings = typed.getAttribute('data-typed-items');
        typed_strings = typed_strings.split(',');
        new Typed('.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000
        });
    }
})();
