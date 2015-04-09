
// Input here your own custom javascript stuff ;)

$(document).ready(function() {
	$('#Add-Button').on('click', function() {
		$('#Add-Button').toggleClass('active');
		$('.Entry-input-form').toggleClass('open');
		$('.Entry-emptyspace').toggleClass('open');
		$('.Entry-make-new-entry').toggleClass('enlargeBotPad');
	});
	
	// - - - - - - - - - - - - -
	
	$('.UserWrap').on('click', function() {
		$('.UserSettings').addClass('show');
	});

	$('.UserSettings').on('click', function() {
		$('.UserSettings').removeClass('show');
	});
	
	// - - - - - - - - - - - - -


//	$("#Gotobottomofpage").animate({ scrollTop: $(document).height() }, "slow");	
});
	
