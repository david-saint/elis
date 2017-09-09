$(document).ready(function(){
	$('.carousel').carousel({
		noWrap: false
	});


	$('.explore-btn').on('click', function() {
		$('.mobile-explore-section').css('width', '100%');
	});

	$('.cancel-explore').on('click', function(){
		$('.mobile-explore-section').css('width', '0%')
	});
});