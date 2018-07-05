$(document).ready(function() {
	for (var i = 1; i <= 8; i++){
		$('.image-'+ i +'').css({
			"background-image": "url('css/images/slika"+ i +".jpg')"		
		});
	}

	for (var i = 1; i <= 4; i++){
		$('#avatar-'+ i +'').css({
			"background-image": "url('css/images/face"+ i +".jpg')"		
		});
		$('.logo-'+ i +'').css({
			"background-image": "url('css/images/logo-"+ i +".jpg')"		
		});
	}

	$('.work-image').click(function() {
		var $this = $(this),
			$siblings = $this.parent().children(),
			$position = $siblings.index($this) + 1;
		$('.work-extended-image').css({
			"background-image": "url('css/images/slika"+ $position +".jpg')"
		});

	});

});