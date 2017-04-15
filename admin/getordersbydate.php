<?php

include_once('config.php');

//$restID=$_SESSION['Restaurant_ID'];
$date=$_POST['date'];
$query="SELECT * from orders,customers WHERE customers.Email=ANY(select orders.custID from orders) and orders.orderDate='$date' GROUP By orders.Order_Id ORDER BY orders.Order_Id DESC";

$result=mysql_query($query);

$_SESSION['totalorder']=mysql_num_rows($result);
if(mysql_num_rows($result)>0)
{

	while($data=mysql_fetch_assoc($result))
		{
		    $orderID=$data['Order_Id'];

		    	?>
		    		

		    		<div class="row" style="background-color: #fff;padding: 10px;border-radius: 10px;">
                <div style="padding:10px;background: rgba(128, 128, 128, 0.54);">
                			

	                            <div class="row">
									  		 <div class="col s6 m6 l6">
									  		      <b>Order Date :</b> <?php echo date("d/m/Y", strtotime($data['orderDate'])); ?>
									  		 </div>
									  		 <div class="col s6 m6 l6">
									  		      <b>Status :</b><?php echo $data['status']; ?>
									  		 </div>
									  		 
									  		 <div class="col s6 m6 l6">
									  		      <b>Customer Name :</b><?php echo $data['CustomerName']; ?>
									  		 </div>
									  		 <div class="col s6 m6 l6">
									  		      <b>Mobile No :</b><?php echo $data['MobileNo'];; ?>
									  		 </div> 
									  		 <div class="col s6 m6 l6">
									  		      <b>Ship To :</b><?php

									  		      $address=explode('+', $data['deliveryAddress']);

									  		        foreach ($address as $add) {
									  		         	# code...
									  		         	echo "$add ";
									  		         } 
									  		        ?>
									  		 </div>
									  		 <div class="col s6 m6 l6">
									  		      <b>Order ID :</b><?php echo $data['Order_Id']; ?>
									  		 </div>
									  		 <div class="col s6 m6 l4">
									  		      <b>Original Price :</b><?php echo $data['originalPrice']; ?>
									  		 </div>
									  		 <div class="col s6 m6 l4">
									  		      <b>Offer :</b><?php 

									  		       if($data['offer']!="")
									  		      {
									  		      	echo $data['offer'];
									  		      } 
									  		      else
									  		      	echo "No Offer";

									  		      ?>
									  		 </div>
									  		  <div class="col s6 m6 l4">
									  		      <b>Final Price :</b><?php echo $data['offerPrice']; ?>
									  		 </div>
									  		  
									  		 
								</div>

								       <?php


								       			$result4=mysql_query("SELECT * FROM `orderrest` WHERE `orderID`='$orderID'");

								       			while($row=mysql_fetch_assoc($result4))
								       			{

								       				    $restID=$row['restID'];

								       				    $result5=mysql_query("SELECT * FROM `restaurant_info` WHERE `Restaurant_ID`='$restID'");

								       				    $data2=mysql_fetch_assoc($result5);

								       				    $restaurant_name=$data2['Restaurant_Name'];

								       				    echo "<h6><b>Restaurant Name :</b>".$restaurant_name."</h6>";


								       ?>


                            
                            
                       
												                           <table class="">
												                              <thead>
												                                <tr>
												                                    <!--th>Item Image</th-->
												                                    <th>Item Name</th>
												                                    <!--th>Item Price</th-->
												                                    <!--th>Discount</th-->
												                                    <th>Quantity</th>
												                                    <th>Item Total</th>
												                                    
												                                </tr>
												                              </thead>
												                              <tbody>


												                          <?php

												                          			$query2="SELECT * from restaurant_menu where restaurant_menu.Item_Id=ANY (SELECT orderitem.itemID FROM orderitem WHERE orderitem.orderID='$orderID') AND  Restaurant_Id='$restID'";

																					$result2=mysql_query($query2) or die(mysql_error());
																					
																					$total=0;
																					while($obj=mysql_fetch_assoc($result2))
																					{
																						$itemID=$obj['Item_Id'];
															                          $newprice=0;
															                          $query3="SELECT * FROM `orderitem` WHERE `orderID`='$orderID' and `itemID`='$itemID'";

																					$result3=mysql_query($query3) or die(mysql_error());

																					$d=mysql_fetch_assoc($result3);
																					//var_dump($d);
																					$quant=$d['quant'];
												                          



												                          ?>    

												                          		<tr>
												                                  <!--td colspan="1"><img src="<?php echo "../".$obj['Item_Image'];  ?>" class="responsive-img" style="width:100px;"></td-->
												                                  <td><?php echo $obj['Item_Name'];  ?></td> 
												                                  <!--td-->
												                                  	<?php 
														                               if($obj['Discount']>0)
														                               {
														                               	  $price1=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
														                               	  $newprice=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
																						  echo "<del>&#8377;".$obj['Item_price']."/-</del>  &#8377;".$newprice."/-";
																						  

														                               }
																						else{
																						// echo "&#8377;".$obj['Item_price']."/-";
																						  $price1=$obj['Item_price'];
																						  $newprice=$obj['Item_price'];

																						  
																						 } 
																				  ?>
												                                  <!--/td-->
												                                  <!--td-->

												                                      <?php 
														                               if($obj['Discount']>0)
														                               {
														                               	
														                               	  // echo $obj['Discount']."%";
														                               	   

														                               }
																						else{
																						      //echo "NA"; 
																						 } 
																				  ?>
												                                  	  
												                                  <!--/td-->
												                                  <td>
												                                  	   <?php echo $quant;  ?>
												                                  </td>
												                                  <td>
												                                  	  <?php echo "&#8377;".$newprice*$quant."/-";
												                                  	  $total=$total+($newprice*$quant);
												                                  	   ?>
												                                  </td>                        
												                                </tr>


														    	<?php

														}



														?>


														<tr>
												                                  
												                                  <td colspan="3">
												                                  	 
												                                  	 <!--div class="input-field col s12 m6" style="">
																						    <select onchange="changestatus(<?php echo $orderID; ?>,this.value);" style="display: block;background-color: #fff;">
																						      <option value="" disabled selected>Change Order Status</option>
																						      <option>Received</option>
																						      <option>Dispatched</option>
																						      
																						    </select>
																						    
																						  </div-->
																						  

												                                  </td>
												                                  
												                                 
												                                  <td><b>Order Total :</b><?php echo "&#8377;".$total."/-"; ?></td>
												                                                         
												                                </tr>

															  		 
															  		 			  		
														  		</tbody>
												                            </table> 

												                            <?php


												                            }

												                            ?>                     
                        
                    </div>
                    </div>





		<?php


	}

}



