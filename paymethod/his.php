<?php
 session_start();

 $sangi=$_SESSION['red'];
 
 $or_id=$_SESSION["curent_or"];
 
 $roll= $_SESSION["roll"];
 
      $cus_id=$_SESSION["cus_id"];
echo $cus_id ;
$conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');

$aguser="SELECT * FROM `pro` WHERE cus_id = '$or_id' AND  cus_key='$cus_id'";
$results=mysqli_query($conn,$aguser);
while($ram=mysqli_fetch_assoc($results )){


	$order_detail=$ram["prde"];
	$or_qty=$ram["qty"];
	$phone=$ram["phone"];
	$or_time=$ram["time_t"];
	$pin=$ram['pin'];
	$street=$ram['street'];
     $city=$ram["city"];
     $door=$ram["door"];
	$name=$ram["name_cs"]; 
             $type=$ram["srty"];
             $ex_amt=$ram["amt"];
             
}
$add= $door."+".$street."+".$city ."+" .$pin ;
  echo $add ;


  $conns=mysqli_connect('localhost','agni_workers','celkonc345','prolog');
  $auser="SELECT * FROM `bill` WHERE worker_id='$sangi' AND order_id='$or_id'";
  $reults=mysqli_query($conns,$auser);
  while($ram=mysqli_fetch_assoc($reults )){
     $pro_bill_detail=$ram["prodect_detail"];
     $change_qty=$ram["qty"];
     $amt=$ram["prise"];
}

var_dump($pro_bill_detail,$change_qty,$amt);
$conjs=mysqli_connect('localhost','agni_workers','celkonc345','prolog');
$ausr="SELECT * FROM `transaction` WHERE pro_id='$sangi'AND order_id='$or_id' ";
$reuls=mysqli_query($conjs,$ausr);
while($ram=mysqli_fetch_assoc($reuls )){
     $payment_method=$ram["payment_method"];
     $transaction_date=$ram["transaction_date"];

}
echo $transaction_date;

$conps=mysqli_connect('localhost','agni_workers','celkonc345','history');
$ausr="INSERT INTO `his`( `order_details`, `qty`, `phone`, `order_time`, `adress`, `name`,`type`, `extimate_amt`, `pro_bill_detail`,`change_qty`, `amt`, `payment_method`, `worker_id`, `custamer_id`, `trans_date`, `order_id`)VALUES ('$order_detail','$or_qty','$phone','$or_time','$add','$name','$type','$ex_amt','$pro_bill_detail','$change_qty','$amt','$payment_method','$sangi','$cus_id','$transaction_date','$or_id')";
//$user_query_result=mysqli_query($conps,$ausr);


if ($conps->query($ausr) === TRUE) {
     echo "Record deleted successfully";
     
     $co=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
     $sql = "DELETE FROM book WHERE pro_id=$sangi AND order_id='$or_id' AND customer_id='$cus_id' ";

     if ($co->query($sql) === TRUE) {
       echo "Record deleted successfully";
       $co=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
       $sql = "DELETE FROM pro WHERE  cus_id='$or_id' AND cus_id='$cus_id' ";
  
       header('location:http://localhost/website/gtcf/prolog/index.php.?id='.$sangi.'&r='.$roll.'');

  
     } else {
       echo "Error deleting record: " . $conn->error;
     }  


} else {
     echo "Error deleting record: " . $conn->error;
   }


//header('location:http://localhost/website/gtcf/paymethod/delet.php?id='.$sangi.'&r='.$roll.'');





?>