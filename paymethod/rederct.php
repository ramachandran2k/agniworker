<?php
  session_start();






  $sangi=$_SESSION['red'];
 
 $or_id=$_SESSION["curent_or"];
 
 $roll= $_SESSION["roll"];
 
    $kasu=$_SESSION["kasu"];
    $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','prolog');

    $my=$_SESSION["my"];
$give=$_SESSION["yourmony"];
$my=$my+40;
echo $my;
echo $give;
$sql = "SELECT * FROM payment WHERE pro_id=$sangi";

$results=mysqli_query($conn,$sql);

while($ram=mysqli_fetch_assoc($results )){

    $amt=$ram["loan"];
    
}

echo "<br>";

echo $amt;

$amt=$amt+$my;
echo $amt;

$sqli = "UPDATE payment SET loan='$amt' WHERE pro_id=$sangi";

$result=mysqli_query($conn,$sqli);


header('location:http://localhost/website/gtcf/paymethod/his.php?id='.$sangi.'&r='.$roll.'');
  


?>
