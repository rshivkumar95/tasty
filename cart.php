<?php

include_once('config.php');

$email=$_SESSION['email'];

$query="SELECT * FROM `customers` WHERE `Email`='$email'";

$result=mysql_query($query);

$obj=mysql_fetch_assoc($result);

$defaultDelivery=$obj['CustomerAddress'];



?>

<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="en"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="en"><![endif]-->
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8"/>
		<title>Tasty Tadkaa | Don't go anywhere we will bring</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		
			<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/autoload/highdpi.css" type="text/css" media="all" />
			
			<link rel="stylesheet" href="css/product_list.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blockcart/blockcart.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blockcategories/blockcategories.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blockcurrencies/blockcurrencies.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blocklanguages/blocklanguages.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blockcontact/blockcontact.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blocknewsletter/blocknewsletter.css" type="text/css" media="all" />
			<link rel="stylesheet" href="js/jquery/plugins/autocomplete/jquery.autocomplete.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blocksearch/blocksearch.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blocktags/blocktags.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blockuserinfo/blockuserinfo.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/blockwishlist/blockwishlist.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/productcomments/productcomments.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/posslideshow/css/nivo-slider/nivo-slider.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/posmegamenu/css/custommenu.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/posnewproduct/css/posnewproduct.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/modules/posnewproduct/css/new.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/newcustom.css" type="text/css" media="all" />
		    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,600" type="text/css" media="all" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/search.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://use.fontawesome.com/a13e2267ce.js"></script>
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
			 <!-- This is what you need -->
    		<script src="dist/sweetalert.js"></script>
    		<link rel="stylesheet" href="dist/sweetalert.css">
  			<script type="text/javascript">
	
					(function($){
					     $.fn.extend({  
					         mobilemenu: function() {       
					            return this.each(function() {
					            	
					            	var $ul = $(this);
					            	
									if($ul.data('accordiated'))
										return false;
																		
									$.each($ul.find('ul, li>div'), function(){
										$(this).data('accordiated', true);
										$(this).hide();
									});
									
									$.each($ul.find('span.head'), function(){
										$(this).click(function(e){
											activate(this);
											return void(0);
										});
									});
									
									var active = (location.hash)?$(this).find('a[href=' + location.hash + ']')[0]:'';

									if(active){
										activate(active, 'toggle');
										$(active).parents().show();
									}
									
									function activate(el,effect){
										$(el).parent('li').toggleClass('active').siblings().removeClass('active').children('ul, div').slideUp('fast');
										$(el).siblings('ul, div')[(effect || 'slideToggle')]((!effect)?'fast':null);
									}
									
					            });
					        } 
					    }); 
					})($);

						$(document).ready(function () {
							
							$("ul.mobilemenu li span.grower").each(function(){
						        $(this).append('<span class="head"><a href="javascript:void(0)"></a></span>');
						      });
							
							//$('ul.mobilemenu').mobilemenu();
							$('#ma-mobilemenu').css('display','none');
							$("ul.mobilemenu li.active").each(function(){
								$(this).children().next("ul").css('display', 'block');
							});
						    
							//mobile
							$('.btn-navbar').click(function() {
								
								var chk = 0;
								if ( $('#navbar-inner').hasClass('navbar-inactive') && ( chk==0 ) ) {
									$('#navbar-inner').removeClass('navbar-inactive');
									$('#navbar-inner').addClass('navbar-active');
									$('#ma-mobilemenu').css('display','block');
									chk = 1;
								}
								if ($('#navbar-inner').hasClass('navbar-active') && ( chk==0 ) ) {
									$('#navbar-inner').removeClass('navbar-active');
									$('#navbar-inner').addClass('navbar-inactive');			
									$('#ma-mobilemenu').css('display','none');
									chk = 1;
								}
								//$('#ma-mobilemenu').slideToggle();
							});    
						    
						});
						</script>



					<!--[if IE 8]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
					<![endif]-->
					<style type="text/css">
				        #search 
				        {
						    width: 80%;
						    box-sizing: border-box;
						    border: 2px solid #e52f2f;
						    border-radius: 6px;
						    font-size: 16px;
						    background-color: white;
						    background-image: url('img/search.png');
						    background-position: 10px 7px; 
						    background-repeat: no-repeat;
						    padding: 12px 20px 15px 45px;
						    -webkit-transition: width 0.4s ease-in-out;
						    transition: width 0.4s ease-in-out;
						    margin-bottom: 10px;
						}

						#search1 
						{
						    width: 80%;
						    box-sizing: border-box;
						    border: 2px solid #e52f2f;
						    border-radius: 6px;
						    font-size: 16px;
						    background-color: white;
						    background-image: url('img/search.png');
						    background-position: 10px 7px; 
						    background-repeat: no-repeat;
						    padding: 12px 20px 15px 45px;
						    -webkit-transition: width 0.4s ease-in-out;
						    transition: width 0.4s ease-in-out;
						    margin-bottom: 10px;
						}

						.btn-circle.btn-xl {
						  width: 70px;
						  height: 70px;
						  padding: 10px 16px;
						  font-size: 24px;
						  line-height: 1.33;
						  border-radius: 35px;
						}

						.nivo-box img{
							height:400px !important;
						}

					</style>
 	
 
</head>



