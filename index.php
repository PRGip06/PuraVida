<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Web Portfolio</title>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		
		<!-- Main CSS Stylesheet-->
		<link rel="stylesheet" type="text/css" href="css/sass-compiled.css" />
		<link rel="stylesheet" type="text/css" href="css/webportfolio.css" />
		<link rel="stylesheet" type="text/css" href="css/incontent.css" />
		<link rel="stylesheet" type="text/css" href="css/form.css" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" />
		
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
		<script src="js/scroll.min.js"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
	</head>

<body id="body">
	<a id="anchor4" class="back-to-top">Back to Top</a>
	<!--Main Navigation-->
	
	<canvas id="canvas"></canvas>
<!-- Navbar -->
	<nav id="mainNavbar" class="navbar navbar-light navbar-static-top">
	<!-- Collapsible Button -->
	<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collapsible content -->
	<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
		<!-- Links -->
		<ul class="navbar-nav text-center">
			<li class="nav-item px-3">
				<a class="nav-link smoothScroll" title="Home" href="#anchor1" aria-haspopup="true">ABOUT<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item px-3">
				<a class="nav-link smoothScroll" title="Work" href="#anchor2" aria-haspopup="true">WORK</a>
			</li>
			<li class="nav-item px-3">
				<a class="nav-link smoothScroll" title="Contact" href="#anchor3" aria-haspopup="true">CONTACT</a>
			</li>
		</ul>
		<!-- Links -->
	</div>
	<!-- Collapsible content -->
</nav>
<!-- /.Navbar-->

<header class="jumbotron jumbotron-fluid" id="intro">
	<div class="container">
		<h1 class="title aos-init aos-animate heroTitle display-4 text-center text-light" data-aos="zoom-in">Pura Vida</h1>
	</div>
</header>

<!--Main Navigation ends-->

<!-- Scroll button -->
<div class="scroll-btn" id="trigger-zoom" data-aos-anchor-placement="top-top">
	<a href="#anchor4"  class="smoothScroll" role="button">
		<span class="mouse border border-white border-2 rounded-pill d-block mx-auto">
			<span></span>
		</span>
	</a>
	<p class="mousetext text-white">scroll me</p>
	<a id="anchor1"></a>
</div>
<!-- Scroll button ends -->
			
<!--Main layout-->
<div class="main">

	<section class="aboutText border-top border-bottom border-white pb-3" id="about" role="main">
	
			<header class="headerTitle about text-center text-uppercase" role="banner">about</header>
				<div class="row">
					<div class="col-lg-12">
						<p class="bioText text-justify my-4">I am Rick Gipson, a creative developer who enjoys providing solutions to various challenges within the industry of web and e-learning development.  I have 15 plus years combined<span id="dots">...</span><span id="more"> of experience and have taken on multiple roles, while freelancing, developing online e-learning courseware, designing websites, creating graphics and completing a host of other projects.  I have also obtained a Bachelor of Science degree in Journalism at The Ohio State University and I continue to stay abreast of the latest technologies through taking online courses and attending coding boot camps.</span>
						</p>
								<button onclick="myFunction()" class="btn btn-link" id="myBtn">More</button>
					</div>
				</div>
	</section>
</div>

<div class="whiteBar"></div>
	<a id="anchor2"></a>

<section class="gridWrapper" id="work" role="region">
	<div class="container grid-container scrollbar-style" id="grid">
		
	<header class="headerTitle work text-center text-uppercase text-white py-5" role="banner">work</header>
	<div class="scrollbar-style mt-4" id="scrollbar">
		<div class="row">
			<div class="col-2 first-column pic-1">
				<div class="rect-one box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="750">
					<a href="projects.php">
						<img src="img/TR_MobileTBN.jpg" class="pic-image img-responsive" alt="Yelp Tropical">
						<div class="pic-caption bottom-to-top">
							<p class="projText">project-1</p>
						</div></a>
					</div>
				</div>
				<div class="col-3 second-column pic-2">
					<div class="rect-two box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="800">
						<a href="videoSite.php">
							<img src="img/videoSite_TBN.jpg" class="pic-image img-responsive" alt="Video Site">
							<div class="pic-caption bottom-to-top">
								<p class="projText">project-2</p>
							</div></a>
						</div>
					</div>
					<div class="col-7	second-column pic-3">
						<div class="rect-three box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="900">
							<a href="losoProject.php">
								<img src="img/losoProj_tbn.jpg" class="pic-image img-responsive" alt="Loso">
								<div class="pic-caption bottom-to-top">
									<p class="projText">project-3</p>
								</div></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-5 first-column pic-4">
							<div class="rect-four box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="950">
								<a href="todoList.php">
									<img src="img/toDo_List.jpg" class="pic-image img-responsive" alt="Loso">
									<div class="pic-caption bottom-to-top">
										<p class="projText">project-4</p>
									</div></a>
								</div>
							</div>
							<div class="col-2 second-column pic-5">
								<div class="rect-five box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="1000">
									<a href="photoBlog.php">
										<img src="img/photoBlog_tbn.jpg" class="pic-image img-responsive" alt="Loso">
										<div class="pic-caption bottom-to-top">
											<p class="projText">project-5</p>
										</div></a>
									</div>
								</div>
								<div class="col-5	 second-column pic-6">
									<div class="rect-six box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="1050">
										<a href="patatap.php">
											<img src="img/circles_tbn.jpg" class="pic-image img-responsive" alt="Loso">
											<div class="pic-caption bottom-to-top">
												<p class="projText">project-6</p>
											</div></a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6 first-column pic-7">
										<div class="rect-seven box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="1100">
											<a href="colorGame.php">
												<img src="img/colorGame.jpg" class="pic-image img-responsive" alt="Loso">
												<div class="pic-caption bottom-to-top">
													<p class="projText">project-7</p>
												</div></a>
											</div>
										</div>
										<div class="col-4 second-column pic-8">
											<div class="rect-eight box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="1150">
												<a href="petDatingApp.php">
													<img src="img/landingPage_tbn.jpg" class="pic-image img-responsive" alt="Loso">
													<div class="pic-caption bottom-to-top">
														<p class="projText">project-8</p>
													</div></a>
												</div>
											</div>
											<div class="col-2	 second-column pic-9">
												<div class="rect-nine box aos-init aos-animate" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing="ease-in-sine" data-aos-duration="1200">
													<a href="bootstrapImgGallery.php">
														<img src="img/photoBlogBS_tbn.jpg" class="pic-image img-responsive" alt="Loso">
														<div class="pic-caption bottom-to-top">
															<p class="projText">project-9</p>
														</div></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

