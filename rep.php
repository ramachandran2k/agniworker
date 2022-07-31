<?php

session_start();
if(isset($_GET['id']) )
{
  
        
        
  $saj=$_GET['id'];


    
  

$con=mysqli_connect('localhost', 'agni_workers', 'celkonc345','history');
$product= mysqli_query($con,"SELECT * FROM his WHERE  id='$saj' ");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
    $cus_id=$row["custamer_id"];
      $order_id=$row["order_id"];      
$pro_id=$row["worker_id"];
$ord=$row["order_details"];
    }        
        if(isset($_POST['hi'])){
          //  $_POST['hi']
        $rep= $_POST['subject'];
        //subject
        
echo $rep;


$conl=mysqli_connect('localhost', 'agni_workers', 'celkonc345','reports');

$sql = "INSERT INTO `complaint` ( `pro_id`, `cus`, `order id`, `report_details`,`his_id`)
VALUES ('$pro_id', '$cus_id','$ord','$rep','$saj')";

mysqli_query($conl, $sql);

  $conns=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
  $aguser="SELECT * FROM `userslogin` WHERE user_id=$cus_id";
$results=mysqli_query($conns,$aguser);

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
$_SESSION["favcolor"]=$agid;


		if($st=='r' || $st=='p'){
 	header('location:book.php?id='.$agid.'&at=1');
  $_SESSION["usar_name"]=$agname;
		}else{
	header('location:book.php?id='.$agid.'');
			$_SESSION["usar_name"]=$agname;
			  

		}










        
        
    
    
    
    
    
    
    }




}


}


?> 



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form   action="rep.php?id=<?php  echo $_GET['id']; ?>" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname"   placeholder="Your name..">

    
    <textarea id="subject" name="subject" placeholder="plese explain your problem" style="height:200px"></textarea>

    <input type="submit" name="hi"  value="Submit">
  </form>
</div>

</body>
</html>