<?php  
ob_start();

if( empty($_GET)){

  header('location:http://localhost/website/gtcf/login.php?attfase');
  
  }
  session_start();
  
  if(isset($_GET['id']) )
  {
    $named=$_SESSION["usar_name"];
    $id=$_SESSION["red"];      
       $roll=$_GET["roll"] ;   
    $sangi=$_GET['id'];
   echo $roll;
   $conn=mysqli_connect('localhost', 'agni_workers', 'celkonc345','users_agni');
   $sql = "SELECT * FROM `book` WHERE pro_id=$sangi   ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

$ram=1;

  }else{
    $ram=0;
  }
echo $ram;


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




	$product= mysqli_query($con,"SELECT * FROM pro WHERE srty='$roll' and status_g='p' ");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
		
	?>
<div class="container">
	<table>
		<thead>
			<tr>
				<th>order detailes</th>
				<th>amount</th>
        <th>time</th>
				
        
        <th>location</th>
				<th>accept</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $row["prde"]; ?></td>
				<td><?php echo "$".$row["amt"]; ?></td>
        <td><?php echo $row["cus_t"]; ?></td>
        
        
        <td> <?php echo $row["city"]; ?></td>
				<td> <a  href="md/md.php?id=<?php echo $row["cus_id"]; ?>&r=<?php echo $roll ?>  "><button class="btn success">more detailes</button></td>
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