<body id="index" class="index hide-left-column lang_en">
	<div id="page">
			<div class="header-container">
				<header id="header">
					<div class="nav" style="background-color: #e52f2f">
						<div class="container">
							<div class="row">
								<nav>

     								<div class="row">
										<div class="col-lg-2" style="padding-top: 12px;"><li style="color: #eeeeee "> <strong>support@tastytadkaa.com</strong></li></div>
										<div class="col-lg-10" style="padding-top: 0px;">
											<ul id="header_links">
											    <li><a class="link-myaccount" href="myaccount.php" title="My account">My account</a></li>
											    <li><a class="link-wishlist wishlist_block" href="wishlist.php" title="My wishlist">Wishlist</a></li>	
												<li><a class="link-mycart" href="cart.php" title="My cart">My cart</a></li>	
												<?php
											           if($_SESSION['logged']==0)
											           {
												?>
															<li class="last"><a class="link-login" href="login.php" title="Login"  rel="nofollow">Login</a></li>

												<?php
												
												       }

												?>			
		
											</ul>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<div class="header-content" style="background: url(img/biryani.jpg); ">
						<div class="container">
							<div class="row">
								<div id="header_logo" class="col-md-3 col-sm-3 col-sms-3">
										<a href="index.php" title="Tasty Tadkaa">
											<img class="logo img-responsive" src="img/TastyTadka.gif" alt="Tasty Tadkaa"  style="height:50%; width:60%; "/>
										</a>
								</div>								
								<div class="quick-access col-md-9 col-sm-9 col-sms-9" style="margin-top: 20px;">
									<!-- Block search module TOP -->

									<form class="input_container">
									   <input type="text" id="search" name="search" onkeyup="autocomplet()" placeholder="Search" style="width:80%;float:left;margin-left:50px;margin-bottom: 0px;">
									                    <ul id="search_list"></ul>
									</form>
									<br>
									<div class="icon-cart clearfix">
										<div class="shopping_cart" style="color: white;">
											<a href="cart.php" title="View my shopping cart" rel="nofollow">
												<b>Cart</b>
												<!--<span class="ajax_cart_quantity">0</span>-->
												<span class="ajax_cart_product_txt unvisible">Product</span>
												<span class="ajax_cart_product_txt_s unvisible">Products</span>
												<span class="ajax_cart_total unvisible">
																</span>
												<span class="ajax_cart_no_product">(empty)</span>
														</a>
														
												</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						
					<div class="ma-nav-mobile-container visible-xs visible-sm">
						<div class="container">
							<div class="navbar">
								<div id="navbar-inner" class="navbar-inner navbar-inactive">
									<div class="menu-mobile">
										<a class="btn btn-navbar">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</a>
										<span class="brand">Category</span>
									</div>
									<ul id="ma-mobilemenu" class="tree  mobilemenu nav-collapse collapse dynamized" style="display: none;">
																							
											<li><a href="index.php" title="">Home</a></li>
									        <li><a href="veg.php" title="">Veg</a></li>
									        <li><a href="non-veg.php" title="">Non Veg</a></li>
									        <li><a href="fast-food.php" title="">Fast Food</a></li>
									        <li><a href="sweets.php" title="">Sweets</a></li>
									        <li><a href="tiffine.php" title="">Tiffine</a></li>
									        <li><a href="bakery-items.php" title="">Bakery Items</a></li>
									        <li><a href="juice.php" title="">Juice</a></li>
									        <li><a href="others.php" title="">Others</a></li>		
									</ul>
									
					                                
								</div>
							</div>
						</div>
					</div>
<!-- /Block categories module -->

						<div class="nav-container visible-lg visible-md">
							<div class="">
								<div id="pt_custommenu" class="pt_custommenu">					   
								    <div id="pt_menu_home" class="pt_menu"><div class="parentMenu"><a href="index.php"><span>Home</span></a></div></div>
								    <div id="pt_menu111" class="pt_menu nav-1"><div class="parentMenu"><a href="veg.php"><span>Veg</span></a></div></div>
								    <div id="pt_menu112" class="pt_menu nav-2"><div class="parentMenu"><a href="non-veg.php"><span>Non-Veg</span></a></div></div>
								    <div id="pt_menu115" class="pt_menu nav-5 act"><div class="parentMenu dropdown"><a href="fast-food.php"><button class="dropbtn"><span >fast food</span></button></a>
										  <div id="ddd1" class="dropdown-content">
										    <a id="dddd" href="chinese.php">Chinese</a>
										    <a id="dddd" href="south-indian.php">South Indian</a>
										  </div>
										  </div>
									</div>
								    <div id="pt_menu114" class="pt_menu nav-4"><div class="parentMenu"><a href="sweets.php"><span>Sweets</span></a></div></div>
								    <div id="pt_menu115" class="pt_menu nav-5"><div class="parentMenu"><a href="tiffine.php"><span>Tiffine</span></a></div></div>
									<div id="pt_menu115" class="pt_menu nav-5"><div class="parentMenu"><a href="bakery-items.php"><span>Bakery Items</span></a></div></div>
									<div id="pt_menu115" class="pt_menu nav-5"><div class="parentMenu"><a href="juice.php"><span>juice</span></a></div></div>
									<div id="pt_menu115" class="pt_menu nav-5"><div class="parentMenu"><a href="others.php"><span>Others</span></a></div></div>
								</div>
							</div>
						</div>


					


					</header>
			</div>

<div class="columns-container">
				<div id="columns" class="container">
											

										<div class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12"></div>
					</div>
					<div class="row">
												<div id="center_column" class="center_column col-xs-12 col-sm-12">
							
	

