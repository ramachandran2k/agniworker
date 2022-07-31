

<?php

session_start();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



if(isset($_POST['lo'])){

	
$userid=test_input($_POST["username"]);
$password=$_POST["pass"];


echo $userid;

$conn=mysqli_connect('localhost','agni_workers','celkonc345','prolog');

$aguser="SELECT * FROM prof WHERE unic= '$userid' ";
$results=mysqli_query($conn,$aguser);

while($ram=mysqli_fetch_assoc($results )){


	$agid=$ram["pro_id"];
	$agname=$ram["unic"];
	$agmobile=$ram['pass'];
	$roll= $ram['roll'];
$originalname=$ram['name'];

}
echo $agid;
echo $agname;
echo $agmobile;


if($agname ==$userid && $password== $agmobile ){



	if(isset($_POST['rem'])){

		setcookie ("proe", $_POST["username"], time()+ (10 * 365 * 24 * 60 * 60));  
		setcookie ("propass", $_POST["pass"], time()+ (10 * 365 * 24 * 60 * 60));  
 
			}	

	echo "hi";
	$_SESSION["red"]=$agid;


	header('location:index.php?id='.$agid.'&r='.$roll.'  ');
  $_SESSION["usar_name"]=$originalname;
	


}else{
	header('location:http://localhost/website/gtcf/prolog/prolog.php?attfase');
}

}
 

?>

 
 



<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="table1/css/style.css">

	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form  method="post" action="prolog.php" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="user id"  value="<?php if(isset($_COOKIE["proe"])) { echo $_COOKIE["proe"]; } ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" value="<?php if(isset($_COOKIE["propass"])) { echo $_COOKIE["propass"]; } ?>" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="rem">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button name="lo" class="login100-form-btn">
							Login
						</button>
					</div>
					<?php    
						
						if(isset($_GET['attfase'])){

							echo 'your email or password is in correct';
							
							}
							
						?>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>