<?php  

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }
  session_start();
  
  if(isset($_GET['id']) )
  {
    
          
                $sangi =$_GET['cus_id'];
    $order_id=$_GET['id'];
  
    $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');

    $sql = "SELECT * FROM book WHERE order_id=$order_id";

    $results=mysqli_query($conn,$sql);
    if ($results->num_rows > 0) {
    while($ram=mysqli_fetch_assoc($results )){
 
        $pay=$ram["payment_method"];

    }
    
    switch ($pay) {
      case "online":
        
      
        header('location:http://localhost/website/gtcf/onlinepayment/pay.php?id='.$sangi.'&orid='.$order_id.'  ');
      
      break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }



    }
    else{

      echo"hj" ;
    }
   
      
    }

    
    $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
$sql = "SELECT * FROM `pro` WHERE`cus_id`=$order_id";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
     $gt=$row["cus_id"];
$status=$row["status_g"];


    }
  }else {
    echo "0 results";
  }
  if(isset($_POST['name'])){
    $re=$_POST['name'];
    $co=mysqli_connect('localhost', 'agni_workers', 'celkonc345','reports');
    $sql = "INSERT INTO `cancel`( `cus_id`, `reson`) VALUES ($sangi, '$re')";
   

    $co->query($sql);
      $sql = "DELETE FROM `pro` WHERE cus_id=$order_id  and cus_key=$sangi ";
      
      $conn->query($sql);
        
    //  $sql = "DELETE FROM `pro` WHERE 'cus_id'=$order_id  and cus_key=$sangi ";
    //  $result = $conn->query($sql);
    
$aguser="SELECT * FROM `userslogin` WHERE user_id=$sangi";
$results=mysqli_query($conn,$aguser);

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
if($st=='r' || $st=='p'){
  header('location:book.php?id='.$agid.'&at=1');
 $_SESSION["usar_name"]=$agname;
   }else{
   header('location:book.php?id='.$agid.'');
     $_SESSION["usar_name"]=$agname;
       

   }

//   
        
    
  

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
    <h1 style="font-size:50px">the order is not completed</h1>


    <?php



if(isset($_POST['email'])){
  
?>
<form action="aftclick.php?id=<?php echo $order_id; ?>&cus_id=<?php echo $sangi; ?>" method="post">
reason: <input type="text" name="name"><br>
<input type="submit">
</form>


<?php
}
?>
<?php
if($status=="p" and !isset($_POST['email']) ){

?>
<form action="aftclick.php?id=<?php echo $order_id; ?>&cus_id=<?php echo $sangi; ?>" method="post">
<button type="submit" name="email" class="btn btn-success">please cancel order</button>

</form>


<?php
}
?>

  
  </div>
</div>


</body>
</html>
