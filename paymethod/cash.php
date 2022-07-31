<?php
  session_start();
  $sangi=$_SESSION['red'];
 
 $or_id=$_SESSION["curent_or"];
 echo "hi".$or_id;

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
 if(isset($_POST['cash'])){
  
    $con=mysqli_connect('localhost', 'agni_workers', 'celkonc345','prolog');



//     $spp ="INSERT INTO `transaction`( `cus_id`, `pro_id`, `order_id`, `amt`, `payment_method`, `status`, `amt_comussion`, `amt_original`)
// VALUES (''$cus_idn','$sangi','$or_id','$pht','cash','s','40','$kasu'')";

$spp="INSERT INTO `transaction` (`id`, `transaction_date`, `cus_id`, `pro_id`, `order_id`, `amt`, `payment_method`, `status`, `amt_comussion`, `amt_original`)
 VALUES (NULL, current_timestamp(), '$cus_idn', '$sangi', '$or_id', '$pht', 'cash', 's', '40', '$kasu')";
$user_query_result=mysqli_query($con,$spp);


header('location:http://localhost/website/gtcf/paymethod/rederct.php?id='.$sangi.'');

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
    <h1 style="font-size:50px">plesce collect ammount <?php echo $kasu+40 ; ?></h1>
    
  
    <form action="cash.php" method="post" class="signin-form">

    <button name="cash"  >i collected</button>
  
    
    </form>
  </div>
</div>


</body>
</html>