<h1 id="cart_title" class="page-heading">Shopping-cart summary
			
	</h1>






<!-- Steps -->
<ul class="step clearfix" id="order_step">
	<li class="<?php if($_SESSION['redirect']=='true' or $_SESSION['redirect']=='payment') echo 'step_todo'; else echo 'step_current'; ?> first">
					<span><em>01.</em> Summary</span>
			</li>
	
	<li class="<?php if($_SESSION['redirect']=='true') echo 'step_current'; else echo 'step_todo'; ?> third">
					<span><em>02.</em> Delivery Address</span>
			</li>
	
	<li id="step_end" class="<?php if($_SESSION['redirect']=='payment') echo 'step_current'; else echo 'step_todo'; ?> third">
		<span><em>03.</em> Payment</span>
	</li>
</ul>
<!-- /Steps -->


<div id="cart_list" style="display: block">


</div>

<div id="address" style="display: none;">

    <div class="row" style="width:100%;background-color: #f5f5f5;margin: 0 auto;box-shadow: 10px 10px 4px #888888;border-radius: 35px;padding: 50px;">

        <form>
        	
        	<div class="row">
        	    <div class="col-sm-6">
                        <img src="img/delivery.png" class="img-responsive">
  				</div>
  				<div class="col-sm-6">

  				          
    					        <!--label for="defaultDelivery">Delivery Address</label-->
    							
    							<?php

    								$address=explode('+', $defaultDelivery);
    								//var_dump($address);
    							?>
    							<!--textarea   placeholder="Enter Delivery Address" id="defaultDelivery" rows="4" readonly="" style="width:100%;max-width: 100%;"><?php echo $defaultDelivery; ?></textarea-->
    							<div class="form-group">
    							<label for="houseNo">House No./Name</label>
    							<input type="text" id="houseNo" class="form-control" name="houseNo" value="<?php echo $address['0']; ?>">
    							
    							</div>
    							<div class="form-group">
    							<label for="streetAddress">Street Address</label>
    							<input type="text" id="streetAddress" class="form-control" name="streetAddress" value="<?php echo $address['1']; ?>">
    							
    							</div>
    							<div class="form-group">
    							<label for="landmart">Landmark</label>
    							<input type="text" id="landmark" class="form-control" name="landmark" value="<?php echo $address['2']; ?>">
    							
    							</div>
    							<div class="form-group">
    							<label for="pincode">Pincode</label>
    							<input type="text" id="pincode" class="form-control" name="pincode" value="<?php echo $address['3']; ?>">
    							
    							</div>
    							<div class="form-group">
    							<label for="city">City</label>
    							<input type="text" id="city" class="form-control" name="city" value="Nanded" readonly="">
    							
    							</div>
  						</div>
  						<br>
  					      <label class="checkbox-inline"><input id="otherDelivery" type="checkbox" onCheck="otherDelivery();">Deliver to different address ?</label>
                      <br><br><br>
  					      <button type="button" class="btn btn-success" style="float:right;" onclick="proceedme();">Proceed</button>
  					      <button type="button" class="btn btn-warning" style="float:left;" onclick="takemeback();">Back</button>


  				</div>
  			</div>

        </form>
        
    </div>

</div>


<div id="payment" style="display: none;">
	
      <div class="row" style="width:100%;background-color: #f5f5f5;margin: 0 auto;box-shadow: 10px 10px 4px #888888;border-radius: 35px;padding: 50px;">

        <form>
        	
        	<div class="row">
        	    <div class="col-sm-6" style="font-size: 15px;">
        	     <h4>Offers Available For You !</h4>

         <?php
            
                   $query="SELECT * FROM `offers` WHERE `OfferStatus`='Active' ORDER BY rand() LIMIT 6";

                   $result=mysql_query($query);

                   while ($obj=mysql_fetch_assoc($result)) {
                   	
                ?>

						<div class="radio">
						  <label><input type="radio" name="optradio" value="<?php echo $obj['OfferID']; ?>"><?php  echo "<b>".$obj['OfferCode']."</b>*".$obj['OfferName']."&nbsp;&nbsp;".$obj['OfferDetails']; ?></label>
						</div><br>

                <?php
                   }

         ?>
  
                       <!--div class="radio">
						  <label><input type="radio" name="optradio" value="0">Enter Offer Code Manually !</label>
						</div--><br><br><br>

						<form >
							
							<div id="offer" style="display: none;" class="row"  >
							  <div class="col-sm-11 col-lg-11">
								<div class="form-group">
								
								<input type="text" name="offercode" placeholder="Enter Offer Code" class="form-control" id="offercode" style="text-transform: uppercase;" onkeyup="checkcode(this);">						</div>		
									
								
							  </div>
							  <div class="col-sm-1 col-lg-1" style="padding-left:0;">
							    
							    <span id="correct" class="glyphicon glyphicon-ok" style="color:green;display: none"></span>
								<span id="wrong" class="glyphicon glyphicon-remove" style="color:red;display: none"></span>
							     
							  </div>
							  	
							</div>


						</form>

                  
                        
						
						
  				</div>
  				<div class="col-sm-6">

                       <div id="order-detail-content" class="table_block table-responsive">
						<table id="cart_summary" class="table table-bordered">
						   <thead>
						   	  <tr>
						   	   <th colspan="2">Order Summary</th>
						   	  </tr>
						   </thead>
							
							
							<tbody>
							 <tr>
							    <td ><b>Total</b></td>
							    <td>&#8377;<span><?php echo $_SESSION['ordertotal']=$_SESSION['delivery']+$_SESSION['ordertotal']; ?></span>/-</td>
							 </tr>
							 
							 <tr>
							   <td ><b>Applied Offer</b></td>
							    <td><span id="appliedoffer"><?php if($_SESSION['offercode']!="") echo $_SESSION['offercode']; else "None"; ?></span></td>
							 </tr>
							 <tr>
							    <td colspan="2"><span id="offerdetails"><?php if($_SESSION['offerdetails']!="") echo $_SESSION['offerdetails'];  ?></span></td>
							 </tr>
							 <tr>
							   <td ><b>Order Total</b></td>
							    <td><b>&#8377;<span id="ordertotal"><?php echo $_SESSION['finaltotal'];; ?></span>/-</b></td>
							 </tr>


							</tbody>

						</table>


  				     </div>

  				     	<br><br><br>
  					      <button type="button" class="btn btn-success" style="float:right;" onclick="proceedmepayment();">Proceed To Payment</button>
  					      <button type="button" class="btn btn-warning" style="float:left;" onclick="takemebackpayment();">Back</button>


  			</div>

        </form>
        
    </div>


