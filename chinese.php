<?php

include_once('config.php');

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
	<div id="center_column" class="center_column col-xs-12 col-sm-9">
				
				 <!--form class="input_container1 text-center">

				    <input type="text" id="search1" name="search1" placeholder="Enter Your Location" onkeyup="autocomplet1()" style="width:80%;margin-bottom: 0px;">
                    <ul id="search_list1"></ul>
												     
					</form><br><br-->			
	
     	  	  



     	  	  

			  
			


<div class="row">

<div style="margin-top: 20px;"><h2 style="display: inline-block;
    font-family: 'Helvetica-Condensed-Black';
    font-size: 20px;
    margin: 0;
    color: #333;
    text-transform: uppercase;"></h2></div>
<hr>
<?php

							$query="SELECT * from restaurant_info where restaurant_info.Restaurant_ID=ANY (SELECT restaurant_menu.Restaurant_Id from restaurant_menu WHERE restaurant_menu.Item_category='Chinese') order by restaurant_info.Rating";
											                 $result=mysql_query($query);
											                 $i=1;
											                 if(mysql_num_rows($result)<=0)
											                 {
											                 	echo "<h1 style='text-align:center;'>No Restaurants Were Found In This Category !</h1>";
											                 }
											                 while ($obj = mysql_fetch_array($result)) {
												     	?>
<!-- Restaurant Box Start -->
<div class="restaurant-box" style="padding: 10px;color:#000;">
						  <a href="<?php echo 'restaurant.php?restaurant='.$obj['Restaurant_ID'] ?>">
							<div class="row inside" style="padding: 10px;position:relative;top:0;left:0;">

							   <div class="col-sm-12 col-lg-4">
							     
							        <div class="restaurant-logo" >
							        	<img src="<?php echo $obj['Restaurant_Logo']; ?>" class="img-responsive" style="width:160px;height:160px;border:1px solid red;border-radius: 5px;">	        		        
							        </div>
							        <span class="brand-tag">
							        		 <img src="img/brand.png">
							        	</span>

							   </div>
							   <div class="col-sm-12 col-lg-4" style="word-wrap:break-word;text-align: center;">

							      <h1 class="s_title_block" style="color: #000000;font-family: 'Telex-Regular';font-size: 25px;text-decoration: none;text-transform: capitalize;"><?php echo $obj['Restaurant_Name']; ?></h1>
							      <?php echo $obj['About_Restaurant']; ?>
							   	
							   </div>
							   <div class="col-sm-12 col-lg-4" style="word-wrap:break-word;">

							      <h4 style="color: #000000;font-family: 'Telex-Regular';font-size: 20px;text-decoration: none;text-transform: capitalize;">Rating :</h4>
						          
						          <?php
						             for($i=0;$i<5;$i++)
						             {
						             	  if($i<$obj['Rating'])
						             	  {
						             	  	echo "<i class='fa fa-star' aria-hidden='true'></i>";
						             	  }
						             	  else
						             	    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
						             }
						          ?>
							      
							      <h4 style="color: #2e2e2e;font-family: 'Telex-Regular';font-size: 15px;text-decoration: none;text-transform: capitalize;">&nbsp;</h4>
							      <h4 style="color: #2e2e2e;font-family: 'Telex-Regular';font-size: 15px;text-decoration: none;text-transform: capitalize;">Restaurant Time: <?php echo $obj['Restaurant_Hours']; ?> </h4>
							   	
							   </div>

							   <div class="overlay" style="background-color: #232323; height:100%;width:100%;opacity: 0.8;border-radius: 8px;color: white;text-align: center;vertical-align: middle;">
							   	      
							   	      <h1 class="on-hover-zoom" style="vertical-align: middle;">Click To View</h1>
							   	      <i class="fa fa-search fa-4x" aria-hidden="true"></i>

							   </div>
							   
							</div>
							</a>
						</div>

<hr>
<!-- Restaurant Box End -->
<?php
}
?>



<!--   Horizontal Ad Section -->	       
	
   <div class="row" style="margin-top: 10px;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <?php

							$query="SELECT * FROM `ads` WHERE `ADType`='Horizontal' AND `ADStatus`='Active' ORDER BY `ADPriority` DESC";
											                 $result=mysql_query($query);
											                 $i=1;
											                 while ($obj = mysql_fetch_array($result)) {
												     	?>
      <div class="item <?php if($i==1) echo 'active'; ?>">
        <img src="<?php echo $obj['ADImage']; ?>" alt="<?php echo $obj['ADTitle']; ?>" style="height:200px;">
      </div>

      <?php
      $i=$i+1;
  }
  ?>

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Horizontal Add Section End -->



