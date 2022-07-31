<?php
      


function sanitiz($POST){

 $sanitiznew=[];   
foreach($POST as $key =>$value) {
   $data=trim($value);
   $data=stripcslashes($data);
   $data=htmlspecialchars($data,ENT_QUOTES,'UTF-8' );
   $sanitiznew[$key]=$data;


}
return $sanitiznew;

}

function validate($userdata){
    
$error=[];

    foreach($userdata as $key =>$value){
         
switch($key){

    case "email":
       if(! filter_var($value,FILTER_VALIDATE_EMAIL)){
         $error["email"]="email is not valid";

       }
    break;
    case "name":

if(empty($value)){

  $error["name"]="name can not empty ";
}
    break;





}//
}
return $error;

}         




if(isset($_POST["sing"])){



   $erro=sanitiz($_POST); 
    
   


$erro["us_key"]=sha1(mt_rand(100000,99999999).time().$erro["email"]);

$erro["active"]=0;
$u_de=$erro["email"];
$u_dn=$erro["name"];
$u_dp=$erro["password"];
$u_dm=$erro["phone"];
$u_dk=$erro["us_key"];
$u_da=$erro["active"];
$conn=mysqli_connect('localhost','agni_workers','celkonc345','users_agni');
$user_query="INSERT INTO userslogin(us_name,email,passwor,mobil,us_key,active) VALUES('$u_dn','$u_de','$u_dp','$u_dm','$u_dk','$u_da')";
$user_query_result=mysqli_query($conn,$user_query);

$rrid=mysqli_insert_id($conn);
$userkey=[
   
    "id"=>$rrid
];

$link="http://localhost/website/gtcf/active.php?id=".$rrid."&key=".$erro["us_key"]."&email=".$erro["email"];

require 'phpmailer\class.phpmailer.php';
require 'phpmailer\class.smtp.php';
require 'phpmailer\class.pop3.php';
require 'phpmailer\PHPMailerAutoload.php';

if(isset($_POST["sing"])){

    // $to = "$_POST[email]";
    // $subject = "My subject";
    // $txt = "Hello world!";
    // $headers = "From: ramachandrantamil005@gmail.com" . "\r\n" .
    // "CC: somebodyelse@example.com";
    
    // mail($to,$subject,$txt,$headers);

$mail = new PHPMailer;
//set a host
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 3;
//enable smtp
$mail->isSMTP();
//set authetication to true
$mail->SMTPAuth = true;

//set login details for Gmail account
$mail->Username = "ramachandrantamil005@gmail.com";
$mail->Password ="Celkonc345";

//set type protection
$mail->SMTPSecure = "ssl"; //or we can use TLS

//set a port
$mail->Port = 465; // or 587 if TLS
//set who is sending an email
$mail->setFrom("ramachandrantamil005@gmail.com" , "Administrator");

//set where we are sending email(reciepent)
$mail->addAddress("$_POST[email]");

//set html t
$mail->isHTML(true);
//set a subject
$mail->Subject = "activation link";
//set body
$mail->Body =  "please clik heare activate account<a href='".$link."'>here</a>";
//"please clik heare activate account.<a href=.$link.";

//add attachment
//$mail->addAttachment("../annap/img/anna.jpg" , "annap");

if($mail->send()){
    header('location:https://mail.google.com');
}

else{
echo "something wrong happened ". $mail->ErrorInfo;;
}

//send an email



}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by AGNI</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form  action=sing.php    method="POST" id="signup-form" class="signup-form">
                    <h2>Sign up </h2>
                    
<br>                    
                                       <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="phonenumber" class="form-input" name="phone" id="email" placeholder="phone number"/>
                    </div>
                   

                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                    <input type="submit" class="submit-link submit" name="sing" />
                       
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>