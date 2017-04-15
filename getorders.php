<?php

include_once('config.php');

$email=$_SESSION['email'];
$query="SELECT * FROM `orders` WHERE `custID`='$email' ORDER BY Order_Id DESC LIMIT 3";

$result=mysql_query($query);


if(mysql_num_rows($result)>0)
{
        while($data=mysql_fetch_assoc($result))
        {
        	$orderID=$data['Order_Id'];
        	//echo "<br>".$orderID;
        	?>

        			<div class="row">
        					<div class="panel panel-default" style="width:100%;">
								  	<div class="panel-heading">
									  	  <div class="row">
									  		 <div class="col-lg-2 col-xs-6">
									  		      <b>Order Date :</b><br> <?php echo date("d/m/Y", strtotime($data['orderDate'])); ?>
									  		 </div>
									  		 <div class="col-lg-2 col-xs-6">
									  		      <b>Status :</b><br><?php echo $data['status']; ?>
									  		 </div>
									  		 
									  		 <div class="col-lg-2 col-xs-6">
									  		      <b>Total :</b><br> &#8377;<?php echo $data['offerPrice']; ?>/-
									  		 </div>
									  		 <div class="col-lg-2 col-xs-6">
									  		      <b>Offer :</b><br> <?php if($data['offer']=='') echo "No Offer"; else echo $data['offer']; ?>
									  		 </div> 
									  		 <div class="col-lg-2 col-xs-6">
									  		      <b>Ship To :</b><br><?php

									  		      $address=explode('+', $data['deliveryAddress']);

									  		        foreach ($address as $add) {
									  		         	# code...
									  		         	echo "$add ";
									  		         } 
									  		        ?>
									  		 </div>
									  		 <div class="col-lg-2 col-xs-6">
									  		      <b>Order ID :</b><br><?php echo $data['Order_Id']; ?>
									  		 </div>
									  		 
									  	  </div>
								  		
								  	</div>
		  							<div class="panel-body">

		  										<div class="container">
		  		     
									  		     <?php
									  		     	
									  		     	$query2="SELECT * FROM restaurant_menu WHERE restaurant_menu.Item_Id=ANY (SELECT orderitem.itemID FROM orderitem WHERE orderitem.orderID='$orderID')";

													$result2=mysql_query($query2) or die(mysql_error());
													
													
													while($obj=mysql_fetch_assoc($result2))
													{

														?>

															<div class="row" style="margin-bottom: 5px;">
														  		     <div class="col-lg-4 col-sx-6">
														  		        <img src="<?php echo $obj['Item_Image'];  ?>" class="img-responsive" style="width:120px;">
														  		     </div>
														  		     <div class="col-lg-8 col-sx-6">
														  		           <p><?php echo $obj['Item_Name'];  ?><br/>Details : <?php echo $obj['Item_Details'];  ?></p>
														  		           <p style="color: red;">
														  		           	
														  		           	<?php 
											                               if($obj['Discount']>0)
											                               {
											                               	  $price1=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
											                               	  $newprice=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
																			  echo "<del>&#8377;".$obj['Item_price']."/-</del>  &#8377;".$newprice."/-";
																			  $total=$total+$newprice;

											                               }
																			else
																			{
																			 echo "&#8377;".$obj['Item_price']."/-";
																			  $price1=$obj['Item_price'];
																			  $newprice=$obj['Item_price'];

																			  $total=$total+$newprice;
																			 } 
																			 ?>


														  		           </p>
														  		     </div>
														  		 </div>

														<?php



													}
												 ?>
													</div>
							




		  		   
		  							</div>
		  							</div>
        			</div>

        	<?php
        }
}
else
{
	echo "<h3 align='center'>You Don't Have Any Order Yet !</h3>";
}





/*






















echo mysql_num_rows($result);
if(mysql_num_rows($result)>0)
{
  
		while($data=mysql_fetch_assoc($result))
		{
		    $orderID=$data['Order_Id'];




		?>
			<div class="row">
      				<div class="panel panel-default" style="width:100%;">
								  	<div class="panel-heading">
								  	  <div class="row">
								  		 <div class="col-lg-2">
								  		      Order Date :<br> <?php echo date("d/m/Y", strtotime($data['orderDate'])); ?>
								  		 </div>
								  		 <div class="col-lg-1">
								  		      Total :<br> &#8377;<?php echo $data['offerPrice']; ?>/-
								  		 </div>
								  		 <div class="col-lg-2">
								  		      Offer :<br> <?php if($data['offer']=='') echo "No Offer"; else echo $data['offer']; ?>
								  		 </div> 
								  		 <div class="col-lg-3">
								  		      Ship To :<br><?php echo $data['deliveryAddress']; ?>
								  		 </div>
								  		 <div class="col-lg-2">
								  		      Order ID :<br><?php echo $data['Order_Id']; ?>
								  		 </div>
								  		 <div class="col-lg-2">
								  		      Status :<br><?php echo $data['status']; ?>
								  		 </div>
								  	  </div>
								  		
								  	</div>
		  							<div class="panel-body">
		  		
		  		

		  								<div class="row container">
		  		     
		  		     <?php
		  		     	
		  		     	$query2="SELECT * FROM restaurant_menu WHERE restaurant_menu.Item_Id=ANY (SELECT orderitem.itemID FROM orderitem WHERE orderitem.orderID='$orderID')";

						$result2=mysql_query($query2) or die(mysql_error());
						
						
						while($obj=mysql_fetch_assoc($result2))
						{
							




		  		     ?>
		  		     <div class="row" style="margin-bottom: 5px;">
			  		     <div class="col-lg-1">
			  		        <img src="<?php echo $obj['Item_Image'];  ?>" class="img-responsive" style="width:120px;">
			  		     </div>
			  		     <div class="col-lg-11">
			  		           <p><?php echo $obj['Item_Name'];  ?><br/>Details : <?php echo $obj['Item_Details'];  ?></p>
			  		           <p style="color: red;">
			  		           	
			  		           	<?php 
                               if($obj['Discount']>0)
                               {
                               	  $price1=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
                               	  $newprice=($obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100));
								  echo "<del>&#8377;".$obj['Item_price']."/-</del>  &#8377;".$newprice."/-";
								  $total=$total+$newprice;

                               }
								else
								{
								 echo "&#8377;".$obj['Item_price']."/-";
								  $price1=$obj['Item_price'];
								  $newprice=$obj['Item_price'];

								  $total=$total+$newprice;
								 } 
								  ?>


			  		           </p>
			  		     </div>
			  		 </div>

			  		 <?php
			  		 	}
			  		 ?>

			  		 
			  		 			  		
		  		</div>
		  	</div>
		</div>
   </div>


		<?
		
   }


}
else
{
	?>
	   <h4 class="text-center">You Have No Order Placed Yet !</h4>

	<?php
}


?>




*/