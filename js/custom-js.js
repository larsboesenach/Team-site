
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

//
    // Scroll to functionality
    // a.scrollto 
    // href="#ID-element"
    //  scrollt 100px van bovenkant venster van element af met ID gelijk aan href
    //
    $(".scrollto").on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);
      var amount = 100;

        $('html, body').stop().animate({
          'scrollTop': $target.offset().top-amount
        }, 700, 'swing', function () {
          window.location.hash = target;
        });

    });
	
});
	
