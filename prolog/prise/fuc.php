

<?php
ob_start();
session_start();
require_once("config.php");

  

  $sangi=$_SESSION['red'];
 echo $sangi;

$or_id=$_SESSION["curent_or"];

$roll= $_SESSION["roll"];
echo "gu";
echo $sangi;
//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart

case "ext":
    if(!empty($_POST["qua"])) {
        $pid=$_GET["pid"];
        $exname= $_POST["exname"];
        $exprise=  $_POST["exprise"];
        
        $qua=$_POST["qua"];
        
      echo $pid.$exname.$exprise.$qua ;  
$itemArray = array($pid=>array('name'=>$exname, 'code'=>$pid, 'quantity'=>$qua, 'price'=>$exprise, 'image'=>"une.png"));
if(!empty($_SESSION["cart_item"])) {
    if(in_array($pid,array_keys($_SESSION["cart_item"]))) {
        foreach($_SESSION["cart_item"] as $k => $v) {
            if($pid == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                    $_SESSION["cart_item"][$k]["quantity"] = 0;
       						}
								$_SESSION["cart_item"][$k]["quantity"] += $qua;
							}
					}
				} else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
            }  else {
				$_SESSION["cart_item"] = $itemArray;
			}
    }
				
                
    
echo "hi";
break;

    case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM rate_card WHERE id='$pid'");
	          while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>

<form action="index.php" method="post">
<!-- Cart ---->
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="fuc.php?action=empty ">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    
    
 var_dump($_SESSION["cart_item"]);
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];



	
	?>
	
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td    >   <?php echo $item["code"]; ?></td>
				<td   style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="fuc.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
				$_SESSION["kasu"]=$total_price;
				$_SESSION["amt"]=$total_price;
			}
		?>
  

<?php


if(isset($_POST["job"])){
	
	

    foreach ($_SESSION["cart_item"] as $item){


		
			
	$raj=$item["name"];
	$koki=$item['quantity'];
	$ac_p=$raj;		
	$ac_ram=  json_encode($koki)  ;
	$servername = "localhost";
	$username = "agni_workers";
	$password = "celkonc345";
	$dbname = "prolog";


	$th[]=$ac_p;
	$ty= implode("+",$th);
	$jd[]=$ac_ram;
	$mohan=implode("+",$jd);     
	   $ran =rand(10,101000);
	  
}
	

try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO bill(prodect_detail	,worker_id,qty,order_id,prise,work_type)
		VALUES ( '$ty','$sangi','$mohan','$or_id','$total_price','$roll' )";
		
		
		
	
		// use exec() because no results are returned
		$conn->exec($sql);
	
	  } catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	  }
	 
echo "$ran";
$_SESSION["ran"]=$ran;

$th="tv";
$_SESSION["th"]=$th;




header('location:http://localhost/website/gtcf/prolog/prise/pricecon.php');


}
?>




</form>
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
<button   class="btn success" name="job" >book order</button>
  <style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #4CAF50;
  color: green;
}
</style>
</a>

</form>





<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product= mysqli_query($con,"SELECT * FROM rate_card where catogery='$roll' ORDER BY id ASC");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
		
	?>
		<div class="product-item">
			<form method="post" action="fuc.php?action=add&pid=<?php echo $row["id"]; ?>">
			<div class="product-image"><img src="<?php echo $row["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $row["name"]; ?></div>
			<div class="product-price"><?php echo "$".$row["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}  else {
 echo "No Records.";

	}
	?>
	<div class="product-item">

	<form action="fuc.php?action=ext&pid=<?php echo uniqid(); ?>" method="post">
    <div class="product-image"><img src="une.png"></div>
<input class="input100" type="text" name="exname" placeholder="prodect name" ><br>

<input class="input100" type="number" name="exprise" placeholder="prise" >
<br>
<div class="cart-action"><input type="text" class="product-quantity" name="qua" value="1" size="2" /><br><input type="submit" name="suj" value="Add to Cart" class="btnAddAction" /></div>
	

	</form>
</div>
</div>


</BODY>


</HTML>