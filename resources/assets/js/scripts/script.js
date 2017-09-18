$(document).ready(function(){
	$('.carousel').carousel({
		noWrap: false
	});

	$('.ac-btn').on('click', function(){
		if ($(this).hasClass('r')) {
			$(this).removeClass('r');
		}else {
			$(this).addClass('r');
		}
	});
});