<?php

include_once('config.php');

$orderID=$_POST['action'];

$query="SELECT * FROM `orders` WHERE `Order_Id`='$orderID'";

$result=mysql_query($query);

$data=mysql_fetch_assoc($result);



?>

<h3>Order Status:<span id="orderStatus" style="color: green;"><?php echo $data['status'] ?></span></h3>
     	          <div class="row">
                        <div class="col-sm-3">
                        	Order ID:
                        	<br>
                        	<span id="orderID"><?php echo $data['Order_Id'] ?></span>
                        </div> 
                        <div class="col-sm-3">
                        	Order Date:
                        	<br>
                        	<span id="orderDate"><?php echo date("d/m/Y", strtotime($data['orderDate'])); ?></span>
                        </div> 
                        <div class="col-sm-2">
                        	Total:
                        	<br>
                        	<span id="orderTotal">&#8377;<?php echo $data['offerPrice']; ?>/-</span>
                        </div>
                        <div class="col-sm-4">
                        	Delivery Address:
                        	<br>
                        	<span id="deliveryAddress"><?php

									  		      $address=explode('+', $data['deliveryAddress']);

									  		        foreach ($address as $add) {
									  		         	# code...
									  		         	echo "$add ";
									  		         } 
									  		        ?></span>
                        </div>      	          	
     	          </div>