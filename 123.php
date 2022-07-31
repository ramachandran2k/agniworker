
<?php

session_start();



//if latitude and longitude are submitted


     $th=$_SESSION["th"];
      

echo $th;


    $ran=$_SESSION["ran"];
echo $ran;    

$conn=mysqli_connect('localhost','agni_workers','celkonc345','table');
$aguser="SELECT * FROM `product` WHERE id_ran = '$ran' ";
$results=mysqli_query($conn,$aguser);
if ($results->num_rows > 0) {
    // output data of each row
    while($row = $results->fetch_assoc()) {
           $ram=$row["order_id"]; 
          $smi= $row["customer_id"];
               $prd=$row["prodect_details"];
                   $qty=$row["qty"];
             


  $u[]=explode('+',$qty);

    $e=$u;
    foreach ($e as $valu) {

   
        $q=implode(' <br>',$valu);

        

        
      

    }


   $j[]=explode('+',$prd);

$a=$j;
  



    foreach ($a as $value) {

   
        $t=implode(' <br>',$value);

        
      }
   } 
    

    }
    if(isset($_POST['jp'])){
    date_default_timezone_set("Asia/Calcutta");
         $ct= date('d-m-Y H:i:s');
   

    if(isset($_POST['jp'])){

                  $tr=$_POST['jp'];
   
   



   
   }
   
   $myPhpVar= $_COOKIE['myJavascriptVar'];
   $longitude= $_COOKIE['longitude'];
   $thj=$_POST["time"];

      

      
      
         $name =$_POST["name"];
           $pho=$_POST["Phone"];
           $str=$_POST["str"];
           $cty=$_POST["city"];
          $dr=$_POST["door"];
         $pin=$_POST["Pin"];     
            $amt=$_SESSION["amt"];      
      
      $conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
      $user_query="INSERT INTO pro(prde,qty,phone,time_t,lati,logi,cus_id,cus_key,	pin,street,city,door,name_cs,status_g,srty,amt,cus_t) VALUES('$t','$q','$pho','$ct','$myPhpVar','$longitude','$ram','$smi','$pin','$str','$cty','$dr','$name','p','$th','$amt','$thj')";
      $user_query_result=mysqli_query($conn,$user_query);

      $user_query= "UPDATE userslogin SET cr_st='$ram' WHERE user_id='$smi'";
$user_query_result=mysqli_query($conn,$user_query);
$user= "UPDATE userslogin SET st='p' WHERE user_id='$smi'";
$ur_query_result=mysqli_query($conn,$user);



$_SESSION["idg"]=$ram;

echo "hhjhjhg";
echo $ram;


echo "jydjjhj";
echo $smi;

//   header("location:http://localhost/website/gtcf/include.php?id='$smi'&p='$ram'    ");
   
   }





?>
<!DOCTYPE HTML>
<html lang="zxx">
   <head>
   
   <script src="js/jquery.js"></script>
      <title>Item Order Form Responsive Widget Template :: w3layouts</title>
      <!-- Meta tag Keywords -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8" />
      <meta name="keywords" content="Item Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
         />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!-- Meta tag Keywords -->
      <!-- css files -->
      <link rel="stylesheet" href="the/css/style.css" type="text/css" media="all" />
      <!-- Style-CSS -->
      <!-- Font-Awesome-Icons-CSS -->
      <!-- //css files -->
      <!-- web-fonts -->
      <link href="//fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">
      <!-- //web-fonts -->
   </head>
   <body>
      <!-- title -->
      <h1 class="header-w3ls">Item Order Form</h1>
      <!-- //title -->
      <!-- content -->
      <div class="porduct-order-agile">
         <form action="123.php" method="post">
            <div class="form-group">
               <p>Name</p>
               <input type="text" name="name" placeholder="Alice Willson" required="">
            </div>
          <br>
           
          
          
          <div  class="form-group">
            <p>plese enter visiting time</p>
            <input type="datetime-local" id="birthdaytime" name="time">
            </div>
          <br>

            <div class="form-group">
               <p>Phone</p>
               <input type="text" name="Phone" placeholder="123456789" required="">
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>door no</p>
                  <input type="text" name="door" placeholder="" required="">
               </div>
               <div class="form-left-to-w3l">
                  <p>Street Address</p>
                  <input type="text" name="str" placeholder="" required="">
               </div>
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>City</p>
                  <input type="text" name="city" placeholder="" required="">
                  <div class="clear"></div>
               </div>
               <div class="form-left-to-w3l">
                  <p>State</p>
                  <input type="text" name="state" placeholder="" required="">
                  <div class="clear"></div>
               </div>
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>Pin Code</p>
                  <input type="text" name="Pin" placeholder="Pin Code" required="">
                  <div class="clear"></div>
               
               </div>
               <div class="form-left-to-w3l">
                  <p> Country</p>
                  <select class="form-control buttom">
                     <option value="">india
                     </option>
                    
                  </select>
               </div>
            </div>
            <div class="order-list">
            <div class="order-list">
            <a href="http://localhost/website/gtcf/include.php"> <button     name="jp"         type="submit" class="btn btn-primary">Submit</button>
        </a> </form>

      

      </div>

      <!-- copyright -->
      <div class="copy">
         <p>&copy; 2018 Item Order Form. All rights reserved | Design by
            <a href="http://w3layouts.com">W3layouts</a>
         </p>
      </div>
      <!-- //copyright -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 

      <script> 

$(document).ready(function(){ 

    if (navigator.geolocation) { 

        navigator.geolocation.getCurrentPosition(showLocation); 

    } else { 

        $('#location').html('Geolocation is not supported by this browser.'); 

    } 

}); 

function showLocation(position) { 

    var latitude = position.coords.latitude; 

var longitude = position.coords.longitude; 


document.cookie = "myJavascriptVar = " + latitude;
document.cookie =  "longitude = " + longitude;

} 

</script>       
     


   </body>
</html>
