$(document).ready(function() {
	Active();
	Klik();
	Next();
	Prev();
	Chart();
	About();
	Name();
	Contact();

	$('.about-icons').hide();
});

window.addEventListener('load', function(){
	$('#overlay').css('display', 'none');
})

function Name(){
	$('.ljubomir-bojadziev').animate({top: '40px'}, 600);
}

function Active(){
	$('#client-1').addClass('active-client');
}

function Klik(){
	$('.cl-logo').click(function(){
		var $this = $(this),
			$siblings = $this.parent().children(),
			$position = $siblings.index($this);

		$('.clients').children().removeClass('active-client').eq($position).addClass('active-client');
		$siblings.removeClass('active');
		$this.addClass('active');
	});

}

function Next(){
	$('.next').click(function(){
		var $this = $(this),
			currentActive = $('.logos-wrap').find('.active'),
			position = $('.logos-wrap').children().index(currentActive),
			number = $('.cl-logo').length;
			
		$(currentActive).removeClass('active').next().addClass('active');
		if (position < number - 1) {
			$(currentActive).removeClass('active').next().addClass('active');
		}
		else {
			$('.cl-logo').removeClass('active').first().addClass('active');
		}

		var $this = $(this),
			currentActive = $('.clients').find('.active-client'),
			position = $('.clients').children().index(currentActive),
			number = $('.client-content').length;
			
		$(currentActive).removeClass('active-client').next().addClass('active-client');
		if (position < number - 1) {
			$(currentActive).removeClass('active-client').next().addClass('active-client');
		}
		else {
			$('.client-content').removeClass('active-client').first().addClass('active-client');
		}
	});
}

function Prev(){
	$('.prev').click(function(){
		var $this = $(this),
			currentActive = $('.logos-wrap').find('.active'),
			position = $('.logos-wrap').children().index(currentActive),
			number = $('.cl-logo').length;

		if (position > 0) {
			$(currentActive).removeClass('active').prev().addClass('active');
		}
		else {
			$('.cl-logo').removeClass('active').last().addClass('active');
		}

		var $this = $(this),
			currentActive = $('.clients').find('.active-client'),
			position = $('.clients').children().index(currentActive),
			number = $('.client-content').length;

		if (position > 0) {
			$(currentActive).removeClass('active-client').prev().addClass('active-client');
		}
		else {
			$('.client-content').removeClass('active-client').last().addClass('active-client');
		}
	});
}

function Contact(){
	$('#send').click(function() {
		var name = document.getElementById("name").value,
		email = document.getElementById("email").value,
		message = document.getElementById("contact_question").value;

	var ajax = ajaxObj("POST", "contact.php");
		ajax.onreadystatechange = function() {
			if (ajaxReturn(ajax) == true){
				if (ajax.responseText == "Fail"){
					status.innerHTML = "Something went wrong. Please try again!";
				}
				else {
					console.log("Message Sent!");
					}
				}
			}
		ajax.send('n='+name+'&e='+email+'&m='+message);
	});

}


function Chart(){
	var target = $(".circle-image").offset().top;
	var random = Math.floor((Math.random() * 300) + 200);
	var interval = setInterval(function() {
    if ($(window).scrollTop() >= target) {
    	
        for (var i = 1; i <= 8; i++){
        	$('.rating-'+ i +'').css({
        		width: ''+ getRandomInt(200, 300) +'px',
        		transition: '4s'
        	}); 
        }
        
        clearInterval(interval);
    }
}, 250);
}

function About(){
	var target = $("body").offset().top;
	var interval = setInterval(function() {
    if ($(window).scrollTop() >= target) {
		$('.about-icons').show('slow');
    	}
    }, 250);
}


function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
}