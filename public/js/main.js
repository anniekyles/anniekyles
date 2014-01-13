$(function(){
	$('.fa-bars').on('click', function(){
		// console.log($(this).next());
		$(this).next().slideToggle();
		console.log('toggled');
	});

	console.log($(window).width());

	if($(window).width() >= 480){
		console.log('Window is wider than 480');
		$('.fancybox').fancybox();
	}
});

$(window).resize(function(){
	if($(window).width() >= 480){
		console.log('Handler for .resize() called');
		$('.fancybox').fancybox();

	}

});