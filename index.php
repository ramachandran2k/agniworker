<?php

// Create connection

$conn=mysqli_connect('localhost','agni_workers','celkonc345','visit');

// Check connection
if(isset($_GET['sp'])){
  
$md=$_GET['sp'];
$sql = "INSERT INTO `visiting` (mediyum,value)
VALUES ('$md', '1')";

$conn->query($sql);
  }
else
{ 
  $sql = "INSERT INTO `visiting` (mediyum,value)
  VALUES ('self', '1')"; 
  $conn->query($sql); 

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --><link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>AGNI WORKERS 
</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<div class="w3l-top-header">
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <a class="navbar-brand" href="index.php">
          <span class="fa fa-thumbs-o-up"></span> agni workers
        </a>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about-active">
              <a class="nav-link effect-3" href="about.php  ">About</a>
            </li>
            <li class="nav-item @@services-active">
              <a class="nav-link effect-3" href="services.php">Services</a>
            </li>
            <li class="nav-item @@contact-active">
              <a class="nav-link effect-3" href="contact.php">Contact</a>
            </li>
            <li class="nav-item @@login-active">
              <a class="nav-link effect-3" href="login.php  ">login</a>
            </li>
            <li class="nav-item @@register-active">
              <a class="nav-link effect-3" href="sine/sing.php ">register</a>
            </li>
            </ul>
          <div class="phone">
            <a href="tel:+91 9360135395"><span class="fa fa-phone" aria-hidden="true"></span> +91 9360135395</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
</div>
<!--/header-->
<div class="w3l-banner">
  <div class="banner-image">

  </div>
  <div class="banner-content">
    <div class="container">
      
      
      
      
      <h1>we are make your ac more cooler</h1>
      <p class="mt-2 mb-md-5 mb-4">we are have best customer service in our language and we will take care our appliances</p>
      
      <style>
.dropbtn {
  background-color: pink;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: pink;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: pink;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: pink;}
</style>

<div class="dropdown">
  <button class="btn btn-outline-primary theme-button">Learn More</button>
  <div class="dropdown-content">
    <a href="prolog/prolog.php">login as a professional</a>
    <a href="about.php">Learn More</a>

  </div>
</div>
            
    </div>

  </div>
</div>
<section class="w3l-index1">
  <div class="services-6 py-5">
    <div class="container py-lg-3">
     
    <div class="row story-6-grids text-left mt-lg-5 mt-4">
        <div class="col-lg-5 story-gd-left">
          <img src="assets/images/serve.jpg" class="img-fluid img-curve" alt="">
          </div>
          <div class="serve-6-hny">
            <div class="serve-6-hny-icon">
              <span class="fa fa-newspaper-o"></span>
            </div>
            <div class="serve-6-hny-info">
              <h6><a href="services.html">professional workers </a></h6>
              <p>waiting for you order</p>
            </div>

          </div>
          <div class="serve-6-hny">
            <div class="serve-6-hny-icon">
              <span class="fa fa-line-chart"></span>
            </div>
            <div class="serve-6-hny-info">
              <h6><a href="services.html">customer reviews</a></h6>
              <p>we are tyring every day to develop our self.</p>
            </div>

         
          </div>
        </div>

      </div>

    </div>
  </div>
  </div>
</section>
<!-- stats -->
<section class="w3l-empty-bg">

</section>
<section class="w3l-stats py-5" id="stats">
  <div class="gallery-inner container py-lg-3">
    <div class="header-section mb-md-5 mb-4">
      <h3>our report</h3>
    </div>
    <div class="row stats-con text-white">
      <div class="col-lg-3 col-sm-6">
        <div class="stats_info counter_grid">
          <div class="stat-icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <p class="counter">50000</p>
          <h4>Orders</h4>
        </div>
      </div>
        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
        <div class="stats_info counter_grid1">
          <div class="stat-icon">
            <span class="fa fa-smile-o"></span>
          </div>
          <p class="counter">4500</p>
          <h4>Satisfied Clients</h4>
        </div>
      </div>
       </div>
      
</section>
<!-- //stats -->
<section class="w3l-index2 py-5">
	<div class="container py-lg-3">
		<div class="row">
			<div class="col-lg-6 about-left mb-lg-0 mb-5">
				<div class="header-section">
					<h3>participate our jorny and suport </h3>
					<p class="mt-3">plese login or register and place our order</p>
				</div>
				<a href="login.php" class="btn theme-button btn-secondary mt-lg-5 mt-4 mr-2">login</a>
				<a href="sine/sing.php" class="btn theme-button btn-outline-secondary mt-lg-5 mt-4">register</a>
			</div>
			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-2 pl-lg-5">
				<img src="assets/images/emp2.jpg" alt="" class="img-fluid img-curve" />
			</div>
		</div>
	</div>
</section>
 <section class="w3l-index3" id="service">
    <div class="features-with-17_sur pt-lg-5 pt-3 pb-5">
      <div class="container pb-lg-3">
        <div class="features-with-17-top_sur">
          <div class="row">
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span>01</span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="services.phpl">Professional workers</a></h6>
                  <p>we have best and professional workers and he is also waiting for your service</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span>02</span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="about.php">we are ,made with indian</a></h6>
                  <p>this company full made wiht indians and the developes are also indians</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-lg-0 mt-5">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span>03</span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="services.php">best customer service </a> </h6>
                  <p>we have best customer service in our own language</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="w3l-index5 py-5">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-4">
        <div class="header-section">
        <h3>we have first class solutions
          for our clients.</h3>
          <p class="mt-3 mb-lg-5 mb-4"> we have best customer care service.</p>
        </div>
        <a href="contact.php" class="btn btn-outline-primary theme-button">Contact Us</a>
      </div>
      <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
        <div class="img-block">
          <a href="about.php">
            <img src="assets/images/serve.jpg" class="img-fluid img-curve" alt="image" />
            <span class="title">professional workers</span>
          </a>
        </div>
       
      </div>
      <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4">
        <div class="img-block">
          <a href="about.php"> <img src="assets/images/about.jpg" class="img-fluid img-curve" alt="image" />
            <span class="title">User Experience</span>
          </a>
        </div>
        
      </div>
    </div>
  </div>
</section>
<div class="video-responsive">
	<video class="video" muted="muted" loop="loop" autoplay="autoplay">
		<source src="assets/videos/video.mp4" type="video/mp4">
		Your browser does not support HTML5 video.
	</video>

	<canvas class="canvas"></canvas>

	<div id="over_video">
		<div class="bg-mask">
			<div class="container">
				<div class="video-heading">
					<h3>AGNI WORKERS</h3>
					<a href="contact.php" class="btn btn-light theme-button mt-5">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.video-heading {
		max-width: 750px;
		margin: 0 auto;
	}

	.video-heading h3 {
		font-size: 60px;
		opacity: 0.8;
		line-height: 58px;
		font-weight: 300;
		text-transform: capitalize;
		color: #fff;
	}

	.video-responsive {
		padding-bottom: 600px;
		position: relative;
		width: 100%;
	}

	.canvas,
	.video {
		left: 0;
		position: absolute;
		top: 0;
		background: #000;
		z-index: 5;
		overflow: hidden;
		width: 100%;
		height: 600px;
		object-fit: cover;
	}

	#over_video {
		position: absolute;
		width: 100%;
		height: 100%;
		text-align: center;
		top: 0;
		z-index: 10;
		color: #FFF;
	}

	.bg-mask {
		background: rgba(0, 0, 0, 0.3);
		height: inherit;
		display: grid;
		align-items: center;
		padding: 0 15px;
	}

	@media screen and (max-width: 568px) {

		.canvas,
		.video {
			height: 400px;
		}

		.video-responsive {
			padding-bottom: 400px;
		}


		.video-heading h3 {
			font-size: 35px;
			line-height: 48px;
			margin-bottom: 20px;
		}
	}