</div>


	
	
	
																								
		
	
	
					</div><!-- #center_column -->
										</div><!-- .row -->
				</div><!-- #columns -->
			</div>



</form>
</div>




			
			<div class="footer-container">
				<div id="footer">

					<div class="pos-footer-center">
					    <div class="container">
						<div class="container-inner">
						    <div class="footer-center">
							<div class="row">
								<div class="footer-static row-fluid">
									<div class="f-col f-col1 col-md-4 col-sm-3 col-sms-12 footer-block">
										<div class="about-us">
										
										<h4>About Us</h4>
										
										<div class="footer-static-content ">
										<p align="justify">Tasty Tadkaa is online marketplace for Food, providing a digital platform for Restaurants &amp; other establishments . It is proudly founded by Adbhut Innovations. Adbhut Innovations is a Nanded based firm established by Nandedian. We are working in the area of Marketing &amp; Consultancy. We are committed to deliver best service &amp; pioneered to deliver more online services in future.</p>
										<div class="address">Adbhut Innovation, Vishnu Nagar, Nanded.</div>
										<div class="phone">9168337195, 7972338117</div>
										<div class="mail">adbhutinnovations@gmail.com </div>
										</div>
										</div>
									</div>
							
				      <!-- Block myaccount module -->
									<section class="footer-block col-md-2 col-sm-3 col-sms-12">
										<div class="">
										<h4>Quick Links</h4></div>
										<div class="block_content ">
											<ul class="bullet">
											
												<li><a class="link-myaccount" href="index.php" title="My account">Home</a></li>
											    <li><a class="link-wishlist wishlist_block" href="about.php" title="">About Us</a></li>	
												<li><a class="link-mycart" href="contact.php" title="My cart">Contact Us</a></li>
												<li><a class="link-mycart" href="partner.php" title="My cart">Partner With Us</a></li>
												<li><a class="link-mycart" href="support.php" title="My cart">Support &amp; Feedback</a></li>		
												
															
									            		</ul>
										</div>
									</section>

									<section class="footer-block col-md-3 col-sm-3 col-sms-12">
										<div class="">
										<h4>Terms &amp; Policy</h4></div>
										<div class="block_content ">
											<ul class="bullet">
												<li><a class="link-myaccount" href="terms.php" title="My account">Terms &amp; Conditions</a></li>
											    <li><a class="link-wishlist wishlist_block" href="privacy.php" title="My wishlist">Privacy Policy</a></li>	
													
												<li><a class="link-mycart" href="return.php" title="My cart">Return &amp; Refund Policy</a></li>	
												<li><a class="link-mycart" href="delivery-policy.php" title="My cart">Delivery Policy</a></li>
												<li><a class="link-mycart" href="disclaimer.php" title="My cart">Disclaimer</a></li>		
											</ul>
										</div>
									</section>

									<section class="footer-block col-md-2 col-sm-3 col-sms-12">
										<div class="">
										<h4>Payment Method</h4></div>
										 <br>
										<div class="block_content ">

											<img src="img/payumoney.png" class="img-responsive" style="height: 50px;width:80px;float: left">&nbsp;
											<img src="img/paytm.png" class="img-responsive" style="height: 50px;width:80px;float: right;">
										</div>
									</section>
<!-- /Block myaccount module -->

		 					
				      	
	<!-- /MODULE Block footer -->

		 					
			</div>


							</div>
						    </div>
						</div>
					    </div>
					</div>
				   <!--div style="background: #202021;padding: 20px;">
				      <div class="container">
				       <div class="col-sm-4" style="color: #cccccc;">
				           <h3>About us:</h3>

