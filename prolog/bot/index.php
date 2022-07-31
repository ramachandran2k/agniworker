<?php  
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }
  session_start();
  
echo $_GET['id'];

  if(isset($_GET['id']) )
  {
    $named=$_SESSION["usar_name"];
    $id=$_SESSION["red"];      
       $roll=$_GET["roll"] ;   
    $sangi=$_GET['id'];
   echo $roll;
   $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
   $sql = "SELECT * FROM `book` WHERE pro_id=$sangi  ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $king=$row['order_id'];

    }
  }
echo $king;


  }



  ?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>order page</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

    
</head>

<style>
.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

/* Green */
.success {
  color: green;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}

/* Blue */
.info {
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  color: red;
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Gray */
.default {
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
</style>


<body>


<?php

$con=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');




	$product= mysqli_query($con,"SELECT * FROM pro WHERE cus_id='$king'");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
      $add= $row["street"]."+".$row["city"]."+".$row["pin"] ;
  
      urlencode($add);  
  ?>
<div class="container">

<a href="tel:9360135395"><span class="fa fa-phone" aria-hidden="true">call suport</a>

	<table>
		<thead>
			<tr>
				<th>customer name</th>
				<th>phone number</th>
				<th>location</th>
				<th>open map</th>
        <th>reach customer location</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $row["name_cs"]; ?></td>
				<td>  <a href="tel:<?php echo $row["phone"]; ?>"><span class="fa fa-phone" aria-hidden="true"></span>call custamer</a></td>
				<td> <?php   echo $row["door"]  ; echo"," ;  echo $row["street"] ;echo"," ; echo $row["city"]  ;echo"," ;echo $row["pin"]  ;  ?></td>
  
        
        <td> <a  href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $add; ?>&ll=<?php echo $row['lati'] ?>,<?php echo $row['logi'] ?>&travelmode=bicycling"><button class="btn success">click to open</button></td>
			
      
      	<td> <a  href="mk.php?id=<?php echo $row["cus_id"]; ?>&r=<?php echo $roll; ?>  "><button class="btn success">i reached</button></td>
			</tr>
			<?php
		}     
	}  else {
 echo "No Records.";

	}
	?>


		</tbody>
	</table>
</div>
  
  
</body>
</html>
