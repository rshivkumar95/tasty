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
								    <div id="pt_menu115" class="pt_menu nav-5"><div class="parentMenu dropdown"><a href="fast-food.php"><button class="dropbtn"><span >fast food</span></button></a>
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




 <div class="center-block container row" style="padding: 20px;margin-bottom: 200px;">
   

 <div class="col-lg-12 col-sm-12">
  

   <h3>Support &amp; Feedback</h3>
   <p align="justify"></p>



     <h6> <b>Support Email : support@tastytadkaa.com</b></h6>
     <h6><b>Feedback Email : feedback@tastytadkaa.com</b></h6>


  

  <!--div class="col-lg-3">


   <h3>Your Controls</h3>

       <div class="list-group">
		  <a href="changepassword.php" class="list-group-item">Change Password</a>
		  <a href="track.php" class="list-group-item">Track Order</a>
		  <a href="orders.php" class="list-group-item">All Orders</a>
		  <a href="reviews.php" class="list-group-item">All Reviews</a>
		  <a href="logout.php" class="list-group-item">Logout</a>
		</div>

  </div-->

</div>




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
$(document).ready(function()
{		
	// function to get all records from table
	function getAll(){
		
		$.ajax
		({
			url: 'getorders.php',
			data: {},
			type:'POST',
			cache: false,
			success: function(r)
			{
				
				$("#order_list").html(r);
			}
		});			
	}
	
	getAll();
	// function to get all records from table
	
	
	// code to get all records from table via select box
	$("#getProducts").change(function()
	{				
		var id = $(this).find(":selected").val();

		
		$.ajax
		({
			url: 'getproducts.php',
			data: { 'action':id,'id':'<?php echo $restaurant; ?>'},
			type:'POST',
			cache: false,
			success: function(r)
			{
				
				$("#product_list").html(r);
			}
		});		
	})
	// code to get all records from table via select box
});
</script>

<script type="text/javascript">
        
     function check()
     {
     	var email=$('#email').val();
              var password=$('#password').val();
              var name=$('#name').val();
              var address=$('#address').val();
              var mobile=$('#mobile').val();
     	    
     	     		if(email!="" || password!="" || name!="" || address!="" || mobile!="")
                        {
		                        					$.ajax({
		                          url: 'register.php',
		                          type: 'POST',
		                          data: {
		                          'email': email,
		                          'password':password,
		                          'name':name,
		                          'address':address,
		                          'mobile':mobile,
		                          'sub': 'yes'
		                          },
		                         success:function(result)//we got the response
		                         {		                            
		                            var result1=$.trim(result);
		                           
		                             if(result1==='true')
		                             {
		                                alert('Registered successfully | Login with new email and password');
		                                
		                                $('#email1').val(email);
		                                $('#password1').val(password);
		                                $('#email').val('');
		                                $('#password').val('');
		                                
		                                $('#name').val('');
		                                $('#address').val('');
		                                $('#mobile').val('');
		                             }
		                             if(result1==='false')
		                             {
		                               alert('Email ID Already Registerd');	                                 
		                               $('#email').focus();		                               
		                             }
		                         }	,
		                         error: function(ts) { alert(ts.responseText) }	                         
		                        });	  
                        }
                        else
                        {
                        	alert('All Fields are Mandatory');
                        }
     }

     function login()
     {
     	var email=$('#email1').val();
              var password=$('#password1').val();
              
     	    
     	     		if(email!="" || password!="")
                        {
		                        					$.ajax({
		                          url: 'check.php',
		                          type: 'POST',
		                          data: {
		                          'email': email,
		                          'password':password,		                  
		                          'sub': 'yes'
		                          },
		                         success:function(result)//we got the response
		                         {		                            
		                            var result1=$.trim(result);
		                           
		                             if(result1==='true')
		                             {
		                                alert('Logged In');
		                                
		                                
		                             }
		                             if(result1==='false')
		                             {
		                               alert('Email or Password is incorrect !');	                                 
		                               $('#email1').focus();		                               
		                             }
		                         }	,
		                         error: function(ts) { alert(ts.responseText) }	                         
		                        });	  
                        }
                        else
                        {
                        	alert('All Fields are Mandatory');
                        }
     }


           function register()
           {
           	  alert("Called");
              var email=$('#email').val();
              var password=$('#password').val();
              var name=$('#name').val();
              var address=$('#address').val();
              var mobile=$('#mobile').val();
     
                      if(email!="" || password!="" || name!="" || address!="" || mobile!="")
                        {
                            $.ajax({
                          url: 'register.php',
                          type: 'POST',
                          data: {
                          'email': email,
                          'password':password,
                          'name':name,
                          'address':address,
                          'mobile':mobile,
                          'sub': 'yes'
                          },
                         success:function(result)//we got the response
                         {
                            
                            var result1=$.trim(result);
                             if(result1==='true')
                             {
                                alert('Registered successfully | Login with new email and password');
                                $('#email').val('');
                                $('#email1').val(email);
                                $('#password').val('');
                                $('#password1').val(password);
                                $('#name').val('');
                                $('#address').val('');
                                $('#mobile').val('');

                             }
                             if(result1==='false')
                             {
                               alert('Email ID Already Registerd');
                               $('#email').val('');                               
                               $('#email').focus();
                             }
                         }
                         

                        });
                              
                        }
                        else
                        {
                              alert('All Fields are Mandatory !');
                              
                        }
              }
              function ValidateEmail(emailid)
			  {
						var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                        var mail=$('#email').val();
						if(mail.match(mailformat))
						{
						    
						}
						else
						{
						   alert("You have entered an invalid email address!");
						   $('#email').val('');

						
						}
			  }
			  function phonenumber()  
				{  
				  var phoneno = /^\d{10}$/;  
				  var phone=$('#mobile').val();
				  if((phone.match(phoneno)))  
				        {  
				           
				        }  
				      else  
				        {  
				           alert("Invalid Mobile No. !");
						   $('#mobile').val('');
				        }  
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
<script type="text/javascript" src="js/modules/blocknewsletter/blocknewsletter.js"></script>
<script type="text/javascript" src="js/jquery/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="js/modules/blocksearch/blocksearch.js"></script>
<script type="text/javascript" src="js/modules/blockwishlist/js/ajax-wishlist.js"></script>
<script type="text/javascript" src="../modules/posslideshow/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="../modules/posmegamenu/js/custommenu.js"></script>
<script type="text/javascript" src="../modules/posmegamenu/js/mobile_menu.js"></script>
<script type="text/javascript" src="../modules/posscroll/scrolltop.js"></script>
<script type="text/javascript" src="js/script.js"></script>
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

<script type="text/javascript">
 		<script type="text/javascript">
	function clickCounter_but($var){
		if (document.getElementById($var).innerHTML<10) {
	document.getElementById($var).innerHTML++;
}
}
function clickCounter_nev($var){
	if (document.getElementById($var).innerHTML>0) {
	document.getElementById($var).innerHTML--;
	}
}

</script>
	</body>

</html>