<p align="justify">Tasty Tadkaa is online marketplace for Food, providing a digital platform for Restaurants &amp; other establishments . It is proudly founded by Adbhut Innovations. Adbhut Innovations is a Nanded based firm established by Nandedian. We are working in the area of Marketing &amp; Consultancy. We are committed to deliver best service &amp; pioneered to deliver more online services in future.</p>
						<p><span class="glyphicon glyphicon-map-marker"></span>  Adhbut Innovations, Vishnu Nagar, Nanded</p>
				       </div>
				       <div class="col-sm-4">
				       </div>
				       <div class="col-sm-4">
				       </div>
				       </div>
				   	
				   </div-->
					
			            
					
					<div class="pos-footer-bottom">
					    <div class="container">
							<div class="container-inner">
							    <div class="footer-bottom">
									<div class="footer-static row-fluid" style="padding: 10px;font-size:15px;">
										<div class="col-sm-5 footer-address">
												<p>Copyright &copy; 2017 Adbhut Innovations.All rights reserved.</p>
										</div>
										<div class="col-sm-3">
										  <div class="content">
											<ul style="padding: 10px;">

												<a class="twitter" target="_blank" href="https://www.facebook.com/tastytadkaa/">
													<img src="img/social/facebook-logo.png">
												</a>
												<a class="twitter" target="_blank" href="https://plus.google.com/u/0/100923056126816281895">
													<img src="img/social/google-plus-social-logotype.png">
												</a>
												<a class="twitter" target="_blank" href="https://twitter.com/adbhutin">
													<img src="img/social/twitter-social-logotype.png">
												</a>
												
											</ul>
										  </div>
										</div>
					      				<div class="col-sm-4" style="padding-top: 15px;">
										    	<p >Proudly developed by <a target="_blank" href="http://technomatesystems.com" style="color:orange;">Technomate Systems</a>.</p>
										</div>
									</div>
							    </div>
							</div>
					    </div>					    
					</div>
				</div>
			</div><!-- #footer -->
		<div class="back-top"><a href="#" class="mypresta_scrollup hidden-phone" style="display: inline;"></a></div>

</div><!-- #page -->


<script type="text/javascript">
/*$(document).ready(function()
{	

//Check if the current URL contains '#' 
if(document.URL.indexOf("#")==-1)
{
// Set the URL to whatever it was plus "#".
url = document.URL+"#";
location = "#";

//Reload the page
location.reload(true);

}	
	
	
	
	
	// code to get all records from table via select box
});*/
</script>


<script type="text/javascript">


    
    $(document).ready(function()
{		
	// function to get all records from table
	function getAll(){

	
		
		$.ajax
		({
			url: 'getcart.php',
			data: {},
			type:'POST',
			cache: false,
			success: function(r)
			{
			   
				$("#cart_list").html(r);
				
			}
		});			
	}
	
	getAll();
	hideshow();
	refresh();
    

	//minOrder();
				if(document.URL.indexOf("#")==-1)
				{
				// Set the URL to whatever it was plus "#".
				url = document.URL+"#";
				location = "#";

				//Reload the page
				location.reload(true);

				}	
	// function to get all records from table
	
					function hideshow()
					{
						var redirect='<?php echo $_SESSION['redirect']; ?>';
						     
						                   
						if(redirect=='true')
						{
							var first=document.getElementById('cart_list');
							var second=document.getElementById('address');
							var third=document.getElementById('payment');

							first.style.display="none";
							second.style.display="block";
							first.style.display="none";
						}
						else if(redirect=='payment')	
						{
							var first=document.getElementById('cart_list');
							var second=document.getElementById('address');
							var third=document.getElementById('payment');

							first.style.display="none";
							second.style.display="none";
							third.style.display="block";
						}
						else
						{
							var first=document.getElementById('cart_list');
							var second=document.getElementById('address');
							var third=document.getElementById('payment');

							first.style.display="block";
							second.style.display="none";
							third.style.display="none";
						}

					}
   


					

	
					  function refresh()
					  {

					  				var delivery=minOrder();
									
							        var finalorderold=parseInt(document.getElementById("final_order").innerHTML);
        
         var finalordernew=totalordernew+delivery;
         document.getElementById("final_order").innerHTML=finalordernew;
					  }
	// code to get all records from table via select box
});


$("input[type=radio][name=optradio]").change(function()
					{	
						//alert('checked');

					   var id=this.value;
					   if(id==0)
					   {

					   	    var offer=document.getElementById('offer');

							offer.style.display="block";

					   }	
					   else
					   {

					   	     var offer=document.getElementById('offer');

							 offer.style.display="none";

							  

							
				              
				             $.ajax({
				                          url: 'offerData.php',
				                          type: 'POST',
				                          dataType: 'json',
				                          data: {
				                          'id': id,
				                          'sub': 'offers'
				                          },
				                         success:function(result)//we got the response
				                         {
				                             
				                             if(result=="Max usage limit exceeded for this coupon | Try Another !")
				                             {
				                             	swal('error !',result,'error');
				                             }
				                             else if(result=="Invalid coupon | Order total is less than Min Balance !")
				                             {
				                             	swal('error !',result,'error');
				                             }
				                             else
				                             {

				                             	//console.log(result);
				                             	var offercode=result[5];
				                             	var discount=parseInt(result[6]);
				                             	var temp='<?php echo $_SESSION['ordertotal']; ?>';
				                             	var balance=parseInt(temp);
				                             	var finaltotal=parseInt(balance-((balance*discount)/100));
				                             	//alert(discount+" "+finaltotal);
				                                if(discount>0)
				                             	   var discount1="Flat "+discount+"% OFF*";
				                                 else
				                                 	discount1="No Flat discount";

				                                 var offerdetails=result[1]+"*"+result[2]+"-"+discount1;
				                             	document.getElementById('appliedoffer').innerHTML=offercode;
				                             	document.getElementById('offerdetails').innerHTML=offerdetails;
				                             	document.getElementById('ordertotal').innerHTML=finaltotal;
				                             	changefinal(finaltotal,offercode,offerdetails);
				                             	swal("Congrats","Offer Applied !","success");



				                             	
				                             }
				                              
				                              
				                                                                                  
				                         },
				                         error:function(exception){}


				                      })  
				             


					   }

						
					})





