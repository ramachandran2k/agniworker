<?php

session_start();
if(isset($_GET['id']) && isset($_GET['p'])){

  $id=$_GET['id'];
  $p=$_GET['p'];
 echo $id;
  $_SESSION["favcolor"] = $id;
  $aguser="SELECT * FROM `userslogin` WHERE";
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
    header('location:book.php?id='.$id.'&at=1');
   $_SESSION["usar_name"]=$agname;
     }else{
     header('location:book.php?id='.$id.'');
       $_SESSION["usar_name"]=$id;
         
 
     }
 
 
 
 }else{
   header('location:http://localhost/website/gtcf/login.php?attfase');
 }
 

  
//  header('location:book.php?id='.$id.'&at=1');
// header("location:http://localhost/website/gtcf/book.php?id='$id&'p='$p'");
  
// echo $id;
//   $servername = "localhost";
//   $username = "agni_workers";
//   $password = "celkonc345";
//   $dbname = "users_agni";
//   // Create connection
//   $conn = new mysqli($servername, $username, $password, $dbname);
//   // Check connection
//   if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
  
//   $sql = "SELECT * FROM `pro` WHERE cus_key=$id ORDER BY `pro`.`cus_key`  ";
//   $result = $conn->query($sql);
    
  

//   if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//              $king=$row['status_g'];
 
//   switch ($king) {
//         case "p":
//           $koki="your order is pending";
//            break;
//         case "r":
//           $koki="your order is acepted by our partner";
      
//           break;
//         case "n":
//           $koki="you have no order plese place our order";
//         break;
//         default:
//           echo "Your favorite color is neither red, blue, nor green!";
//       }
    

//     echo "$koki <br><br><br> " ;
            
  
//           }
  
       
//   }

 

?>