$ = jQuery;
$(document).ready(function () {

    var typed = new Typed(".element", {
        strings: $(".element").data('words').split(' '),
        startDelay: 1500,
        typeSpeed: 150,
        loop: true,
        backSpeed: 80,
        backDelay: 1500
    });
    
    /* Contact Form 7 */
    $(this).on('click', '.wpcf7-not-valid-tip', function(){
        $(this).prev().trigger('focus');
        $(this).fadeOut(500,function(){
            $(this).remove();
        });
    });
    $(this).on('focus', '.wpcf7-form-control:not([type="submit"])', function() {
        $(this).parent().addClass('is_active');
    });
    $(this).on('blur', '.wpcf7-form-control:not([type="submit"])', function() {
        if($(this).val() !== "") {
            $(this).parent().addClass('is_active');
        } else {
            $(this).parent().removeClass('is_active');
        }
    });
    $(this).on( 'keyup', 'textarea', function() {
        $(this).height( 0 );
        $(this).height( this.scrollHeight );
    });


    $(".nav_icon").click(function() {
        $(this).toggleClass('is_active').next().stop().toggleClass('is_open');
        $('body').toggleClass('is_overflow');
        return false;
    });

    
    if ($("body").width() < 1024) {

        /* turn off hover on mobile view */
        var touch = 'ontouchstart' in document.documentElement
            || navigator.maxTouchPoints > 0
            || navigator.msMaxTouchPoints > 0;

        if (touch) { // remove all :hover stylesheets
            try { // prevent exception on browsers not supporting DOM styleSheets properly
                for (var si in document.styleSheets) {
                    var styleSheet = document.styleSheets[si];
                    if (!styleSheet.rules) continue;

                    for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                        if (!styleSheet.rules[ri].selectorText) continue;

                        if (styleSheet.rules[ri].selectorText.match(':hover')) {
                            styleSheet.deleteRule(ri);
                        }
                    }
                }
            } catch (ex) {}
        }
    }

});