</style>

<script src="assets/js/canvas-video-player.js"></script>


<script>
	var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);

	if (isIOS) {

		var canvasVideo = new CanvasVideoPlayer({
			videoSelector: '.video',
			canvasSelector: '.canvas',
			timelineSelector: false,
			autoplay: true,
			makeLoop: true,
			pauseOnClick: false,
			audio: false
		});

	} else {

		// Use HTML5 video
		document.querySelectorAll('.canvas')[0].style.display = 'none';

	}
</script>
<!-- scripts -->
<!-- News Section -->
  <!-- footer -->
  <section class="w3l-footer">
    <div class="w3l-footer-16-main py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="row">
              <div class="col-md-8 column">
                <h3>Contact</h3>

                <div class="ad-text-inf">
                  <p><span class="color-ubd">Address :</span>
                    3/540,bagavathi street,medavakkam,chennai-600100,tamilnadu,india</p>
                </div>
                <div class="ad-text-inf">
                  <p><span class="color-ubd">Email :</span> <a href="mailto:ramachandrantamil007@gmail.com">ramachandrantamil007@gmail.com</a></p>
                </div>
                <div class="ad-text-inf">
                  <p><span class="color-ubd">Phone :</span> <a href="tel:+91 9360135395">+91 9360135395</a></p>
                </div>
              </div>
              <div class="col-md-4 column mt-md-0 mt-4">
                <h3>Company</h3>
                <ul class="footer-gd-16">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="services.php">Services</a></li>
                  
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
          
          
        
          </div>
          <div class="columns-2 mt-lg-0 mt-3">
            <ul class="social">
              <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
              </li>
              <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              </li>
              <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </li>
              <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
              </li>
              <li><a href="foradmin/index.php"><span class="fa fa-github" aria-hidden="true"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- //move top -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
  </section>
  <!-- //footer -->
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>

<!-- Template JavaScript -->
<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="assets/js/owl.carousel.js"></script>

<!-- testimonials for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //testimonials script for owlcarousel -->

<!-- for blog carousel slider -->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      stagePadding: 20,
      margin: 15,
      nav: false,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<!-- //for blog carousel slider -->

<script>
  var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

  function animate() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;

    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

    $('.banner-image').css({
      '-webit-transform': translate,
      '-moz-transform': translate,
      'transform': translate
    });

    window.requestAnimationFrame(animate);
  }

  $(window).on('mousemove click', function (e) {

    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
    lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
    lFollowY = (10 * lMouseY) / 100;

  });

  animate();
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>