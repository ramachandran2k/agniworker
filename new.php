<?php




$onn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','prolog');

$ql = "SELECT * FROM `rate_card` ORDER BY `catogery` ASC";
$resu = $onn->query($ql);

while ($row=mysqli_fetch_array($resu)) {
    $king=$row['catogery'];



echo"<br>";	
echo $king;
}
?>