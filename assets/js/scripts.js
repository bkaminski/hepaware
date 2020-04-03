(function( $ ) {

//REMOVE TITLE TAG FROM LINK HOVER
	$('.nav-link').removeAttr('title');

// Swap alignment at mobile
    var $window = $(window);
         function checkWidth() {
            if ($window.width() < 574) {
                $('.donate--footer').addClass('text-center pt-3');
            };
            if ($window.width() >= 574) {
                $('.donate--footer').removeClass('text-center pt-3');
            }
        }
        // Execute on load
        checkWidth();
        // Bind event listener
$(window).resize(checkWidth); 

})( jQuery );
