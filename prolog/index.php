<?php  
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
   
  }
  session_start();
   
  if(isset($_GET['id']) )
  {
    $named=$_SESSION["usar_name"];
    $id=$_SESSION["red"];      
       $roll=$_GET["r"] ;   
    $sangi=$_GET['id'];
   echo $roll;
  echo"gfgd";
   echo $sangi;
  
  }

  $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
  $sql = "SELECT * FROM `book` WHERE pro_id=$sangi  ";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {


  $aguser="SELECT * FROM book WHERE pro_id = '$sangi'";
  $results=mysqli_query($conn,$aguser);
  while($ram=mysqli_fetch_assoc($results )){

    $ss=$ram["status"];
  
  
  }
 
  echo $ss;



  switch ($ss) {

    case "c":
   
      header('location:http://localhost/website/gtcf/prolog/afr/index.php?id= '.$id.'&roll='.$roll.' ');
     
   
      // echo "afr/index.php";
    break;
    case "r":
   
      header('location:http://localhost/website/gtcf/prolog/bot/index.php?id= '.$id.'&roll='.$roll.' ');
      #   echo "bot/index.php"  ;


    break;

    case "f":
      $onn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
      $sl = "SELECT * FROM `book` WHERE pro_id=$sangi  ";
     $reult = $onn->query($sl);
      while($ram=mysqli_fetch_assoc($reult )){
  
      
    $ord=$ram["order_id"];
      
      }     
    
       
    echo "salam";
    echo $_SESSION["curent_or"];     
    $ord=$_SESSION["curent_or"]=$ord;
    echo $_SESSION["curent_or"]; 

    $_SESSION["roll"]=$roll;
     header('location:http://localhost/website/gtcf/prolog/prise/index.php?id='.$id.'&r='.$roll.' ');
      #   echo "bot/index.php"  ;


    break;


    default:
    echo "table1/index.php";        



  }
  

if($ss=="c"){

  $ram=2;
}else{



$ram=1;
}
 }else{
   $ram=0;
 }
echo $ram;


 


  ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Deal a Corporate Category Bootstrap Responsive Website Template - Home :: W3layouts</title>

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
          <span class="fa fa-thumbs-o-up"></span> agni workers
        </a>
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
            <li class="nav-item active">
              <a class="nav-link" href="index.php?id=<?php echo $sangi; ?>&r=<?php echo $roll; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about-active">
              <a class="nav-link effect-3" href="about.php?id= <?php echo $sangi; ?>&r=<?php echo $roll; ?>">payment </a>
            </li>
            <li class="nav-item @@services-active">
              <a class="nav-link effect-3" href="services.php?id= <?php echo $sangi; ?>&r=<?php echo $roll; ?>">order histery</a>
            </li>
            <li class="nav-item @@contact-active">
              <a class="nav-link effect-3" href="contact.php?id= <?php echo $sangi; ?>&r=<?php echo $roll; ?>">Contact</a>
            </li>
          </ul>
          <div class="phone">
            <a href="tel:9360135395"><span class="fa fa-phone" aria-hidden="true"></span> 9360135395</a>
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
      <h1>hello <?php  echo $named;  ?></h1>
      <p class="mt-2 mb-md-5 mb-4">We think you want orders plese click hear and acceopt orders </p>
      <a href="<?php 
      switch ($ram) {

        case "2":
          echo "afr/index.php";
        break;
        case "1":
          echo "bot/index.php"  ;
        break;
        default:
        echo "table1/index.php";        


 
      }
      
      
      
      
//       if($ram==1){

// echo "bot/index.php"  ;
// }else{
//   echo "table1/index.php";
// }  ?>?id=<?php echo $id; ?>&roll=<?php echo$roll ;?>" class="btn btn-outline-primary theme-button">click and book</a>
    </div>
  </div>
</div>
<!-- stats -->

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
<footer>
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
                    Deal, 433 California St, Suite 300 San Francisco,
                    CA 94104, USA</p>
                </div>
                <div class="ad-text-inf">
                  <p><span class="color-ubd">Email :</span> <a href="mailto:mailid@mail.com">mailid@mail.com</a></p>
                </div>
                <div class="ad-text-inf">
                  <p><span class="color-ubd">Phone :</span> <a href="tel: 9360135391">9360135395</a></p>
                </div>
              </div>
              <div class="col-md-4 column mt-md-0 mt-4">
                <h3>Company</h3>
                <ul class="footer-gd-16">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="#blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 column column3 mt-lg-0 mt-5">
            <h3>Latest Posts</h3>
            <ul class="list-unstyled d-flex flex-wrap">
              <li class="">
                <div class="row">
                  <a class="col-md-5 col-4" href="#blog-single.html">
                    <img class="rounded img-fluid img-responsive" src="assets/images/b3.jpg" alt="image">
                  </a>
                  <div class="col pl-0">
                    <a class="footer-small-text" href="#blog-single.html">Lorem ipsum dolor sit amet adipiscin elit</a>
                    <div class="text-sub-small">Mar 31st</div>
                  </div>
                </div>
              </li>
              <li class="mt-md-0 mt-2">
                <div class="row my-2 my-md-3">
                  <a class="col-md-5 col-4" href="#blog-single.html">
                    <img class="rounded img-fluid img-responsive" src="assets/images/b2.jpg" alt="image">
                  </a>
                  <div class="col pl-0">
                    <a class="footer-small-text" href="#blog-single.html">Cras at nunc sagittis, suscipit dolor</a>
                    <div class="text-sub-small">Apr 03rd</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 column column4 mt-lg-0 mt-5">
            <h3>Subscribe </h3>
            <div class="end-column">
              <h4>Get latest updates and offers.</h4>
              <form action="#" class="subscribe" method="post">
                <input type="email" name="email" placeholder="Email Address" required="">
                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
              </form>
              <p>Subscribe To Stay Informed On Services, Offers And Discounts.</p>
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