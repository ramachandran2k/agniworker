
<?php

session_start();
if(isset($_GET['id']) )
{
  
         
        
  $saj=$_GET['id'];
$tf=$_GET['date'];

    
  

$con=mysqli_connect('localhost', 'agni_workers', 'celkonc345','history');
$product= mysqli_query($con,"SELECT * FROM his WHERE  id='$saj' ");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
    $cus_id=$row["custamer_id"];
      $order_id=$row["order_id"];      
$pro_id=$row["worker_id"];
$ord=$row["order_details"];
$type=$row["payment_method"];
$name=$row["name"];
$items=$row["pro_bill_detail"];
$totel=$row["amt"];
$date=$row["trans_date"];

}        

strval( $date ); 

$dat=date_create($date);
date_add($dat,date_interval_create_from_date_string("90 days"));
$dat= date_format($dat,"Y-m-d");

}}
?>


<HTML>

<BODY>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="http://via.placeholder.com/400x90?text=logo">
                        </div>
                        <style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>


                        <div class="col-md-6 text-right">
                        <a href="rep.php?id=<?php echo $saj; ?>"><button class="btn success">report</button></a>                        </div>
                    </div>

                    <hr class="my-5">

                   
                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted"> ID: </span><?php echo $saj;  ?></p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span><?php echo $type; ?> </p>
                            <p class="mb-1"><span class="text-muted">Name: </span><?php echo $name;  ?></p>
                        
                        
                        
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">date</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">expired date</th>
                        
                        
                        
                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $saj; ?></td>
                                        <td><?php echo $items; ?></td>
                                        <td><?php echo $totel; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $dat; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

              
    
    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

</div>


</BODY>





</HTML>