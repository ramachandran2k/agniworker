<?php
  session_start();
  $sangi=$_SESSION['red'];
 
 $or_id=$_SESSION["curent_or"];
 echo $or_id;
 $roll= $_SESSION["roll"];
 
    $kasu=$_SESSION["kasu"];
    $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');

    $sql = "SELECT * FROM pro WHERE cus_id=$or_id";

    $results=mysqli_query($conn,$sql);

    while($ram=mysqli_fetch_assoc($results )){
 
        $cus_idn=$ram["cus_key"];
        
    }
    echo $cus_idn;
    $_SESSION["cus_id"]=$cus_idn;





$t=5/100;
echo $t;
$my=$t*$kasu;
echo $my;
$_SESSION["my"]=$my;

$yourmony=$my-$kasu;
$_SESSION["yourmony"]=$yourmony;

echo $yourmony;
$pht=$kasu+40;
 
$cons=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
$th="UPDATE `book` SET payment_method='online' WHERE order_id=$or_id ";
$conn->query($th); 


echo $pht;

// $coons=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
// $tht="UPDATE `book` SET payment_method='online' WHERE order_id=$or_id ";
// $coonn->query($tht); 



  
    $con=mysqli_connect('localhost', 'agni_workers', 'celkonc345','prolog');








 
// 
// if (mysqli_num_rows($user_query_result) > 0) {
// header('location:http://localhost/website/gtcf/paymethod/rederct.php?id='.$sangi.'');
// }
$mcon=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');



$spp="SELECT * FROM `book` WHERE customer_id=$cus_idn and order_id=$or_id and one_st='yes' and pro_id='$sangi' ";
$user_query_result=mysqli_query($mcon,$spp);
if ($user_query_result->num_rows > 0) {
while($ram=mysqli_fetch_assoc($user_query_result )){
 
    $cun=$ram["one_st"];
    $ref=$ram["tr_id"];
}

 if($cun==="yes"){

    $sppk="INSERT INTO `transaction` (`id`, `transaction_date`, `cus_id`, `pro_id`, `order_id`, `amt`, `payment_method`, `status`, `amt_comussion`, `amt_original`,`tr_id`)
    VALUES (NULL, current_timestamp(), '$cus_idn', '$sangi', '$or_id', '$pht', 'online', 's', '40', '$kasu','$ref')";
   $user_query_result=mysqli_query($con,$sppk);
   


if ($con->query($sppk) === TRUE) {
   
$_SESSION['red']=$sangi;
 
    $_SESSION["curent_or"]=$or_id;
    echo $or_id;
     $_SESSION["roll"]=$roll;
    
       $_SESSION["kasu"]=$kasu;
       
 header('location:http://localhost/website/gtcf/paymethod/onrederct.php?id='.$sangi.'&orid='.$or_id.'&roll='.$roll.'&kasu'.$kasu.'');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

 }
}








?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("photographer.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">plesce wait  custamer will pay online
    after customer pay succes fully plesace refresh page <?php echo $kasu+40 ; ?></h1>
    
  
  </div>
</div>


</body>
</html>
