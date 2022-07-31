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
$type=$row["payment_method"];
$name=$row["name"];
$items=$row["pro_bill_detail"];
$totel=$row["amt"];
$date=$row["trans_date"];

}        
 
header('location:bill.php?id='.$saj.'&date='.$date.'');
}
}


?>