?>



<?php
/*
include_once('config.php');

$restID=$_SESSION['Restaurant_ID'];
$query="SELECT * from orders,customers WHERE orders.Order_Id=ANY (SELECT orderrest.orderID from orderrest WHERE orderrest.restID='$restID') and customers.Email=ANY (SELECT orders.custID from orders WHERE orders.Order_Id=ANY (SELECT orderrest.orderID from orderrest WHERE orderrest.restID='$restID')) ORDER BY orders.Order_Id DESC";

$result=mysql_query($query);

$_SESSION['totalorder']=mysql_num_rows($result);
if(mysql_num_rows($result)>0)
{
      
		while($data=mysql_fetch_assoc($result))
		{
		    $orderID=$data['Order_Id'];
              


		?>
		<div class="row" style="background-color: #fff;padding: 20px;border-radius: 10px;">
                <div style="background-color: #DBD7D7;padding: 20px;">
                <table class="">
                      <thead>
                        <tr>
                            <th>Order ID :<br><?php echo $orderID; ?></th>
                            <th>Order Date :<br><?php echo date("d/m/Y", strtotime($data['orderDate'])); ?></th>
                            <th data-field="price">Customer Name :<br><?php echo $data['CustomerName']; ?></th>
                            <th data-field="id">Mobile No :<br><?php echo $data['MobileNo'];; ?></th>
                            <th data-field="id">Shipping Address :<br><?php echo $data['deliveryAddress']; ?></th>
                            <th data-field="name">Status :<br><?php echo $data['status']; ?></th>
                            
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <table class="">
                              <thead>
                                <tr>
                                    <th>Item Image</th>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Discount</th>
                                    <th>Quantity</th>
                                    <th>Item Total</th>
                                    
                                </tr>
                              </thead>
                              <tbody>


			
		  		     
		  		     <?php
		  		     	
		  		     	$query2="SELECT * from restaurant_menu where restaurant_menu.Item_Id=ANY (SELECT orderitem.itemID FROM orderitem WHERE orderitem.orderID='$orderID') AND  Restaurant_Id='$restID'";

						$result2=mysql_query($query2) or die(mysql_error());
						
						$total=0;
						while($obj=mysql_fetch_assoc($result2))
						{
							$itemID=$obj['Item_Id'];
                          $newprice=0;
                          $query3="SELECT * FROM `orderitem` WHERE `orderID`='$orderID' and `itemID`='$itemID'";

						$result3=mysql_query($query3) or die(mysql_error());

						$d=mysql_fetch_assoc($result3);
						//var_dump($d);
						$quant=$d['quant'];




		  		     ?>

		  		     	<tr>
                                  <td colspan="1"><img src="<?php echo "../".$obj['Item_Image'];  ?>" class="responsive-img" style="width:100px;"></td>
                                  <td><?php echo $obj['Item_Name'];  ?></td> 
                                  <td>
                                  	<?php 
		                               if($obj['Discount']>0)
		                               {
		                               	  $price1=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
		                               	  $newprice=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
										  echo "<del>&#8377;".$obj['Item_price']."/-</del>  &#8377;".$newprice."/-";
										  

		                               }
										else{
										 echo "&#8377;".$obj['Item_price']."/-";
										  $price1=$obj['Item_price'];
										  $newprice=$obj['Item_price'];

										  
										 } 
								  ?>
                                  </td>
                                  <td>

                                      <?php 
		                               if($obj['Discount']>0)
		                               {
		                               	
		                               	   echo $obj['Discount']."%";
		                               	   

		                               }
										else{
										      echo "NA"; 
										 } 
								  ?>
                                  	  
                                  </td>
                                  <td>
                                  	   <?php echo $quant;  ?>
                                  </td>
                                  <td>
                                  	  <?php echo "&#8377;".$newprice*$quant."/-";
                                  	  $total=$total+($newprice*$quant);
                                  	   ?>
                                  </td>                        
                                </tr>




		  		     

			  		 <?php
			  		 	}
			  		 ?>

			  		  <tr>
                                  
                                  <td colspan="3">
                                  	 
                                  	 <div class="input-field col s12 m6" style="">
										    <select onchange="changestatus(<?php echo $orderID; ?>,this.value);" style="display: block;background-color: #fff;">
										      <option value="" disabled selected>Change Order Status</option>
										      <option>Received</option>
										      <option>Dispatched</option>
										      
										    </select>
										    
										  </div>
										  

                                  </td>
                                  
                                  <td></td>
                                  <td>Order Total</td>
                                  <td><?php echo "&#8377;".$total."/-"; ?></td>                        
                                </tr>

			  		 
			  		 			  		
		  		</tbody>
                            </table>                      
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    </div>


		<?
		
   }


}
else
{
	?>
	   <h4 class="text-center">You Dont Have Any Order Yet !</h4>

	<?php
}

*/
?>




