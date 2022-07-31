
<?php
session_start();
 $sangi=$_SESSION['red'];

$or_id=$_SESSION["curent_or"];

$roll= $_SESSION["roll"];

   $kasu=$_SESSION["kasu"];

   if(isset($_POST['agree'])){
   
    header('location:http://localhost/website/gtcf/paymethod/index.php?id='.$sangi.'');

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
    <h1 style="font-size:50px"><?php echo $kasu ?></h1>
    <p>this is the total fees right</p>
  
    <form action="pricecon.php" method="post" class="signin-form">
  
    <button name="agree"  >i  agree</button>
    </form>
  </div>
</div>


</body>
</html>
