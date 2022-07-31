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
    $sangi=$_GET['id'];
	$roll=$_GET["r"] ;  

echo $id;

	$con=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
	$product= mysqli_query($con,"SELECT * FROM pro WHERE cus_id=$sangi");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
		
			
			$prd=$row["prde"];
			$phn=$row["phone"];
			$door=$row["door"];
			$str=$row["street"];	
			$cty=$row["city"];	
			$pin=$row["pin"];	
             $cus_id=$row["cus_key"]  ; 
$time=$row["cus_t"]  ;
		}}
		

}


if(isset($_POST["kaka"])){
echo $phn;
echo "<br>";
echo $sangi;
echo "<br>";
echo $id;
echo "<br>";
echo $cus_id;
$it=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
$prot= "INSERT INTO book(order_id,pro_id,customer_id,status) VALUES('$sangi','$id','$cus_id','r')";
$user_query_result=mysqli_query($it,$prot);


$user= "UPDATE  `pro` SET `status_g` = 'r' WHERE cus_id='$sangi'";
$user= "UPDATE  `pro` SET `pro_id_tk` = '$id' WHERE cus_id='$sangi'";

if ($it->query($user) === TRUE) {
	header('location:http://localhost/website/gtcf/prolog/index.php.?id='.$id.'&r='.$roll.'');
	
	echo "Error deleting record:";
} else {
	echo "Error deleting record: " . $conn->error;
  }

//header('location:http://localhost/website/gtcf/prolog/index.php.?id='.$sangi.'&r='.$roll.'');


}

//header('location:http://localhost/website/gtcf/prolog/index.php.?id='.$sangi.'&r='.$roll.'');



  ?>


<!doctype html>
<html lang="en">
  <head>
  	<title>order details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">order details</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-4">
								<p><span>Address:</span><?php 
								echo $door;
								echo ","; 
								echo  $str;
								
								
echo $cty;
echo ",";
echo $pin ;




								?> </p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Phone:</span> <a href="tel://<?php echo $phn; ?>"><?php echo $phn; ?></a></p>
							  </div>
							  
				          </div>
						  <div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span style='font-size:50px;'>&#9993;</span>
</div>		
<div class="text pl-4">
<p><span>order details:</span> <?php echo $prd; ?></p>
							  
<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span style='font-size:50px;'>&#8986;</span>
</div>		
<div class="text pl-4">
<p><span>date&time :</span> <?php echo $time; ?></p>
	

<br>
<br>
<br>



<form  action=md.php?id=<?php echo $sangi ?>&r=<?php echo $roll ?>    method="POST" id="signup-form" class="signup-form">
<div class="form-group">
                    <div class="form-group">

<input type="submit" class="submit-link submit" name="kaka" />
                
</div>
</div>


</form>
</div>
					
							  





						
								</div>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