function changefinal(finaltotal,offercode,offerdetails)
{
     $.ajax({
                          url: 'changequant.php',
                          type: 'POST',
                          dataType: 'json',
                          data: {
                          'finaltotal': finaltotal,
                          'offerdetails':offerdetails,
                          'offercode':offercode,
                          'sub': 'finaltotal'
                          },
                         success:function(result)//we got the response
                         {

                             	 
                                                                                                                                             
                         }
                         

                      })
}


	
    function search1(key)
    {
        
    	  window.location="search.php?by=landmark&key="+key;
    }

 function search(key)
    {
        
    	  window.location="search.php?by=any&key="+key;
    }

    function pricecal(price,itemid,restid)
    {
    	

    	var quant=document.getElementById("qty"+itemid).innerHTML;

     if(quant<=0)
     {
     	swal('Minimum Quantity','Order Quantity Must Be Minimum One !','error');
     	document.getElementById("qty"+itemid).innerHTML="1";
     }
     else if (quant>10) 
     {
     	swal('Maxmimun Quantity','Order Quantity Must Be Maxmimun Ten !','error');
     	document.getElementById("qty"+itemid).innerHTML="10";
     }     
     else
     {        
    	var total=quant*price;
    	var oldprice=parseInt(document.getElementById('totalprice'+itemid).innerHTML);
    	
    	document.getElementById('totalprice'+itemid).innerHTML=total;
    	var newprice=parseInt(document.getElementById('totalprice'+itemid).innerHTML);
    	
        var totalproductold=parseInt(document.getElementById("total"+restid).innerHTML);
        var totalproductnew=(totalproductold-oldprice)+newprice;
      
        document.getElementById("total"+restid).innerHTML=totalproductnew;
        var totalrestaurantold=parseInt(document.getElementById("total_restaurant"+restid).innerHTML);
       
        var totalrestaurantnew=(totalrestaurantold-totalproductold)+totalproductnew;
        document.getElementById("total_restaurant"+restid).innerHTML=totalrestaurantnew;


        var totalorderold=parseInt(document.getElementById("total_order").innerHTML);
       
        var totalordernew=(totalorderold-totalrestaurantold)+totalrestaurantnew;
        document.getElementById("total_order").innerHTML=totalordernew;
        //document.getElementById("final_order").innerHTML=totalordernew;
        
       


        //var olddelivery=parseInt(document.getElementById("Delivery_charge").innerHTML);
         //alert(olddelivery);
         //document.getElementById("final_order").innerHTML=totalordernew;
        
          delivery=minOrder();

        //var newdelivery=parseInt(document.getElementById("Delivery_charge").innerHTML);
        //alert(newdelivery);
        var finalorderold=parseInt(document.getElementById("final_order").innerHTML);
        
         var finalordernew=totalordernew+delivery;
         document.getElementById("final_order").innerHTML=finalordernew;



        $.ajax({
                          url: 'changequant.php',
                          type: 'POST',
                         
                          data: {
                          'itemid': itemid,
                          'quant': quant,
                          'ordertotal':totalordernew,
                          'finalorder':finalordernew,
                          'delivery':delivery,
                          'sub': 'quant'
                          },
                         success:function(result)//we got the response
                         {
                         	
                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })  



     }

    }

    function increase(price,itemid,restid)
    {
    	//alert("Called +");
    	var quant=parseInt(document.getElementById("qty"+itemid).innerHTML);
    	
    	document.getElementById("qty"+itemid).innerHTML=quant+1;
    	pricecal(price,itemid,restid);
    	//minOrder();

    }
    function decrease(price,itemid,restid)
    {
    	var quant=document.getElementById("qty"+itemid).innerHTML;
    	document.getElementById("qty"+itemid).innerHTML=quant-1;
    	pricecal(price,itemid,restid);
    	//minOrder();

    }

    function removeitem(itemid)
    {
    	swal({
  title: "Remove ?",
  text: "Remove This Item ?",
  type: "info",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true,
},
function(){
  setTimeout(function(){

  				$.ajax({
                          url: 'removeitem.php',
                          type: 'POST',
                         
                          data: {
                          'itemid': itemid,                          
                          'sub': 'remove'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	swal(result1);

                            if(result1=='Item removed from Cart !')
                         	    window.location.href="cart.php";
                         	   // refreshcart();


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
    
  }, 2000);
});
    	
    }

  function minOrder()
  {
    
  	 var order = parseInt(document.getElementById("total_order").innerHTML);
     //alert(order);
     $charge=0;
     $.ajax({
                          url: 'getDelivery.php',
                          type: 'POST',
                         
                          data: {
                          'order': order,                          
                          'sub': 'delivery'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	//swal(result1);

                            if(result1=='less')
                            {
                            	document.getElementById("Delivery_charge").innerHTML=0;
                                    var d = document.getElementById("proceed");
	    d.className = d.className + " disabled";
	    //document.getElementById("minOrderWarning").innerHTML="Minimum Order Amount Must Be Greater &#8377; 50/-";
                            }
                            else
                            {
                            	document.getElementById("Delivery_charge").innerHTML=result1;
	 		 					$charge=parseInt(result1);
						 		var active = document.querySelector("#proceed");
								active.classList.remove("disabled");
						    	document.getElementById("minOrderWarning").innerHTML="";
                            }

                         	    


                         }


                      })


     return $charge;
  	 /*if(order<50)
  	 {
	  	var d = document.getElementById("proceed");
	    d.className = d.className + " disabled";
	    document.getElementById("minOrderWarning").innerHTML="Minimum Order Amount Must Be Greater &#8377; 50/-";
	 }
	 else
	 {
	 	if(order<50){
	 		var d = document.getElementById("proceed");
	    	d.className = d.className + " disabled";
	    	document.getElementById("minOrderWarning").innerHTML="Minimum Order Amount Must Be Greater &#8377; 50/-";
	 	 }
	 	else if(order>=50 && order<150)
	 	{
	 		//alert('30');
	 		 document.getElementById("Delivery_charge").innerHTML='30';
	 		 var delivery=document.getElementById("Delivery_charge").innerHTML;
	 		//alert(delivery);
	 		var active = document.querySelector("#proceed");
			active.classList.remove("disabled");
	    	document.getElementById("minOrderWarning").innerHTML="";
	 	}
	 	else if(order>=150 && order<300)
	 	{
	 		//alert('20');
	 		 document.getElementById("Delivery_charge").innerHTML='20';
	 	}
	 	else if(order>=300)
	 	{
	 		 document.getElementById("Delivery_charge").innerHTML='0';
	 	}

	 	
	 }*/
  }

   function refreshcart()
   {

  
      $.ajax
		({
			url: 'getcart.php',
			data: {},
			type:'POST',
			cache: false,
			success: function(r)
			{
				
				$("#cart_list").html(r);
			}
		});

   }


   function checklogin()
   {
   	             $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'checklogin'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	//alert(result1);

                            if(result1=='false')
                            {

                         	   swal("Not Logged In","You Need to login First | Login to Continue !","error");
                         	   window.location="login.php";
                            }
                            else
                            {

                            	proceedaddress();
                            }


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   }

   function proceedaddress()
   {

      $.ajax({
			                          url: 'check.php',
			                          type: 'POST',
			                         
			                          data: {
			                                                    
			                          'sub': 'proceedaddress'
			                          },
			                         success:function(result)//we got the response
			                         {
			                         	var result1=$.trim(result);
			                            if(result1=='true')
			                            {
			                         	   
			                         	   window.location="cart.php";
			                            }
			                         },
			                         error:function(exception){alert(JSON.stringify(exception));}
			                      })

   }

   function takemeback()
   {
   	   $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'takemeback'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                            if(result1=='true')
                            {
                         	   
                         	   window.location="cart.php";
                            }
                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   }

   function proceedme()
   {

   	    if(document.getElementById('houseNo').value==" " || document.getElementById('streetAddress').value==" " || document.getElementById('landmark').value==" " || document.getElementById('pincode').value==" " || document.getElementById('city').value=="")
   	    {
   	    	swal('Field Empty','All Fields are Compulsory','error');
   	    }
   	    else
   	    {
            var address=document.getElementById('houseNo').value+"+"+document.getElementById('streetAddress').value+"+"+document.getElementById('landmark').value+"+"+document.getElementById('pincode').value+"+"+document.getElementById('city').value;
            //alert(address);

   	   
   	   $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                           'address':address,                         
                          'sub': 'confirmpayment'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	//alert(result1);

                            if(result1=='payment')
                            {
                                   window.location="cart.php";
                         	    
                            }
                            


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   	     }
   }

   function proceedmepayment()
   {
   	   
   	   window.location.href='payment.php';

   }

   function takemebackpayment()
   {
   	   $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'takemebackpayment'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                            if(result1=='true')
                            {
                         	   
                         	   window.location="cart.php";
                            }
                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   }





</script>



<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var FancyboxI18nClose = 'Close';
var FancyboxI18nNext = 'Next';
var FancyboxI18nPrev = 'Previous';
var added_to_wishlist = 'Added to your wishlist.';
var ajax_allowed = true;
var ajaxsearch = true;
var baseDir = 'index.php';
var baseUri = 'index.php';
var blocksearch_type = 'top';
var contentOnly = false;
var customizationIdMessage = 'Customization #';
var delete_txt = 'Delete';
var freeProductTranslation = 'Free!';
var freeShippingTranslation = 'Free shipping!';
var id_lang = 1;
var img_dir = 'index.phpthemes/pos_zodiac_food/img/';
var instantsearch = false;
var isGuest = 0;
var isLogged = 0;
var loggin_required = 'You must be logged in to manage your wishlist.';
var mywishlist_url = 'loginb3ee.html';
var page_name = 'index';
var placeholder_blocknewsletter = 'Enter your e-mail';
var priceDisplayMethod = 0;
var priceDisplayPrecision = 2;
var quickView = true;
var removingLinkText = 'remove this product from my cart';
var roundMode = 2;
var search_url = 'search.html';
var static_token = 'fe364affbd7a5cead98d60a32f4c9470';
var token = '982facb7df6db2bcded595dabfb46b22';
var usingSecureMode = false;
var wishlistProductsIds = false;
</script>
<script type="text/javascript" src="js/jquery/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery/plugins/jquery.easing.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/autoload/10-bootstrap.min.js"></script>
<script type="text/javascript" src="js/autoload/15-jquery.total-storage.min.js"></script>
<script type="text/javascript" src="js/autoload/15-jquery.uniform-modified.js"></script>
<script type="text/javascript" src="js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/products-comparison.js"></script>
<script type="text/javascript" src="js/modules/blockcart/ajax-cart.js"></script>
<script type="text/javascript" src="js/jquery/plugins/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/jquery/plugins/jquery.serialScroll.js"></script>
<script type="text/javascript" src="js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/tools/treeManagement.js"></script>
<script type="text/javascript" src="js/modules/blocknewsletter/blocknewsletter.js"></script>
<script type="text/javascript" src="js/jquery/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="js/modules/blocksearch/blocksearch.js"></script>
<script type="text/javascript" src="js/modules/blockwishlist/js/ajax-wishlist.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/custommenu.js"></script>
<script type="text/javascript" src="js/mobile_menu.js"></script>
<script type="text/javascript" src="JS/scrolltop.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
		$('.icon_search').mouseenter(function() {
			$('#search_block_top').stop(true,true).slideDown();
		});

		$('.icon_search').mouseout(function() {
			$('#search_block_top').stop(true,true).slideUp();
		});
	})
	$('#search_query_top').on('focus', function(){
		    var $this = $(this);
		    if($this.val() == 'Search...'){
			$this.val('');
		    }
		}).on('blur', function(){
		    var $this = $(this);
		    if($this.val() == ''){
			$this.val('Search...');
		    }
		});
// <![CDATA[
                                        // we hide the tree only if JavaScript is activated
                                        $('div#categories_block_left ul.dhtml').hide();
                                // ]]>
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = 0;
var CUSTOMMENU_POPUP_TOP_OFFSET = 45;
//]]>
$(window).load(function() {
        $('#pos-slideshow-home').nivoSlider({
			effect: 'random',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: '600',
			pauseTime: '3000',
			startSlide: 0,
			directionNav: false,
			controlNav: 1,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: 'Prev',
			nextText: 'Next',
                        afterLoad: function(){
                         $('.pos-loading').css("display","none");
                        },     
                        beforeChange: function(){ 
                            $('.pos-slideshow-title, .pos-slideshow-des').css("left","-100%" );
                            $('.pos-slideshow-readmore').css("left","-100%"); 
                        }, 
                        afterChange: function(){ 
                            $('.pos-slideshow-title, .pos-slideshow-des, .pos-slideshow-readmore').css("left","100px") 
                        }
 		});
    });
$('.pos-new-product .bxslider').bxSlider({
            auto: 0,
	    infiniteLoop:false,
            slideWidth:210,
			slideMargin: 7,
			minSlides: 1,
			maxSlides: 8,
			speed:  3000,
			pause: 3000,
			controls: 1,
            pager: false,
		});
$('.pos-logo .bxslider').bxSlider({
            auto: 0,
            slideWidth:190,
			slideMargin: 5,
			minSlides: 1,
			maxSlides: 6,
			speed:  3000,
			pause: 600,
			controls: 1,
            pager: false,
		});
</script>
<script type="text/javascript">
	
(function($){
     $.fn.extend({  
         mobilemenu: function() {       
            return this.each(function() {
            	
            	var $ul = $(this);
            	
				if($ul.data('accordiated'))
					return false;
													
				$.each($ul.find('ul, li>div'), function(){
					$(this).data('accordiated', true);
					$(this).hide();
				});
				
				$.each($ul.find('span.head'), function(){
					$(this).click(function(e){
						activate(this);
						return void(0);
					});
				});
				
				var active = (location.hash)?$(this).find('a[href=' + location.hash + ']')[0]:'';

				if(active){
					activate(active, 'toggle');
					$(active).parents().show();
				}
				
				function activate(el,effect){
					$(el).parent('li').toggleClass('active').siblings().removeClass('active').children('ul, div').slideUp('fast');
					$(el).siblings('ul, div')[(effect || 'slideToggle')]((!effect)?'fast':null);
				}
				
            });
        } 
    }); 
})($);

$(document).ready(function () {
	
	$("ul.mobilemenu li span.grower").each(function(){
        $(this).append('<span class="head"><a href="javascript:void(0)"></a></span>');
      });
	
	//$('ul.mobilemenu').mobilemenu();
	$('#ma-mobilemenu').css('display','none');
	$("ul.mobilemenu li.active").each(function(){
		$(this).children().next("ul").css('display', 'block');
	});
    
	//mobile
	$('.btn-navbar').click(function() {
		
		var chk = 0;
		if ( $('#navbar-inner').hasClass('navbar-inactive') && ( chk==0 ) ) {
			$('#navbar-inner').removeClass('navbar-inactive');
			$('#navbar-inner').addClass('navbar-active');
			$('#ma-mobilemenu').css('display','block');
			chk = 1;
		}
		if ($('#navbar-inner').hasClass('navbar-active') && ( chk==0 ) ) {
			$('#navbar-inner').removeClass('navbar-active');
			$('#navbar-inner').addClass('navbar-inactive');			
			$('#ma-mobilemenu').css('display','none');
			chk = 1;
		}
		$('#ma-mobilemenu').slideToggle();
	});    
    
});
</script>
	</body>

<!-- Mirrored from demo.posthemes.com/pos_zodiac/food/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 06:21:51 GMT -->
</html>