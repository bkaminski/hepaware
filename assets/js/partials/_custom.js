(function( $ ) {

//REMOVE TITLE TAG FROM LINK HOVER
	$('.nav-link').removeAttr('title');

// Swap alignment at mobile
    var $window = $(window);
         function checkWidth() {
            if ($window.width() < 768) {
                $('.donate--footer').addClass('text-center pt-3');
            };
            if ($window.width() >= 768) {
                $('.donate--footer').removeClass('text-center pt-3');
            }
            if ($window.width() < 992) {
                $('.tablet--btn').find('a').removeClass('pr-5 pl-5').css('font-size', '1rem');
            };
            if ($window.width() >= 992) {
                $('.tablet--btn').find('a').addClass('pr-5 pl-5').css('font-size', '1.3rem');
            }
        }
        // Execute on load
        checkWidth();
        // Bind event listener
$(window).resize(checkWidth); 

})( jQuery );
