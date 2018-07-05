$(function(){
	SmoothScroll();
});

function SmoothScroll(){
	$('a').click(function() {
		/* Act on the event */
		var target = $($(this).attr('href'));

		if (target.length){
			event.preventDefault();
			$('body').animate({
			scrollTop: target.offset().top}, 500);
		}
	});
}



