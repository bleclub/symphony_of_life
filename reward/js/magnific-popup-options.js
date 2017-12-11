$(document).ready(function() {
   // MagnificPopup
	var magnifPopup = function() {
		$('.term_popup').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
		});
	};

	var magnifWinner = function() {
		$('.winner_popup').magnificPopup({
			disableOn: 700,
			type: 'image',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
		});
	};

	

	var magnifVideo = function() {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        //fixedContentPos: false
    });
	};

	// Call the functions 
	magnifPopup();
	magnifVideo();
	magnifWinner();

});