<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Leno is a mobile app landing page template made with HTML and Bootstrap to help you present mobile apps to the online audience and convince visitors to download from the app stores">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="Grain Films Contact" /> <!-- website name -->
	<meta property="og:site" content="https://grain-films.com/contact" /> <!-- website link -->
	<meta property="og:title" content="Grain Films Contact"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Contact us" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://grain-films.com/contact" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Webpage Title -->
    <title>Contact - Grain Films</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="././static/css/bootstrap.css" rel="stylesheet">
    <link href="././static/css/fontawesome-all.css" rel="stylesheet">
    <link href="././static/css/swiper.css" rel="stylesheet">
	<link href="././static/css/magnific-popup.css" rel="stylesheet">
	<link href="././static/css/styles.css" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="././static/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Leno</a> -->

      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="home"><img src="././static/images/logo.svg" alt="alternative"></a>

      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Films</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">

              <a class="dropdown-item page-scroll popup-with-move-anim" href="#Fetch-lb">FETCH</a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item page-scroll popup-with-move-anim" href="#zgub-lb">Zwischen Gut und Böse</a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item page-scroll popup-with-move-anim" href="#TheHit-lb">The Hit</a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item page-scroll popup-with-move-anim" href="#TWarrior-lb">TWarrior</a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item page-scroll popup-with-move-anim" href="#HeroToZero-lb">Hero to Zero</a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item page-scroll popup-with-move-anim" href="index.html#Valhalla-lb">Valhalla</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="contact">Contact</a>
          </li>
        </ul>
        <!--<span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>-->
      </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
  </nav> <!-- end of navbar -->
  <!-- end of navigation -->

    <!-- Header -->
    <header class="ex-header bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Contact info</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Form -->
    <div class="ex-form-1 pt-6 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p class="mb-5">We would love to work with you! You can reach us through the contact form below, or send us an email to <a href="mailto:info@grain-films.com">info@grain-films.com</a></p>

                    <!-- Contact Form -->
                    <form id="contactForm" class="mb-6" data-toggle="validator" data-focus="false" action="./php/contactform.php">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit Message</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-form-1 -->
    <!-- end of form -->

    <!-- Footer -->
    <div class="footer bg-dark-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!--<div class="footer-col first">
              <h6>About Leno</h6>
              <p class="p-small">Leno is a mobile app HTML Bootstrap landing page template built to help you create great basic websites for apps and grow the user base.</p>
            </div> <!-- end of footer-col -->
            <div class="footer-col second">
              <h6>Links</h6>
              <ul class="list-unstyled li-space-lg p-small">
                <li><a href="contact">Contact us</a></li>
                <li>Important: <a href="impressum">Impressum</a></li>
              </ul>
            </div> <!-- end of footer-col -->
            <div class="footer-col third">
              <!--<span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-pinterest-p fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
              </span>-->
              <p class="p-small">We would love to hear from you <a href="mailto:info@grain-films.com"><strong>info@grain-films.com</strong></a></p>
            </div> <!-- end of footer-col -->
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-dark-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">Copyright © <a href="https://grain-films.com">Grain-Films.com</a></p>
          </div> <!-- end of col -->
        </div> <!-- enf of row -->
      </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="././static/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="././static/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="././static/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="././static/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="././static/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="././static/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="././static/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="././static/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
