<?php
ob_start();
if(isset($_GET['id']) && isset($_GET['key']) && isset($_GET['email']) ){

    $id=$_GET['id'];
    $key=$_GET['key'];
    $email=$_GET['email'];
    $active=1;

$conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');    
$aguser="SELECT * FROM `userslogin` WHERE email = '$email' ";
$results=mysqli_query($conn,$aguser);

while($acc=mysqli_fetch_assoc($results )){


	$agid=$acc["user_id"];
	$agname=$acc["us_key"];
	$agemail=$acc["email"];
	
	
} 

if($email == $agemail && $key == $agname && $id == $agid){

    $update_query= "UPDATE userslogin SET active ='$active' WHERE user_id ='$id'  ";

    $results1=mysqli_query($conn,$update_query);


    
}
header("location:http://localhost/website/gtcf/login.php?active=true");

    }
    else{

        echo "forbidded";
        die();
    }
    






?>