$(function() {

    /*

    	Advanced example - Customized layout
        ====================================

    */

	$('a[data-fancybox="cl-group"]').fancybox({
        idleTime  : false,
		baseClass : 'fancybox-custom-layout',
        margin    : 0,
		infobar   : false,
        thumbs    : {
            hideOnClose : false
        },
        touch : {
            vertical : 'auto'
        },
        buttons : [
            'close',
            'thumbs',
            'slideShow',
            'fullScreen',
        ],
        animationEffect   : false,
        closeClickOutside : false,

        // Customize caption area - append an advertisement
        caption : function( instance ) {
            var advert = '<div class="ad"><p><a href="//fancyapps.com/fancybox/">fancyBox3</a> - touch enabled, responsive and fully customizable lightbox script</p></div>';

            return advert + ( $(this).data('caption') || '' );
        }
	});



});
