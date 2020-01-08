<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS Grid</title>
    <meta charset=utf-8 />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="css/incontent.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/webPortfolioGrid.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="form/form.css" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="js/scroll.min.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
</head>


  <body>
    <div id="canvas-wrap">
     <canvas id="canvas" width="1013px" height="1014px" class="main_img"></canvas>    
      <header id="top_header" role="banner">
                
        <nav id="top_nav" role="navigation">
          <ul data-aos="fade-in" data-aos-duration="2900">
            <li role="listitem"><a title="Home" href="#anchor1" class="smoothScroll" aria-haspopup="true">ABOUT</a></li>
            <li role="listitem"><a title="Work" href="#anchor2" class="smoothScroll" aria-haspopup="true">WORK</a></li>
            <li role="listitem"><a title="Contact" href="#anchor3" class="smoothScroll" aria-haspopup="true">CONTACT</a></li>
          </ul>
        </nav>
                
         <h3 class="title" data-aos="zoom-in">Pura Vida</h3>
                
          <span class="scroll-btn" id="trigger-zoom" data-aos-anchor-placement="top-top">
            <a href="#" role="button">
              <span class="mouse">
                <span></span>
              </span>
            </a>
             <p class="mousetext">scroll me</p>
                <a id="anchor1"></a>
          </span>
      </header>
    </div>

  <section id="about" role="main">
    <header class="headerTitle about" role="heading">ABOUT</header>
    <p class="bio">I am Rick Gipson, a creative developer who enjoys providing solutions to various challenges within the industry of web and e-learning development. I have 10 plus years of combined experience and have taken on multiple roles in developing online e-learning courseware, designing websites, creating graphics and completing a host of other projects. I have also obtained a Bachelor of Science degree in Journalism at The Ohio State University and I continue to stay abreast of the latest technologies through taking online courses and attending coding boot camps. I use the Adobe CC suite, sublime text 3, github, cloud9 and a bevy of other software tools while working on projects. I am currently working to become a front end web developer and have completed the front end web developer learning path at Lynda.com. Overall, I'm an ambitious learner, a developer and an entrepreneur.<a id="anchor2"></a></p>
  </section>
      
    <div class="gridWrapper" id="work" role="section">
      <header class="headerTitle work" role="heading">WORK</header>
    	 <section class="wrapper c1" id="myGrid">

          <div class="pic-1" id="grid" role="grid">
            <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="600"><img src="img/firstTraining_tbn.jpg" class="pic-image" alt="Pic"></div>
            <a href="http://proneinteractivemedia.com/firstTrainingDemo/index.html">
               <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">E-Learning Courses</h1>
               </span></a>
          </div>

         <div class="pic-2" id="grid" role="grid">
           <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="730"><img src="img/hepC_tbn.jpg" class="pic-image" alt="Pic"></div>
           <a href="http://msn.com">
               <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">Websites</h1>
               </span></a>
          </div>
           
         <div class="pic-3" id="grid" role="grid"> 
           <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="760"><img src="img/proneweb_tbn.jpg" class="pic-image" alt="Pic"></div>
            <a href="http://proneinteractivemedia.com/webportfolio1/webPortfolio.php">
               <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">Graphics</h1>
               </span></a>
         </div>
        
           <div class="pic-4" id="grid" role="grid"> 
            <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="770"><img src="img/blueFace3.jpg" class="pic-image" alt="Pic"></div>
            <a href="http://proneinteractivemedia.com/webportfolio1/webPortfolio.php">
               <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">Logos</h1>
               </span></a>
         </div>

         <div class="pic-5" id="grid" role="grid"> 
            <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="780"><img src="img/blueFace1.jpg" class="pic-image" alt="Pic"></div>
            <a href="#">
              <span class="pic-caption bottom-to-top">
               <h1 class="pic-title">Wireframes</h1>
              </span></a>
         </div>

         <div class="pic-6" id="grid" role="grid"> 
            <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="790"><img src="img/mfp_training_tbn.jpg" class="pic-image" alt="Pic"></div>
            <a href="http://proneinteractivemedia.com">
              <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">Structures</h1>
              </span></a>
         </div>

         <div class="pic-7" id="grid" role="grid"> 
            <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="800"><img src="img/blueFace2.jpg" class="pic-image" alt="Pic"></div>
            <a href="http://proneinteractivemedia.com">
              <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">Publications</h1>
              </span></a>
         </div>

         <div class="pic-8" id="grid" role="grid"> 
            <div class="box" data-aos="fade-up" data-aos-anchor="#trigger-zoom" data-aos-anchor-placement="top-top" data-aos-easing= "ease-in-sine" data-aos-duration="800"><img src="img/blueFace4.jpg" class="pic-image" alt="Pic"></div>
            <a href="http://proneinteractivemedia.com">
              <span class="pic-caption bottom-to-top">
                <h1 class="pic-title">Art Work</h1>
              </span></a>
         </div>
      </section>
   </div>

    <a id="anchor3"></a>
    
  <section id="contactform" role="section">
        <header class="headerTitle contact" role="heading">CONTACT</header>
            
        
      <div class="form-container">
        <div class="map" role="presentation">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6911.528779493328!2d-90.09371129101562!3d29.986200478251515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620af6785ad3c7d%3A0x19ca01d4fe3a1336!2s1181+City+Park+Ave%2C+New+Orleans%2C+LA+70119!5e0!3m2!1sen!2sus!4v1515195479875" allowfullscreen></iframe>
        </div>

        <?php include('contactForm_process.php'); ?>
        <form id="contact" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
            <h4>Contact us today and we will reply within 24 hours.</h4>
            <fieldset>
                <legend id="legend">Your Information</legend>
                <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" role="textbox">
                <span class="error"><?= $name_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2" role="textbox">
                <span class="error"><?= $email_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Telephone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3" role="textbox">
                <span class="error"><?= $phone_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Website starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" role="textbox">
                <span class="error"><?= $url_error ?></span>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your Message Here..." name="message" value="<?= $message ?>" tabindex="5" role="textbox"></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" role="button">Submit</button>
            </fieldset>
            <div class="success">
                <?= $success; ?>
            </div>
        </form>
      </div>
  </section>

  <footer id="pageFooter" role="contentinfo">
      <div class="copyrightinfo">
          <p>&copy; 2017 Rick Gipson portfolio</p>
      </div>
  </footer>

  <script src="js/index.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
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
                      }, 1000); // The number here represents the speed of the scroll in milliseconds
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