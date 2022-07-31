<?php 
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }

  if(isset($_GET['id']) )
  {
    
    
    
    $sangi=$_GET['id'];

  

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AGNI WORKERS</title>

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
          <span class="fa fa-thumbs-o-up"></span>AGNI WORKERS
        </a>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <"image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item @@home-active">
              <a class="nav-link" href="index.PHP">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about-active">
              <a class="nav-link effect-3" href="about.php">About</a>
            </li>
            <li class="nav-item @@services-active">
              <a class="nav-link effect-3" href="services.php">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link effect-3" href="contact.php">Contact</a>
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
<!-- breadcrum -->
<section class="w3l-deal-breadcrum">
  <div class="breadcrum">
    <div class="container">
     
    </div>
  </div>
</section>
<!-- //breadcrum -->
<section class="w3l-contact" id="contact">
  <div class="contact1-bg py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center mb-md-5 mb-4">
        <h3>plese book your order</h3>
      </div>
<div>


<link href='https://css.gg/file-document.css' rel='stylesheet'>


<div id="kaka"  class="w3-bar w3-black">

  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Fade')"><h2>how it's work  </h2></button> 


  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Left')"><h2> technisions</h2> </button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Right')"><h2>customer reviwe<h2></button>
  </div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div id="Fade" class="w3-container city w3-animate-opacity" style="display:none">
  <div style="margin-left:130px">
  <div class="w3-padding"> <h1>  how it's work</h1>
  <br><br>
  <i     class="fa fa-edit" style="font-size:36px"></i>
  <br><br>
    <h2> chose the service type </h2>
    we provaid service repair instalation services 
    <br>
    <br><br><br>
  
    <i class="fa fa-file-text" style="font-size:36px;"></i>
    <h2> chose the type of Ac </h2>
    we service all Ac windos &splite
    <br>
    <br><br><br>
  
    <i class="fa fa-clock-o" style="font-size:36px"></i>
<h2> chose your comfortable time  </h2>
     we are work from 9am-9pm  
     <br>
    <br><br><br>
    <i class="fa fa-thumbs-up" style="font-size:36px"></i>
    <h2>  congragilations you will placed your order  </h2>
our proffessnols on the way  

</div>
</div>
</div>

  
  

  <div id="Left" class="w3-container city w3-animate-left" style="display:none">
    <h2>Slide in from left</h2>
    <p>Paris is the capital of France.</p> 
    <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
  </div>

  

  <div id="Right" class="w3-container city w3-animate-right" style="display:none">
    <h2>Slide in from right</h2>
    <p>London is the capital city of England.</p>
    <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  </div>

  <style>
#kaka{

  right: 100%;

}


</style>




<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</div>












      <section class="w3l-index5 py-5">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-4">
        <div class="header-section">
    
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="mydiv"  class="hero-image" >
  
  
<style>
.body {
  <position:fixed>;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.bg-image {
  <position:fixed>;
  background-image: url("assets/images/pexels-pixabay-326055.JPG");
  background-color: #cccccc;
  height: 200px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
  top:-220px;
  width: 500px;
  left:400px;

}

.hero-text {
  <position:fixed>;
  text-align: center;
  position: absolute;
  top: 49%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>

  
  <!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
  <div class="bg-image">
  <div class="hero-text">

  <div class="btn-group-vertical">
  <a  href="ind.php?id= <?php echo $sangi; ?>">
  <button type="button" class="block"      style="color:black" >plesase click hear and countine</button></a>

<style>



.block {
  <position:fixed>;  
  background-image: url("assets/images/cool-background.PNG");
  background-position: center;
   /* Green */
   background-repeat: no-repeat;
  background-size: cover;
  position: relative;


  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 250px;
  font-family: "Audiowide", sans-serif;
  font-size: 18px;


}


</style>



</div>




  </div>
</div>
</div>

<style>
#mydiv {
  <position:fixed>;
  z-index: 9;
  left: 30%;
  
  

  margin: auto;
  width: 50%;
 }
}

</style>

























       <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
          <div class="columns text-lg-left text-center">
            < p>&copy; 2020 Deal. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                W3Layouts</a>
            </p>
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