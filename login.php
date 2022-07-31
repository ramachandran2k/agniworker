<?php

ob_start();
session_start();
?>

<?php

if(isset($_GET['active'])){

echo 'your account is activated plese login';

}



   


$conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
?>
<?php 
if(isset($_POST['login'])){



	

echo  $_COOKIE["email"];;

	$act=1;
$email=$_POST["email"];
$password=$_POST["password"];



$aguser="SELECT * FROM `userslogin` WHERE email = '$email' AND active='$act'";
$results=mysqli_query($conn,$aguser);

while($ram=mysqli_fetch_assoc($results )){


	$agid=$ram["user_id"];
	$agname=$ram["us_name"];
	$agemail=$ram["email"];
	$agpassword=$ram["passwor"];
	$agmobile=$ram['mobil'];
	$active=$ram['active'];
     $key=$ram["us_key"];
     $st=$ram["st"];
	 
}

if($agemail ==$email && $act==$active && $password== $agpassword ){

	$_SESSION["favcolor"]=$agid;

	if(isset($_POST['rem'])){

		setcookie ("email", $_POST["email"], time()+ (10 * 365 * 24 * 60 * 60));  
		setcookie ("pass", $_POST["password"], time()+ (10 * 365 * 24 * 60 * 60));  
 
			}	
		if($st=='r' || $st=='p'){
 	header('location:book.php?id='.$agid.'&at=1');
  $_SESSION["usar_name"]=$agname;
		}else{
		header('location:book.php?id='.$agid.'');
			$_SESSION["usar_name"]=$agname;
			  

		}



}else{
	header('location:http://localhost/website/gtcf/login.php?attfase');
}

}
 

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>AGNI WORKERS</title>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
	<!-- login form -->
	<section class="w3l-login">
		<div class="overlay">
			<div class="wrapper">
				<div class="logo">
					<a class="brand-logo" href="index.php">Snow login form</a>
				</div>
				<div class="form-section">
					<h3>Login</h3>
					<h6>To continue with Us</h6>
					<form action="login.php" method="post" class="signin-form">
						<div class="form-input">
							<input type="text"  name="email" placeholder="email or phone number" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"  required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" required="">
						</div>
						<?php    
						
						if(isset($_GET['attfase'])){

							echo 'your email or password is in correct';
							
							}
							
						?>
						<label class="check-remaind">
							<input type="checkbox" name="rem">
							<span class="checkmark"></span>
							<p   class="remember">Remember me</p>
						</label>
			 				<button  name="login" class="btn btn-primary theme-button mt-4">Log in</button>
						<div class="new-signup">
							<a href="#" class="signuplink">Forgot username or password?</a>
						</div>
					</form>
					<p class="signup">Don’t have account yet? <a href="#signup.html" class="signuplink">Sign Up</a></p>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>

		<!-- copyright -->
		<div class="copy-right">
			<p>&copy; 2020 Snow Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3Layouts</a></p>
		</div>
		<!-- //copyright -->
	</section>

	<!-- /login form -->
</body>

</html>