</div>
	       
					</div><!-- #center_column -->
											<div id="right_column" class="col-xs-12 col-sm-3 column"><!-- Block categories module -->

<!-- /Block categories module -->





<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block products_block">
	<div class="best-sellers-title">
		<h4 class="title_block">
			Top sellers
		</h4>
	</div>
	<div class="block_content">
			<ul class="block_content products-block">

			<?php

     	            $query="SELECT * FROM `restaurant_menu` where Item_category='Chinese' ORDER BY RAND() LIMIT 5";
					$result=mysql_query($query);
											                 $i=1;
											                 while ($obj = mysql_fetch_array($result)) {
												     	

     ?>

						<li class="clearfix" style="width:70%;margin: 0 auto;">
				<center>
				<a onclick="viewproduct(<?php echo $obj['Item_Id']; ?>)" title="<?php echo $obj['Item_Id']; ?>" class="products-block-image content_img clearfix" style="text-decoration: none;color:#000;text-align: center;border: 1px solid red;border-radius: 10px;">
					<img class="replace-2x img-responsive" style="width:100%;height:160px; border-radius: 10px;" src="<?php echo $obj['Item_Image'];?>" alt="<?php echo $obj['Item_Name'];?>">
				
				<div class="product-content">
				   <br>
			                	<h5><b><?php echo $obj['Item_Name'];?></b></h5>
                    			<?php echo $obj['Item_Details'];?>
                                            <div class="price-box">
                            					<span class="price"><?php echo "Rs.".$obj['Item_price'];?></span>
                        					</div>
                        					 
                                    </div>

                                    

                                    </a>
                                </center>    
			</li>


			<?php
		}

		?>
					
				</ul>
		
		</div>
</div>

<div class="row" style="padding:20px;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


     <?php

     	$query="SELECT * FROM `ads` WHERE `ADType`='Boxed' AND `ADStatus`='Active' ORDER BY `ADPriority` DESC";
											                 $result=mysql_query($query);
											                 $i=1;
											                 while ($obj = mysql_fetch_array($result)) {
												     	

     ?>

      <div class="item <?php if($i==1) echo 'active'; ?>">
        <img src="<?php echo $obj['ADImage']; ?>" alt="" style="height: 200px;width:260px;">
        
      </div>

      <?php
      $i=$i+1;
  }

  ?>

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- /MODULE Block best sellers -->
<!-- Block tags module -->

										</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			
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

