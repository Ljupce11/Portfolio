<!DOCTYPE html>
<html>

	<head>
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="css/strana.css">
		<link rel="stylesheet" type="text/css" href="css/animations.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/scroll.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-check-icon.png" />
		<script type="text/javascript" src="RIPPLE/dist/js/lv-ripple.jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="RIPPLE/src/css/lv-ripple.css">
		<script type="text/javascript" src="RIPPLE/src/js/lv-ripple.jquery.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="ui/jquery-ui.min.css">
		<script src="ui/jquery-ui.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<script type="text/javascript" src="js/client.js"></script>
		<script type="text/javascript" src="js/strana.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		
	</head>

	<body>

	<div id="overlay">
		<div class="spinner"></div> 
    </div>
	
	<div class="header">
		<div style="overflow: hidden;">
			<div class="icon">
				<a href="">
					<img src="https://lunchbreakjewelrydotcom.files.wordpress.com/2016/05/rsz_1lb-logo.png?w=260">
				</a>
			</div>
		
			<div class="nav">
				<nav class="header-nav">
					<button href="#about-me-scroll" class="header-buttons about-button">
						<ripple>
							<a href="#about-me-scroll">About Me</a>
						</ripple>
					</button>
					<button class="header-buttons work-button">
						<ripple>
							<a href="#work-scroll">Work</a>
						</ripple>
					</button>
					<button class="header-buttons clients-button">
						<ripple>
							<a href="#clients-scroll">Clients</a>
						</ripple>
					</button>
					<button class="header-buttons contact-button">
						<ripple>
							<a href="#contact-scroll">Contact</a>
						</ripple>
					</button>
				</nav>
			</div>
		
		</div>


	<div class="ljubomir-bojadziev"><h1><span>Ljubomir</span> <span>Bojadziev</span></h1></div>

	<p class="web-developer">Web Developer</p>

	</div>

			<!-- About Me Section -->

	<div id="about-me-scroll" class="about-me">
		<h2 class="header-text">About Myself</h2>
		<nav class="about-icons">
			<div><i id="icons" class="fa fa-desktop" aria-hidden="true"></i></div>
			<div><i id="icons" class="fa fa-code" aria-hidden="true"></i></div>
			<div class="circle-image"></div>
			<div><i id="icons" class="fa fa-keyboard-o" aria-hidden="true"></i></div>
			<div><i id="icons" class="fa fa-book" aria-hidden="true"></i></div>
		</nav>

		<div class="about-me-text">
			<p><strong>At vero eos et accusamus et iusto</strong> odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
			<p><strong>Temporibus autem quibusdam</strong> et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
		</div>

				<!-- Skills -->

		<div class="skills">
		<ul class="skills-rating">
			<div class="skills-first-four">
			<li>Communication</li>
				<li><div class="skills-div rating-1"></div></li>
			<li>Organization</li>
				<li><div class="skills-div rating-2"></div></li>
			<li>Learning</li>
				<li><div class="skills-div rating-3"></div></li>
			<li>Programming</li>
				<li><div class="skills-div rating-4"></div></li>
			</div>
			<div class="skills-second-four">
			<li>Teaching</li>
				<li><div class="skills-div rating-5"></div></li>
			<li>Planning</li>
				<li><div class="skills-div rating-6"></div></li>
			<li>Visual Design</li>
				<li><div class="skills-div rating-7"></div></li>
			<li>UX Design</li>
				<li><div class="skills-div rating-8"></div></li>
			</div>
		</ul>
	</div>

	</div>

		<!-- Work Section -->

	<div id="work-scroll" class="work">
		
		<h2 class="header-text-work">Work</h2>

		<div class="work-sliding-container">

		<div class="work-sliding-images">

		<div class="work-images-container">

			<div class="work-image image-1">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 1</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-2">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 2</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-3">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 3</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-4">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 4</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-5">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 5</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-6">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 6</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-7">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 7</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			<div class="work-image image-8">
				<div class="overlay-thing">
					<div class="opacity"></div>
					<p class="text-here">Project 8</p>

					<div class="zoom-icon-div"><i id="zoom" class="fa fa-search-plus" aria-hidden="true"></i></div>	
				</div>
			</div>

			</div>
		</div>
		
		<div class="work-wrap">
			<div class="work-extended-container">
			<i id="back-icon" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
				<h2>TITLE HERE</h2>
				<div class="work-extended-image"></div>
			</div>
		</div>

		</div>

	</div>


		<!-- Testimonial section -->

	<div id="clients-scroll" class="testimonial">
		
		<h2 class="header-text">Clients</h2>

			<!-- Sliding section -->
		<div class="clients">

				<!-- Client wrapper -->
			<div id="client-1" class="client-content">  

				<div class="client-profile">
					<div id="avatar-1" class="client-image"></div>
					<h4>Founder and CEO</h4>
					<h4><em>Facebook</em></h4>
				</div>

				<div class="client-text">
					<p class="client-paragraph">
						<span>’’</span>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.
						<span>’’</span>
					</p>
				</div>

			</div>

			<div id="client-2" class="client-content">  

				<div class="client-profile">
					<div id="avatar-2" class="client-image"></div>
					<h4>Founder and CEO</h4>
					<h4><em>Google</em></h4>
				</div>

				<div class="client-text">
					<p class="client-paragraph">
						<span>’’</span>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.
						<span>’’</span>
					</p>
				</div>

			</div>

			<div id="client-3" class="client-content">  

				<div class="client-profile">
					<div id="avatar-3" class="client-image"></div>
					<h4>Founder and CEO</h4>
					<h4><em>Nike</em></h4>
				</div>

				<div class="client-text">
					<p class="client-paragraph">
						<span>’’</span>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.
						<span>’’</span>
					</p>
				</div>

			</div>

			<div id="client-4" class="client-content">  

				<div class="client-profile">
					<div id="avatar-4" class="client-image"></div>
					<h4>Founder and CEO</h4>
					<h4><em>YouTube</em></h4>
				</div>

				<div class="client-text">
					<p class="client-paragraph">
						<span>’’</span>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.
						<span>’’</span>
					</p>
				</div>

			</div>

		</div>


		<div class="arrows">
			<div class="prev"><i id="arrow-left" class="fa fa-arrow-left" aria-hidden="true"></i></div>

			<div class="next"><i id="arrow-right" class="fa fa-arrow-right" aria-hidden="true"></i></div>
		</div>

		<div class="client-logos">
			
			<div class="logos-wrap">
				
				<div id="l1" class="cl-logo active">
					<div class="emblem logo-1"></div>
				</div>
				<div id="l2" class="cl-logo">
					<div class="emblem logo-2"></div>
				</div>
				<div id="l3" class="cl-logo">
					<div class="emblem logo-3"></div>
				</div>
				<div id="l4" class="cl-logo">
					<div class="emblem logo-4"></div>
				</div>

			</div>

		</div>

	</div>

	<section id="contact-scroll" class="contact-section">

		<div class="contact">

		<h2 class="get-in-touch">Contact</h2>
			<div class="contact-message">
				<form name="contact-form" id="contact-form" onsubmit="return false">
					<input id="name" type="text" name="name" placeholder="Name...">
					<input id="email" type="email" name="email" placeholder="Email...">
					<textarea name="question" id="contact_question" placeholder="Message..."></textarea></br>
					<input type="submit" name="send" id="send" value="Send">
					<span id="status"></span>
				</form>
			</div>
		</div>
	</section>

	



		<!-- Footer Section -->
	<div class="footer">
		<div class="logo">
			<a href="">
			<img src="css/images/LB_Logo.png">
			</a>
		</div>
	
		<nav class="footer-nav">
			<div class="link">
			<a href="#about-me-scroll">About Me</a>
			</div>
			<div class="link">
			<a href="#work-scroll">Work</a>
			</div>
			<div class="link">
			<a href="#clients-scroll">Clients</a>
			</div>
			<div class="link">
			<a href="#contact-scroll">Contact</a>
			</div>
		</nav>
	
		<div class="paragraph">
			<p class="copyright">Ljubomir Bojadziev | All Rights Reserved 2016</p>
		</div>
	</div>





	<!-- JQUERY -->

	<script type="text/javascript">
			$(document).ready(function() {
				$('.work-image').click(function() {
					/* Act on the event */
					$('.work-sliding-container').animate({left: '-100%'}, 500);
					
				});

				$('#back-icon').click(function(event) {
					/* Act on the event */
					$('.work-sliding-container').animate({left: '0%'}, 500);
					
				});
			});
	</script>

	<script type="text/javascript">
			$.ripple.init();
	</script>



	</body>
</html>
