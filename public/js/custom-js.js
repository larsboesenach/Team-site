
// Input here your own custom javascript stuff ;)

$(document).ready(function() {
	$(document).on('click', '#Add-Button', function() {
		$(this).toggleClass('active');
		$('.Entry-input-form').toggleClass('open');
		$('.Entry-emptyspace').toggleClass('open');
		$('.Entry-make-new-entry').toggleClass('enlargeBotPad');
	});
	
	// - - - - - - - - - - - - -
	//	Go to Settings or Goal page
	
	$(document).on('click', '.UserWrap, .Topbar-Logo', function() {
		$('.UserSettings').addClass('show'),
		$('.UserSettings').addClass('Settings-active'),
		$('.UserSettings').removeClass('Goal-active');
	});

	$(document).on('click', '.Sidebar-goal', function() {
		$('.UserSettings').addClass('show'),
		$('.UserSettings').addClass('Goal-active'),
		$('.UserSettings').removeClass('Settings-active');
	});

	$(document).on('click', '.UserClose-button', function() {
		$('.UserSettings').removeClass('show');
	});

	// - - - - - - - - - - - - -
	// 	Activate buttons

	$(document).on('click', '.UserSidebar-button.goal', function() {// Goal button
		$('.UserSettings').addClass('Goal-active'),
		$('.UserSettings').removeClass('Settings-active');
	});

	$(document).on('click', '.UserSidebar-button.settings', function() {// Settings button
		$('.UserSettings').addClass('Settings-active'),
		$('.UserSettings').removeClass('Goal-active');
	});

	// - - - - - - - - - - - - -

	$(document).on('click', '#intake', function() {// Goal button
		$('.exercise-field').addClass('hidden'),
		$('.intake-field').addClass('show'),
		$('.exercise-field').removeClass('show'),
		$('.intake-field').removeClass('hidden');
	});

	$(document).on('click', '#exercise', function() {// Goal button
		$('.exercise-field').addClass('show'),
		$('.intake-field').addClass('hidden'),
		$('.exercise-field').removeClass('hidden'),
		$('.intake-field').removeClass('show');
	});

	// - - - - - - - - - - - - -

	
	
	// $('#continue p').on('click', function() {// Goal button
	// 	$('.Register-content').addClass('hidden'),
	// 	$('.Register-content').removeClass('show'),
	// 	$('.Setgoal-content').addClass('show'),
	// 	$('.Setgoal-content').removeClass('hidden');
	// });

	// $('#finish p').on('click', function() {// Goal button
	// 	$('.Setgoal-content').addClass('hidden'),
	// 	$('.Setgoal-content').removeClass('show'),
	// 	$('.done-content').addClass('show'),
	// 	$('.done-content').removeClass('hidden');
	// });

	// $('.dots li').on('click', function() {// Goal button
	// 	$('.Register-content').addClass('show'),
	// 	$('.Setgoal-content').addClass('hidden'),
	// 	$('.Setgoal-content').removeClass('show'),
	// 	$('.Register-content').removeClass('hidden'),
	// 	$('.done-content').addClass('hidden'),
	// 	$('.done-content').removeClass('show');
	// });


//	$("#Gotobottomofpage").animate({ scrollTop: $(document).height() }, "slow");	
});
	

