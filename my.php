<?php 
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }
  
  session_start();
  
  if(isset($_GET['id']) )
  {
    
          
          
    $sangi=$_GET['id'];
    $_SESSION['id_i']=$sangi;
    

      
    }
 
    
//     $conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
//     $aguser="SELECT * FROM `pro` WHERE 	`cus_key` ='$sangi'";
//     $results=mysqli_query($conn,$aguser) ;
    
// echo $aguser;

//       while($ram = mysqli_fetch_assoc($results)){
//          $sta=$ram["status_g"];
//         //  $ty=$ram["prde"];
//         //      $tu = $ram["qty"];     
//         //       $uy=$ram["phone"];
//         //         $gh=$ram["time_t"];
//         //        $rfg=$ram["lati"];
//         //      $er=$ram["logi"];
//         //     $tbh=$ram["cus_id"];
//         //       $tsd=$ram["cus_key"];
//         //       $ghg =$ram["pin"];
//         //        $bh=$ram["street"];
            
         
//         //        $tsw=$ram["city"];
//         //       $ghq =$ram["door"];
//         //        $ba=$ram["name_cs"];
               
              
      
// echo $sta;
      

// if($sta=="p"){
//     $koki="your order is pending";
//   }
//   if($sta=="r")
//   {
//     $koki="your order is acepted by our partner";
//   }

  

      
// }


if(isset($_GET['p']) ){
  $p=$_GET['p'];   
  echo $p;
$conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $aguser="SELECT * FROM `userslogin` WHERE cr_st = $p";
$results=mysqli_query($conn,$aguser);


  // output data of each row
  while($ram = mysqli_fetch_assoc($results)) {
         $we= $ram["st"];
  }

  
if($we=="p"){
    $koki="your order is pending";
  }
  if($we=="r")
  {
    $koki="your order is acepted by our partner";
  }
 if($we=="n"){

$koki="you have no order plese place our order";

 }
$conn->close();    

}
elseif(isset($_SESSION["idg"])){

   $p=$_SESSION["idg"];

   $conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   
    $aguser="SELECT * FROM `userslogin` WHERE cr_st = $p";
   $results=mysqli_query($conn,$aguser);
   
   
     // output data of each row
     while($ram = mysqli_fetch_assoc($results)) {
            $we= $ram["st"];
     }
   
     
   if($we=="p"){
       $koki="your order is pending";
     }
     if($we=="r")
     {
       $koki="your order is acepted by our partner";
     }
    if($we=="n"){
   
   $koki="you have no order plese place our order";
   
    }
   $conn->close();    
   




  }

 
  
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
        <a class="navbar-brand" href="index.php">
          <span class="fa fa-thumbs-o-up"></span> agni workers
        </a>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <"image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->

      <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #FFFFFF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  top: 15px;

  cursor: pointer;
  width: 100%;
}

button:hover {
  top: 150px;

  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


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
            <li class="nav-item @@contact-active">
            <a name="tj"   onclick="document.getElementById('id01').style.display='block'"  class="nav-link effect-3"   ">my order details</a>
            <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
  <div class="order-list">
               <p>Order</p>
               <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style> 
 

<table>
  <tr>
    <th>order detail </th>
    <th> <?php      

if(isset($_GET['p']) )
{

echo $koki;

}
elseif(isset($_SESSION["idg"])){
  echo $koki;



}else{

  echo "you have dont place any order plese place our order" ;
}



?>
 
</th>
    </tr>
  
 </table>




              
   </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

            
            
            
            
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
<section class="w3l-index5 py-5">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-4">
        <div class="header-section">
        <h3>hi<br><h5> <?php echo  $_SESSION['usar_name'];  ?></h5> </h3>
          <p class="mt-3 mb-lg-5 mb-4"> we have best customer care service.</p>
        </div>
        <a href="contact.php" class="btn btn-outline-primary theme-button">Contact Us</a>
      </div>
<br><br>


      <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
        <div class="img-block">
          <a href="http://localhost/website/gtcf/shoppingcart/index.php?id= <?php echo $sangi; ?>"    >
            <img src="assets/images/ac.png" class="img-fluid img-curve" alt="image" />
            <span class="title"> if you whant service or repair  our ac plese clik hear our  profacinal workers waiting for your order </span>
          </a>
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