<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title">Item Preview</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                     <div class="col-sm-12 col-lg-6">
                        <img id="ItemImage" src="" class="img-responsive thumbnail">
                     </div>
                     <div class="col-sm-12 col-lg-6">
                        
                        <h3 id="ItemName">Item Name</h3>
                        <div id="ItemDesc">Item Desciption</div>
                        <h5>Price : &#8377;<span id="ItemPrice">Price</span>/-</h5>
                        <h5>Discount : <span id="ItemDiscount">Discount</span>%</h5>
                        <h5>Item Type : <span id="ItemCategory">Category</span></h5>
                        <button type="button" id="addtowish" class="btn btn-danger btn-circle btn-xl" data-toggle="tooltip" data-placement="bottom" title="Add To Wishlist"><i class="glyphicon glyphicon-heart"></i></button>
						<button type="button" id="addtocart" class="btn btn-warning btn-circle btn-xl" data-toggle="tooltip" data-placement="bottom" title="Add To Cart"><i class="glyphicon glyphicon-shopping-cart"></i></button>
						
                     </div>
                	
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="modalclose();">Close</button>
                
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myOffer" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title">Offer Preview</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                     <div class="col-sm-12 col-lg-6">
                        <img id="ItemImage1" src="" class="img-responsive thumbnail">
                     </div>
                     <div class="col-sm-12 col-lg-6">
                        
                        <h3 id="OfferName">Offer Name</h3>
                        <div id="OfferDesc">Offer Desciption</div>
                        <h5>Offer Code: <span id="OfferCode">Offer</span></h5>
                        <h5>Offer Discount : <span id="OfferDiscount">Discount</span>%</h5>
                        <h5>Minimum Order : <span id="MinOrder">Min Order</span></h5>
                        <h5>Max Use : <span id="MaxUse">MaxUse</span></h5>
                        
						
                     </div>
                	
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="modalclose1();">Close</button>
                
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	
	function viewproduct($id)
	{
		
		$.ajax({
                          url: 'productData.php',
                          type: 'POST',
                          dataType: 'json',
                          data: {
                          'id': $id,
                          'sub': 'products'
                          },
                         success:function(result)//we got the response
                         {
                             
                              $('#myModal').modal('show');
                              document.getElementById('ItemName').innerHTML = result[2];
                              document.getElementById('ItemDesc').innerHTML = result[3];
                              document.getElementById('ItemPrice').innerHTML = result[4];
                              document.getElementById('ItemDiscount').innerHTML = result[5];
                              document.getElementById('ItemCategory').innerHTML = result[7];
                              $("#ItemImage").attr("src",result[6]);
                              document.getElementById("addtowish").onclick = function() { WishlistCart(result[1]); }
                              document.getElementById("addtocart").onclick = function() { addtocart(result[1],result[0]); }
                              
                              
                                                                                  
                         },
                         error:function(exception){alert('Exception:'+exception.responseText);}


                      })  

	}

	function viewoffer($id)
	{

		
		$.ajax({
                          url: 'offerData.php',
                          type: 'POST',
                          dataType: 'json',
                          data: {
                          'id': $id,
                          'sub': 'viewoffer'
                          },
                         success:function(result)//we got the response
                         {
                             //alert(result[3]);
                              $('#myOffer').modal('show');
                              //alert(result[3]);
                              $("#ItemImage1").attr("src",result[3]);
                              document.getElementById('OfferName').innerHTML = result[1];
                              document.getElementById('OfferDesc').innerHTML = result[2];
                              document.getElementById('OfferCode').innerHTML = result[5];
                              document.getElementById('OfferDiscount').innerHTML = result[6];
                              document.getElementById('MinBalance').innerHTML = result[7];
                              //document.getElementById('ItemImage1').src = result[3];
                              //$("#ItemImage1").attr("src",result[3]);
                               
                               if(result[8]==9999)
                               {
                               	 document.getElementById('MaxUse').innerHTML = "Unlimited";
                               }
                               else
                               {
                               	 document.getElementById('MaxUse').innerHTML = result[8];
                               }
                              
                              //$("#OfferImage").attr("src","abc");
                              
                              
                                                                                  
                         },
                         error:function(exception){alert('Exception:'+exception.responseText);}


                      })  

	}

	function modalclose()
	{
		$('#myModal').modal("hide");
	}
	function modalclose1()
	{
		$('#myOffer').modal("hide");
	}

	function WishlistCart($id)
	{
		$.ajax({
                          url: 'addwish.php',
                          type: 'POST',
                          
                          data: {
                          'itemid': $id,
                          
                          'sub': 'add'
                          },
                         success:function(result)//we got the response
                         {

                         	var result1=$.trim(result);

                         	if(result1=="no loggedin")
                         	{
                         		
                         		swal({
						          title: "Register/Log In Now ?",
						          text: "Wishlist only available for registered User !",
						          type: "warning",
						          cancelButtonText: 'No !',
						          showCancelButton: true,
						          confirmButtonClass: 'btn-danger',
						          confirmButtonText: 'Yes, Login!',
						          closeOnConfirm: true,
						          closeOnCancel: true
						        },
						        function(){
						          window.location="login.php";
						        });
                         	}                       
                         	else
                         	{
                         		swal("Good job!", "Item Added to Your Wishlist !", "success");
                         	}

                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
	}

	function addtocart($id,$restaurant)
	{
		
		$.ajax({
                          url: 'addcart.php',
                          type: 'POST',
                          
                          data: {
                          'itemid': $id,
                          'restid':$restaurant,
                          'sub': 'check'
                          },
                         success:function(result)//we got the response
                         {

                         	var result1=$.trim(result);

                         	if(result1=="no")
                         	{
                         		addtocart1($id,$restaurant);
                         	}
                         	else if(result1=="no restaurant")
                         	{
                         		
                         		swal({
						          title: "Are you sure?",
						          text: "You are Adding Item From Different Restaurant Will Cause You Separate Delivery Charge !",
						          type: "warning",
						          cancelButtonText: 'No !',
						          showCancelButton: true,
						          confirmButtonClass: 'btn-danger',
						          confirmButtonText: 'Yes, ADD!',
						          closeOnConfirm: true,
						          closeOnCancel: true
						        },
						        function(){
						          addtocart1($id,$restaurant);
						        });
                         	}
                         	else if(result1=="empty")
                         	{
                         		
                         		
						          addtocart1($id,$restaurant);
						        
                         	}
                         	else
                         	{
                         		alert(result1);
                         	}

                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })  

	}

	function addtocart1($id,$restaurant)
	{
		
		$.ajax({
                          url: 'addcart.php',
                          type: 'POST',
                         
                          data: {
                          'itemid': $id,
                          'restid':$restaurant,
                          'sub': 'add'
                          },
                         success:function(result)//we got the response
                         {

                         	var result1=$.trim(result);
                         	
                         	if(result1=="added")
                         	{
                         		swal("Good job!", "Item Added to Your Cart !", "success");
                         	}


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })  

	}


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

</html>