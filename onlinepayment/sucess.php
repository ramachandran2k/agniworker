<?php

session_start();
 $_SESSION["workermoney"];

$sangi=$_SESSION["cus_id"];

$order_id=$_SESSION["order_id"];
$customer_rate=$_SESSION["finalamt"];
$refnum=$_SESSION["ORDER_ID"];


echo $sangi.$order_id.$customer_rate.$refnum;
echo "<br>";
echo $sangi;
$conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');

$sqli="UPDATE `book` SET `one_st`='yes',`tr_id`='$refnum' WHERE customer_id=$sangi and order_id=$order_id";
//$sqli = "UPDATE book SET one_st='yes'  and tr_id='$refnum'  WHERE customer_id='$sangi' and order_id='$order_id'";
// "INSERT INTO book (one_st,tr_id)
// VALUES ( 'yes', '$refnum')";

$result=mysqli_query($conn,$sqli);


  $conns=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
  $aguser="SELECT * FROM `userslogin` WHERE user_id=$sangi";
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
 	header('location:http://localhost/website/gtcf/book.php?id='.$agid.'&at=1');
  $_SESSION["usar_name"]=$agname;
		}else{
header('location:http://localhost/website/gtcf/book.php?id='.$agid.'');
			$_SESSION["usar_name"]=$agname;
			  

		}










        
        
    
    
    
    
    
    
    









//header("location:http://localhost/website/gtcf/include.php?id='$smi'&p='$ram'");


?>

