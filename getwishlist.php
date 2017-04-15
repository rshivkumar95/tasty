<?php

	include('config.php');

	$action = $_POST['action'];
	

	$email=$_SESSION['email'];
		
		
		


	if($action=="showAll"){
		
		$query="SELECT * from restaurant_menu WHERE restaurant_menu.Item_Id=ANY(SELECT wishlist.prodID from wishlist WHERE wishlist.email='$email')";
		$result=mysql_query($query);
	}
	else if($action=="Name"){
		
		$query="SELECT * FROM `restaurant_menu` WHERE restaurant_menu.Item_Id=ANY(SELECT wishlist.prodID from wishlist WHERE wishlist.email='$email') ORDER BY `Item_Name`";
		$result=mysql_query($query);
	}
	else if($action=="Discount"){
		
		$query="SELECT * FROM `restaurant_menu` WHERE restaurant_menu.Item_Id=ANY(SELECT wishlist.prodID from wishlist WHERE wishlist.email='$email') ORDER BY `Discount` DESC";
		$result=mysql_query($query);
	}
	else if($action=="Price"){
		
		$query="SELECT * FROM `restaurant_menu` WHERE restaurant_menu.Item_Id=ANY(SELECT wishlist.prodID from wishlist WHERE wishlist.email='$email') ORDER BY `Item_price`";
		$result=mysql_query($query);
	}
	else if($action=="Popularity"){
		
		$query="SELECT * FROM `restaurant_menu` WHERE restaurant_menu.Item_Id=ANY(SELECT wishlist.prodID from wishlist WHERE wishlist.email='$email') ORDER BY `sellcount` DESC";
		$result=mysql_query($query);
	}
	
	?>
	
	<?php
	if(mysql_num_rows($result) > 0){
		
		while($obj=mysql_fetch_array($result))
		{
			
	
			?>
			 <li class="ajax_block_product col-xs-6 col-sm-6 col-md-2 ">
													<div class="product-container" itemscope="" >
														<div class="left-block">
															<div class="product-image-container">
																<a style="" class="product_img_link" onclick="viewproduct(<?php echo $obj['Item_Id']; ?>)" title="<?php echo $obj['Item_Name']; ?>" itemprop="url">
																	<img class="replace-2x img-responsive" src="<?php echo $obj['Item_Image']; ?>" alt="<?php echo $obj['Item_Name']; ?>" style="border-radius: 10px;" title="bourbon chicken" itemprop="image">
																</a>
																<span class="new-box"><span class="new-label">New</span></span>
															</div>
															<div class="actions quickview-block" >
																   <ul class="add-to-links">
																		<li class="first">								
																			<div class="wishlist">
																				<a class="addToWishlist wishlistPord_1" title="Wishlist" onclick="WishlistCart(<?php echo $obj['Item_Id']; ?>);">
																					Add to Wishlist
																				</a>
																			</div>
																		</li>
																		
																		<li class="last">
																		   <a class="quick-view" onclick="viewproduct(<?php echo $obj['Item_Id']; ?>)" >
																		   <span>Quick view</span>
																	      </a>
																		</li>
																		<li >
																			<div class="compare">
																		       <a class="add_to_compare" title="Add to cart" onclick="addtocart(<?php echo $obj['Item_Id']; ?>,<? echo $obj['Restaurant_Id']; ?>)">Add to Cart</a>
																	        </div>
																		</li>
																	</ul>
						
															</div>
														</div>
														<div class="right-block">
															<h5 itemprop="name">
																<a class="product-name" onclick="viewproduct(<?php echo $obj['Item_Id']; ?>)" title="<?php echo $obj['Item_Name']; ?>" itemprop="url">
																	<?php echo $obj['Item_Name']; ?>
																</a>
															</h5>
															<div itemprop="offers"  class="content_price">
																<span itemprop="price" class="price product-price">
																		<?php 
										                               if($obj['Discount']>0)
										                               {
										                               	  $newprice=$obj['Item_price']-(($obj['Item_price']*$obj['Discount'])/100);
																		  echo "<del>&#8377;".$obj['Item_price']."/-</del>  &#8377;".$newprice."/-";
										                               }
																		else
																		 echo "&#8377;".$obj['Item_price']."/-";	 
																		  ?>	
																	<meta itemprop="priceCurrency" content="0">
															</div>
															<h5 itemprop="name">
						
																	<p class="product-name"><?php 
																	    if($obj['Discount']>0)
																	    	echo "Discount ".$obj['Discount']."%"; 
																	    else
																	    	echo "<br>";?></p>
																
															</h5>
															<div class="button-container">
																<a class="button ajax_add_to_cart_button btn btn-default"  rel="nofollow" title="Add This Item To Your Cart" onclick="addtocart(<?php echo $obj['Item_Id']; ?>)">
										      <span>Add to Cart</span>
									       </a>
															</div>
															<div class="product-flags">
																																								
															</div>
														</div>
				
													</div>
												</li>
			<?php		
		}
		
	}else{
		
		?>
        <div class="col-sm-12">			
            <h1 class="text-center">No Menu Items Found</h1>
			<br />
		</div>
        <?php		
	}
	
	
	?>
	