<div class="grayBar">
	<a id="anchor3"></a>
<header class="headerTitle contact text-center text-uppercase py-5" role="banner">CONTACT</header>
</div>
<section id="contactform" role="region">
<div class="row form-container py-3 mb-5">
	<div class="col-lg-6 col-md-6 col-xs6 contact-info text-center">
		
		<div class="marker"><i class="fas fa-map-marker-alt"></i></div>
		<p class="contact-title"><span>Pura Vida</span></p>
		<p class="address"><span>New Orleans, LA</span></p>
		<div class="phone-icon mt-4"><i class="fas fa-phone"></i></div>
		<p class="phone-info"><span>504-957-9244</span></p>
		<div class="email-icon mt-4"><i class="far fa-envelope"></i></div>
		<p class="email-info"><a href="mailto:rgipson1@gmail.com?subject=Mail from web portfolio"><span>purelife@puravida.com</span></a></p>
		<hr class="divider-1">
		
		<div class="map" role="presentation">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6911.528779493328!2d-90.09371129101562!3d29.986200478251515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620af6785ad3c7d%3A0x19ca01d4fe3a1336!2s1181+City+Park+Ave%2C+New+Orleans%2C+LA+70119!5e0!3m2!1sen!2sus!4v1515195479875" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-xs6 formSect-3">
		
		<?php include("contactForm_process.php"); ?>
		<form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
			
			<div class="contactHeader">We would like to hear from you.</div>
			<fieldset>
				
				<input placeholder="Your name" type="text" name="name" tabindex="1" value="<?php echo $name; ?>">
				<span class="error"><?php echo $name_error; ?></span>
			</fieldset>
			<fieldset>
				<input placeholder="Your Email Address" type="text" name="email" value="<?php echo $email; ?>" tabindex="2">
				<span class="error"><?php echo $email_error; ?></span>
			</fieldset>
			<fieldset>
				<input placeholder="Your Telephone Number" type="text" name="phone" value="<?php echo $phone; ?>" tabindex="3">
				<span class="error"><?php echo $phone_error; ?></span>
			</fieldset>
			<fieldset>
				<input placeholder="Your Website http://" type="text" name="url" value="<?php echo $url; ?>" tabindex="4">
				<span class="error"><?php echo $url_error; ?></span>
			</fieldset>
			<fieldset>
				<textarea placeholder="Type your Message Here..." name="message" value="<?php echo $message; ?>" tabindex="5"></textarea>
			</fieldset>
			<fieldset>
				<button name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="Submit" role="button">Submit</button>
			</fieldset>
			<div class="success"><?= $success; ?></div>
		</form>
	</div>
</div>
</section>

	<!--Main layout ends-->

	<!--Footer-->
	<footer id="pageFooter">
      <div class="copyrightinfo">
          <p>&copy; 2019 Rick Gipson portfolio</p>
      </div>
  </footer>
	<!--Footer-->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<script>
		function myFunction() {
			var dots = document.getElementById("dots");
			var moreText = document.getElementById("more");
			var btnText = document.getElementById("myBtn");

			if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "More";
				moreText.style.display = "none";
			}else{
				
				dots.style.display = "none";
				btnText.innerHTML = "Less";
				moreText.style.display = "inline";
			}
		}
</script>


	<!-- Animated lightning bolts -->
	<script src="js/index.js"></script>
  
  <!-- Animate On Scroll --> 
	<!--<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>-->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script>
      AOS.init();
  </script>

	<script>
      $(function() {
          // This will select everything with the class smoothScroll
          // This should prevent problems with carousel, scrollspy, etc...
          $('.smoothScroll').click(function() {
              if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  if (target.length) {
                      $('html,body').animate({
                          scrollTop: target.offset().top
                      }, 1100); // The number here represents the speed of the scroll in milliseconds
                      return false;
                  }
              }
          });
      });

      // Change the speed to whatever you want
      // Personally i think 1000 is too much
      // Try 800 or below, it seems not too much but it will make a difference
  </script>
  <script type="text/javascript">
  //  ****** create the back to top button *******  //

      $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

      var amountScrolled = 500;

      $(window).scroll(function() {
          if ($(window).scrollTop() > amountScrolled) {
              $('a.back-to-top').fadeIn('slow');
          } else {
              $('a.back-to-top').fadeOut('slow');
          }
      });

      $('a.back-to-top, a.simple-back-to-top').click(function() {
          $('html, body').animate({
              scrollTop: 0
          }, 700);
          return false;
      });
  </script>
</body>
</html>