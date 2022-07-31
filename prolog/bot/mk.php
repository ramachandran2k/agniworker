<?php

session_start();



?>
<?php  
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }
  
  if(isset($_GET['id']) )
  {
    $named=$_SESSION["usar_name"];
    $id=$_SESSION["red"];   
    $sangi=$_GET['id'];
    $roll=$_GET["r"] ;   

    $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
    $sql = "UPDATE  `book` SET status = 'c' WHERE order_id='$sangi'" ;

    $results=mysqli_query($conn,$sql);



    $user= "UPDATE  `pro` SET status_g = 'c' WHERE cus_id='$sangi'";
    $result=mysqli_query($conn,$user);

    header('location:http://localhost/website/gtcf/prolog/index.php?id='.$id.'&r='.$roll.'');



}
  



  
  
  
  ?>