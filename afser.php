
<?php 
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }
  if(isset($_GET['id']) )
  {
    
          
          
    $sangi=$_GET['id'];
    $_SESSION['id_i']=$sangi;
    

      
    }
 ?>




<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>agni workers</title>

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
        <a class="navbar-brand" href="index.html">
          <span class="fa fa-thumbs-o-up"></span> agni workers</a>

        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="navbar-nav mx-auto">
         <a class="nav-link" href="book.php?id= <?php echo $sangi; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about-active">
              <a class="nav-link effect-3" href="afabout.php?id= <?php echo $sangi; ?>  ">About</a>
            </li>
            <li class="nav-item @@services-active">
              <a class="nav-link effect-3" href="afser.php?id= <?php echo $sangi; ?>">Services</a>
            </li>
            <li class="nav-item @@contact-active">
              <a class="nav-link effect-3" href="afcon.php?id= <?php echo $sangi; ?>">Contact</a>
            </li> </ul>
          <div class="phone">
            <a href="tel:+91 9360135395"><span class="fa fa-phone" aria-hidden="true"></span> +91 9360135395</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
</div>
<!--/header-->
<!-- breadcrum -->
<section class="w3l-deal-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Services</p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<div class="w3l-services1">
  <section id="grids5-block" class="py-5">
    <div class="container py-lg-3">
      <div class="header-section mb-5">
        <h3>What is our special </h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-0 grids5-info">
          <a href="#url"><img src="assets/images/b1.jpg" class="img-fluid img-curve" alt="" /></a>
          <h5>agni workers</h5>
          <h4><a href="#url">easy Solutions</a></h4>
          <p>our experts come quicly and solve our problemes.</p>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-5 grids5-info">
          <a href="#url"><img src="assets/images/b3.jpg" class="img-fluid img-curve" alt="" /></a>
          <h5>agni workers</h5>
          <h4><a href="#url">customer survice</a></h4>
          <p>we give best customer service in our language</p>
        </div>
        
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
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
                <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
          <div class="columns text-lg-left text-center">
            <p>&copy; 2020 Deal. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                W3Layouts</a>
            </p>
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
              <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
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