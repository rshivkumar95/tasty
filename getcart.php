<?php

include_once('config.php');
error_reporting(1);
if(!empty($_SESSION['cartrestaurant']))
{
	
$totalorder=0;
$error=0;
foreach ($_SESSION['cartrestaurant'] as $restaurant) {


	      $query="SELECT * FROM `restaurant_info` WHERE `Restaurant_ID`='$restaurant'";

	      $row = mysql_query($query);
	      $result = mysql_fetch_assoc($row);


	

	?>






	<div id="order-detail-content" class="table_block table-responsive">
		<table id="cart_summary" class="table table-bordered">
		   <thead>
		   	  <tr>
		   	   <th colspan="6">Restaurant Name: <?php echo $result['Restaurant_Name']; ?></th>
		   	  </tr>
		   </thead>
			<thead>
				<tr>
					<th class="cart_product first_item">Product</th>
					<th class="cart_description item">Description</th>					
					<th class="cart_unit item">Unit price</th>
					<th class="cart_quantity item">Qty</th>
					<th class="cart_total item">Total</th>
					<th class="cart_delete last_item">&nbsp;</th>
				</tr>
			</thead>
			
			<tbody>


			 <?php
			 
			 $total=0;

               foreach ($_SESSION['cartitem'] as $item => $value) {
				$newprice=0;

               //var_dump($_SESSION['cartitem']);
                $query1="SELECT * FROM `restaurant_menu` WHERE `Restaurant_Id`='$restaurant' and `Item_Id`='$item'";

	            $row1= mysql_query($query1) or die(mysql_error());

	            while($result1 = mysql_fetch_assoc($row1))
	              {


			 ?>
																													
																																			
					<tr id="product_13_0_0_0" class="cart_item last_item first_item address_0 odd">
						<td class="cart_product">
							<img src="<?php echo $result1['Item_Image'];  ?>" alt="<?php echo $result1['Item_Name'];  ?>" width="98" height="98">
						</td>
						<td class="cart_description">
							<p class="product-name"><?php echo $result1['Item_Name'];  ?></p>
        					<small class="cart_ref"><?php echo $result1['Item_Details'];  ?></small>			
        				</td>
						
						<td class="cart_unit" data-title="Unit price">
							<span class="price" id="product_price_13_0_0">
			            		<span class="price">
			            			
			            				<?php 
                               if($result1['Discount']>0)
                               {
                               	  $price1=($result1['Item_price']-(($result1['Item_price']*$result1['Discount'])/100));
                               	  $newprice=($result1['Item_price']-(($result1['Item_price']*$result1['Discount'])/100))*$_SESSION['cartitem'][$item];
								  echo "<del>&#8377;".$result1['Item_price']."/-</del>  &#8377;".$newprice."/-";
								  $total=$total+$newprice;

                               }
								else{
								 echo "&#8377;".$result1['Item_price']."/-";
								  $price1=$result1['Item_price'];
								  $newprice=$result1['Item_price']*$_SESSION['cartitem'][$item];

								  $total=$total+$newprice;
								 } 
								  ?>

			            		</span>
							</span>
						</td>

						<td class="cart_quantity text-center">

						   <div class="row">
						     <div class="col-sm-12">
						     	<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Increase Quantity" style="border-radius: 35px;padding: 5px;" onclick="increase(<?php echo $price1; ?>,<?php echo $result1['Item_Id'] ?>,<?php echo $restaurant; ?>);"><i class="glyphicon glyphicon-plus"></i></button>
						     </div>
						     <div class="col-sm-12">
						     	  <span id="<?php echo 'qty'.$result1['Item_Id']; ?>"><?php echo $_SESSION['cartitem'][$item]; ?></span>
						     </div>
						     <div class="col-sm-12">
						     	<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Decrease Quantity" style="border-radius: 35px;padding: 5px;" onclick="decrease(<?php echo $price1; ?>,<?php echo $result1['Item_Id'] ?>,<?php echo $restaurant; ?>);"><i class="glyphicon glyphicon-minus"></i></button>
						     </div>
						   </div>
							
												
							
						</td>
						<td class="cart_total" data-title="Total">&#8377;
							<span class="price" id="<?php echo 'totalprice'.$result1['Item_Id'];  ?>">
							<?php 
                               
								 echo $newprice;	 
								  ?>								  	
								  </span>/-
						</td>
						<td class="cart_delete text-center" data-title="Delete">
							<div>
								<a onclick="removeitem(<?php echo $item; ?>)"><i class="icon-trash"></i></a>
							</div>
						</td>
					</tr>

					<?php

					 }
					}
					?>

			</tbody>
			<tfoot>
					<tr class="cart_total_price">
						<td rowspan="3" colspan="2" id="cart_voucher" class="cart_voucher"></td>
						<td colspan="2" class="text-right">Total products (tax incl.)</td>
						<td  class="price" id="total_product">&#8377;<span id="<?php echo 'total'.$result['Restaurant_ID']; ?>"><?php echo $total ?></span>/-</td>
					</tr>
					
					
					<tr class="cart_total_price">
						<td colspan="2" class="total_price_container text-right">
							<span>Total</span>
						</td>
						<td class="price" id="total_price_container">&#8377;<span id="<?php echo 'total_restaurant'.$result['Restaurant_ID']; ?>"><?php echo $total;
						      $totalorder=$totalorder+$total; ?></span>/-
						</td>
					</tr>
			</tfoot>
		</table>
	</div> <!-- end order-detail-content -->
 


<?php

}

?>

<div id="order-detail-content" class="table_block table-responsive">
		<table id="cart_summary" class="table table-bordered">
		   
				<tfoot>

					<tr class="cart_total_price">
					
						<td colspan="2" class="total_price_container text-right">
							<span>Total Order</span>
						</td>
						<td class="price" id="total_price_container">&#8377;<span id="total_order"><?php echo $totalorder; 
                            $_SESSION['ordertotal']=$totalorder;
                            
						?></span>/-
						</td>
					</tr>
					
					<tr class="cart_total_price">
						
						<td colspan="2" class="total_price_container text-right">
							<span>Delivery Charges</span>
						</td>
						<td class="price" id="total_price_container">&#8377;<span id="Delivery_charge"><?php
						   $order=$totalorder; 
						   $query="SELECT * FROM `minmaxorder`";
    	 					$result=mysql_query($query);
    	 					$data=mysql_fetch_assoc($result);
    	 					//echo $data['MinOrder'];
    	 					if($data['MinOrder']>$order)
    	 					{
 									
 									//$var=1; 
 									//$_SESSION['error1']='1';
 									$_SESSION['delivery']=0;
 									 
 									  echo "0";

    	 					}
    	 					else if($data['MaxOrder']<$order)
    	 					{
    	 						$_SESSION['delivery']=0;
    	 						echo "0";
    	 					}
    	 					else //($data['MinOrder']<=$order or $data['MaxOrder']>=$order)
    	 					{
    	 						//echo "here";
    	 							$query="SELECT * FROM `orderrange` WHERE '$order'>`min` and '$order'<`max`;";
							    	 $result=mysql_query($query) or die(mysql_error());
							    	 $data=mysql_fetch_assoc($result);	
							    	// var_dump($data);
							    	 $charge=$data['charge'];
							    	 $_SESSION['delivery']=$charge;
							    	 echo $charge;
    	 					}
						  // echo $order;
							
						  ?></span>/-
						</td>
					</tr>
					<tr class="cart_total_price">
					
						<td colspan="2" class="total_price_container text-right">
							<span>Total</span>
						</td>
						<td class="price" id="total_price_container">&#8377;<span id="final_order"><?php echo $totalorder+$_SESSION['delivery']; 
                            
                            $_SESSION['finaltotal']=$totalorder+$_SESSION['delivery'];
						?></span>/-
						</td>
					</tr>
			</tfoot>


		   </table>
		   </div>


			<p class="cart_navigation clearfix">
			  <?php
                     
                     $query="SELECT * FROM `minmaxorder`";
    	 					$result=mysql_query($query);
    	 					$data=mysql_fetch_assoc($result);
    	 					$minorder=$data['MinOrder'];
    	 					
    	 					if($minorder>$order)
    	 					{
 									
 									?>

 									<a id="proceed" onclick="checklogin();" class="button-exclusive btn-default standard-checkout pull-right btn disabled" title="Proceed to checkout" style="">
										<span>Proceed to checkout  <i class="icon-chevron-right right"></i></span>
									</a>
									<?php

								}
								else
								{
									?>

									<a id="proceed" onclick="checklogin();" class="button-exclusive btn-default standard-checkout pull-right btn" title="Proceed to checkout" style="">
										<span>Proceed to checkout  <i class="icon-chevron-right right"></i></span>
									</a>

									


 									<?php

    	 						}
			  ?>
			  <p class="pull-right" id='minOrderWarning'>Minimum Order Amount Must Be Greater Than &#8377; <?php echo $data['MinOrder']; ?>/-</p>	
					
			</p>


<?php
}
else
{
	?>
	   <h4 class="text-center">No Item In Cart</h4>

	<?php
}

