<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="en"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="en"><![endif]-->
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8"/>
		<title>Tasty Tadkaa | Don't go anywhere we will bring</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Shop powered by PrestaShop" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="index,follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		
			<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
			<link rel="stylesheet" href="css/autoload/highdpi.css" type="text/css" media="all" />
			<link rel="stylesheet" href="js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all" />
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/a13e2267ce.js"></script>
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
        input[type=text] {
    width: 130px;
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

input[type=text]:focus {
    width: 100%;
}
 .btn{
 	padding: 0px 0px;
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
								<nav ><!-- Block currencies module -->
	
<!-- /Block currencies module --><!-- Block languages module -->


<!-- /Block languages module -->
<!-- <div id="contact-link">
	<a href="http://demo.posthemes.com/pos_zodiac/food/en/contact-us" title="Contact Us">Contact us</a>
</div>
	<span class="shop-phone">
		<i class="icon-phone"></i>Call us now: <strong>0123-456-789</strong>
	</span>-->

     <div class="row">
	<div class="col-lg-2" style="padding-top: 12px;"><li style="color: #eeeeee "> <strong>Order@testytadaka.com</strong></li></div>
<div class="col-lg-10" style="padding-top: 0px;">
<ul id="header_links">
	
		<li><a class="link-myaccount" href="loginfd9a.html" title="My account">My account</a></li>
	
	<li><a class="link-wishlist wishlist_block" href="loginb3ee.html" title="My wishlist">Wishlist</a></li>
	
	<li><a class="link-mycart" href="order.html" title="My cart">My cart</a></li>
	
	<li><a class="link-checkout" href="order.html" title="checkout">Checkout</a></li>
				<li class="last"><a class="link-login" href="loginfd9a.html" title="Login"  rel="nofollow">Login</a></li>
		
</ul></div></div></nav>
							</div>
						     </div>
					         </div>
					<div class="header-content" style="background: url(img/biryani.jpg); ">
						<div class="container">
							<div class="row">
								<div id="header_logo" class="col-md-6 col-sm-6 col-sms-12">
										<a href="http://demo.posthemes.com/pos_zodiac/food/" title="Pos Zodiac Food">
											<img class="logo img-responsive" src="img/TastyTadka.gif" alt="Pos Zodiac Food"  style="height:50%; width:50%; "/>
										</a>
								</div>
								<div class="block-header col-md-6 col-sm-12 col-sms-12" style="color: #eff4fc;">
									     	  	  <div class="phone" style="float: right; color: #ffffff;">
<div class="title" id="order">Order Delivery:</div><br>
<div class="content"id="number"><p style="font-size: 35px;">0123456789</p></div>
</div>
	       
								</div>
								<div class="quick-access col-md-6 col-sm-12 col-sms-12" style="margin-top: 20px;">
									<!-- Block search module TOP -->

<form>
  <input type="text" name="search" placeholder="Search..">
</form>
<!-- /Block search module TOP --><!-- MODULE Block cart -->
<div class="icon-cart clearfix">
	<div class="shopping_cart" style="color: white;">
		<a href="order.html" title="View my shopping cart" rel="nofollow">
			<b>Cart</b>
			<!--<span class="ajax_cart_quantity">0</span>-->
			<span class="ajax_cart_product_txt unvisible">Product</span>
			<span class="ajax_cart_product_txt_s unvisible">Products</span>
			<span class="ajax_cart_total unvisible">
							</span>
			<span class="ajax_cart_no_product">(empty)</span>
					</a>
					<div class="cart_block block exclusive">
				<div class="block_content">
					<!-- block list of products -->
					<div class="cart_block_list">
												<p class="cart_block_no_products">
							No products
						</p>
												<div class="cart-prices">
							<div class="cart-prices-line first-line">
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
																			Free shipping!
																	</span>
								<span>
									Shipping
								</span>
							</div>
																					<div class="cart-prices-line last-line">
								<span class="price cart_block_total ajax_block_cart_total">0,00 €</span>
								<span>Total</span>
							</div>
													</div>
						<p class="cart-buttons">
							<a id="button_order_cart" class="btn btn-default button button-small" href="order.html" title="Check out" rel="nofollow">
								<span>
									Check out<i class="icon-chevron-right right"></i>
								</span>
							</a>
						</p>
					</div>
				</div>
			</div><!-- .cart_block -->
			</div>
</div>

	<div id="layer_cart">
		<div class="clearfix">
			<div class="layer_cart_product col-xs-12 col-md-6">
				<span class="cross" title="Close window"></span>
				<h2>
					<i class="icon-ok"></i>Product successfully added to your shopping cart
				</h2>
				<div class="product-image-container layer_cart_img">
				</div>
				<div class="layer_cart_product_info">
					<span id="layer_cart_product_title" class="product-name"></span>
					<span id="layer_cart_product_attributes"></span>
					<div>
						<strong class="dark">Quantity</strong>
						<span id="layer_cart_product_quantity"></span>
					</div>
					<div>
						<strong class="dark">Total</strong>
						<span id="layer_cart_product_price"></span>
					</div>
				</div>
			</div>
			<div class="layer_cart_cart col-xs-12 col-md-6">
				<h2>
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s  unvisible">
						There are <span class="ajax_cart_quantity">0</span> items in your cart.
					</span>
					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt ">
						There is 1 item in your cart.
					</span>
				</h2>
	
				<div class="layer_cart_row">
					<strong class="dark">
						Total products
													(tax incl.)
											</strong>
					<span class="ajax_block_products_total">
											</span>
				</div>
	
								<div class="layer_cart_row">
					<strong class="dark">
						Total shipping&nbsp;(tax excl.)
					</strong>
					<span class="ajax_cart_shipping_cost">
													Free shipping!
											</span>
				</div>
								<div class="layer_cart_row">	
					<strong class="dark">
						Total
													(tax incl.)
											</strong>
					<span class="ajax_block_cart_total">
											</span>
				</div>
				<div class="button-container">	
					<span class="continue btn btn-default button exclusive-medium" title="Continue shopping">
						<span>
							<i class="icon-chevron-left left"></i>Continue shopping
						</span>
					</span>
					<a class="btn btn-default button button-medium"	href="order.html" title="Proceed to checkout" rel="nofollow">
						<span>
							Proceed to checkout<i class="icon-chevron-right right"></i>
						</span>
					</a>	
				</div>
			</div>
		</div>
		<div class="crossseling"></div>
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>

<!-- /MODULE Block cart -->								</div>
							</div>
						</div>
					</div>
						<!-- Block categories module -->
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
																		
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="111-pizza.html" title="">
		pizza
	</a>
			<ul style="display: none;">
												
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="116-hot-dog.html" title="">
		hot dog
	</a>
			<ul style="display: none;">
												
<li>
	<a href="117-rice.html" title="">
		rice
	</a>
	</li>

																
<li>
	<a href="126-cocktail.html" title="">
		Cocktail
	</a>
	</li>

																
<li>
	<a href="127-day.html" title="">
		Day
	</a>
	</li>

																
<li class="last">
	<a href="128-evening.html" title="">
		Evening
	</a>
	</li>

									</ul>
	</li>

																
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="123-dresses.html" title="">
		Dresses
	</a>
			<ul style="display: none;">
												
<li>
	<a href="129-hair-accessories.html" title="">
		Hair Accessories
	</a>
	</li>

																
<li>
	<a href="130-hats-and-gloves.html" title="">
		Hats and Gloves
	</a>
	</li>

																
<li>
	<a href="131-lifestyle.html" title="">
		Lifestyle
	</a>
	</li>

																
<li class="last">
	<a href="132-bras.html" title="">
		Bras
	</a>
	</li>

									</ul>
	</li>

																
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="124-accessories.html" title="">
		Accessories
	</a>
			<ul style="display: none;">
												
<li>
	<a href="133-evening.html" title="">
		Evening
	</a>
	</li>

																
<li>
	<a href="134-long-sleeved.html" title="">
		Long Sleeved
	</a>
	</li>

																
<li>
	<a href="135-shrot-sleeved.html" title="">
		Shrot Sleeved
	</a>
	</li>

																
<li class="last">
	<a href="136-sleeveless.html" title="">
		Sleeveless
	</a>
	</li>

									</ul>
	</li>

																
<li class="last">
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="125-tops.html" title="">
		Tops
	</a>
			<ul style="display: none;">
												
<li>
	<a href="137-toter.html" title="">
		Toter
	</a>
	</li>

																
<li>
	<a href="138-clutches.html" title="">
		Clutches
	</a>
	</li>

																
<li class="last">
	<a href="139-cross-body.html" title="">
		Cross Body
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

																								
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="112-chicken.html" title="">
		chicken
	</a>
			<ul style="display: none;">
												
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="140-clothing-.html" title="">
		Clothing 
	</a>
			<ul style="display: none;">
												
<li>
	<a href="143-coats-jackets-.html" title="">
		Coats &amp; Jackets 
	</a>
	</li>

																
<li>
	<a href="144-blazers-.html" title="">
		Blazers 
	</a>
	</li>

																
<li>
	<a href="145-jackets-.html" title="">
		Jackets 
	</a>
	</li>

																
<li class="last">
	<a href="146-raincoats-.html" title="">
		Raincoats 
	</a>
	</li>

									</ul>
	</li>

																
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="141-shoes.html" title="">
		Shoes
	</a>
			<ul style="display: none;">
												
<li>
	<a href="147-ankle-boots-.html" title="">
		Ankle Boots 
	</a>
	</li>

																
<li>
	<a href="148-footwear-.html" title="">
		Footwear 
	</a>
	</li>

																
<li>
	<a href="149-clog-sandals-.html" title="">
		Clog sandals 
	</a>
	</li>

																
<li class="last">
	<a href="150-combat-boots-.html" title="">
		Combat Boots 
	</a>
	</li>

									</ul>
	</li>

																
<li class="last">
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="142-bags.html" title="">
		Bags
	</a>
			<ul style="display: none;">
												
<li>
	<a href="151-jackets-.html" title="">
		Jackets   
	</a>
	</li>

																
<li>
	<a href="152-camis.html" title="">
		Camis
	</a>
	</li>

																
<li>
	<a href="153-nightwear.html" title="">
		Nightwear
	</a>
	</li>

																
<li class="last">
	<a href="154-shapewear.html" title="">
		Shapewear
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

																								
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="113-vegetable.html" title="">
		vegetable
	</a>
			<ul style="display: none;">
												
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="155-footwear-man.html" title="">
		Footwear Man
	</a>
			<ul style="display: none;">
												
<li>
	<a href="157-gifts-and-tech.html" title="">
		Gifts and Tech
	</a>
	</li>

																
<li>
	<a href="158-gifts-and-tech.html" title="">
		Gifts and Tech
	</a>
	</li>

																
<li class="last">
	<a href="159-boots.html" title="">
		Boots
	</a>
	</li>

									</ul>
	</li>

																
<li class="last">
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="156-accessories-man.html" title="">
		Accessories Man
	</a>
			<ul style="display: none;">
												
<li>
	<a href="160-boots.html" title="">
		Boots
	</a>
	</li>

																
<li>
	<a href="161-slippers-and-clogs.html" title="">
		Slippers and Clogs
	</a>
	</li>

																
<li class="last">
	<a href="162-flats.html" title="">
		Flats
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

																								
<li>
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="114-hamburger.html" title="">
		hamburger
	</a>
			<ul style="display: none;">
												
<li class="last">
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="163-footwear-womens.html" title="">
		Footwear Womens
	</a>
			<ul style="display: none;">
												
<li>
	<a href="164-cold-weather.html" title="">
		Cold Weather
	</a>
	</li>

																
<li>
	<a href="165-fashion-scarves.html" title="">
		Fashion Scarves
	</a>
	</li>

																
<li class="last">
	<a href="166-bags-and-wallets.html" title="">
		Bags and Wallets
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

																								
<li class="last">
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="115-fast-food.html" title="">
		fast food
	</a>
			<ul style="display: none;">
												
<li class="last">
	<span class="grower CLOSE"> <span class="head"><a href="javascript:void(0)"></a></span></span><a href="167-bands.html" title="">
		Bands
	</a>
			<ul style="display: none;">
												
<li>
	<a href="168-platinum-bands.html" title="">
		Platinum Bands
	</a>
	</li>

																
<li>
	<a href="169-gold-bands.html" title="">
		Gold Bands
	</a>
	</li>

																
<li class="last">
	<a href="170-silver-bands.html" title="">
		Silver Bands
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

															</ul>
                                
			</div>
		</div>
		</div>
</div>
<!-- /Block categories module -->

<div class="nav-container visible-lg visible-md">
	<div class="">
		<div id="pt_custommenu" class="pt_custommenu">
			<div id="pt_menu_home" class="pt_menu act"><div class="parentMenu"><a href="index.html"><span>       </span></a></div></div>
		    <div id="pt_menu_home" class="pt_menu act"><div class="parentMenu"><a href="index.html"><span>Home</span></a></div></div><div id="pt_menu111" class="pt_menu nav-1">
<div class="parentMenu">
<a href="111-pizza.html">
<span>Veg</span>
</a>
</div>
<div id="popup111" class="popup" style="display: none; width: 1228px;">
<div class="block1" id="block1111">
<div class="column first col1"><div class="itemMenu level1"><a class="itemMenuName level3" href="116-hot-dog.html"><span>hot&nbsp;dog</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="117-rice.html"><span>rice</span></a><a class="itemMenuName level4" href="126-cocktail.html"><span>Cocktail</span></a><a class="itemMenuName level4" href="127-day.html"><span>Day</span></a><a class="itemMenuName level4" href="128-evening.html"><span>Evening</span></a></div></div></div></div><div class="column col2"><div class="itemMenu level1"><a class="itemMenuName level3" href="123-dresses.html"><span>Dresses</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="129-hair-accessories.html"><span>Hair&nbsp;Accessories</span></a><a class="itemMenuName level4" href="130-hats-and-gloves.html"><span>Hats&nbsp;and&nbsp;Gloves</span></a><a class="itemMenuName level4" href="131-lifestyle.html"><span>Lifestyle</span></a><a class="itemMenuName level4" href="132-bras.html"><span>Bras</span></a></div></div></div></div><div class="column col3"><div class="itemMenu level1"><a class="itemMenuName level3" href="124-accessories.html"><span>Accessories</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="133-evening.html"><span>Evening</span></a><a class="itemMenuName level4" href="134-long-sleeved.html"><span>Long&nbsp;Sleeved</span></a><a class="itemMenuName level4" href="135-shrot-sleeved.html"><span>Shrot&nbsp;Sleeved</span></a><a class="itemMenuName level4" href="136-sleeveless.html"><span>Sleeveless</span></a></div></div></div></div><div class="column last col4"><div class="itemMenu level1"><a class="itemMenuName level3" href="125-tops.html"><span>Tops</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="137-toter.html"><span>Toter</span></a><a class="itemMenuName level4" href="138-clutches.html"><span>Clutches</span></a><a class="itemMenuName level4" href="139-cross-body.html"><span>Cross&nbsp;Body</span></a></div></div></div></div>
<div class="clearBoth"></div>
</div>
</div>
</div><div id="pt_menu112" class="pt_menu nav-2">
<div class="parentMenu">
<a href="112-chicken.html">
<span>Non-Veg</span>
</a>
</div>
<div id="popup112" class="popup" style="display: none; width: 1228px;">
<div class="block1" id="block1112">
<div class="column first col1"><div class="itemMenu level1"><a class="itemMenuName level3" href="140-clothing-.html"><span>Clothing&nbsp;</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="143-coats-jackets-.html"><span>Coats&nbsp;&&nbsp;Jackets&nbsp;</span></a><a class="itemMenuName level4" href="144-blazers-.html"><span>Blazers&nbsp;</span></a><a class="itemMenuName level4" href="145-jackets-.html"><span>Jackets&nbsp;</span></a><a class="itemMenuName level4" href="146-raincoats-.html"><span>Raincoats&nbsp;</span></a></div></div></div></div><div class="column col2"><div class="itemMenu level1"><a class="itemMenuName level3" href="141-shoes.html"><span>Shoes</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="147-ankle-boots-.html"><span>Ankle&nbsp;Boots&nbsp;</span></a><a class="itemMenuName level4" href="148-footwear-.html"><span>Footwear&nbsp;</span></a><a class="itemMenuName level4" href="149-clog-sandals-.html"><span>Clog&nbsp;sandals&nbsp;</span></a><a class="itemMenuName level4" href="150-combat-boots-.html"><span>Combat&nbsp;Boots&nbsp;</span></a></div></div></div></div><div class="column last col3"><div class="itemMenu level1"><a class="itemMenuName level3" href="142-bags.html"><span>Bags</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4" href="151-jackets-.html"><span>Jackets&nbsp;&nbsp;&nbsp;</span></a><a class="itemMenuName level4" href="152-camis.html"><span>Camis</span></a><a class="itemMenuName level4" href="153-nightwear.html"><span>Nightwear</span></a><a class="itemMenuName level4" href="154-shapewear.html"><span>Shapewear</span></a></div></div></div></div>
<div class="clearBoth"></div>
</div>
</div>
</div><div id="pt_menu115" class="pt_menu nav-5">
<div class="parentMenu dropdown">
<a href="115-fast-food.html">
<button class="dropbtn"><span >fast food</span></button>
</a>
<div id="ddd1" class="dropdown-content">
    <a id="dddd" href="#">Chinese</a>
    <a id="dddd" href="#">South Indian</a>
  </div>
</div>
</div><div id="pt_menu114" class="pt_menu nav-4">
<div class="parentMenu">
<a href="114-hamburger.html">
<span>Sweets</span>
</a>
</div>
<div id="popup114" class="popup" style="display: none; width: 1228px;">
<div class="block1" id="block1114">
<div class="column last col1"><div class="itemMenu level1"><a class="itemMenuName level3" href="163-footwear-womens.html"><span>Footwear&nbsp;Womens</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4 nochild" href="164-cold-weather.html"><span>Cold&nbsp;Weather</span></a><a class="itemMenuName level4 nochild" href="165-fashion-scarves.html"><span>Fashion&nbsp;Scarves</span></a><a class="itemMenuName level4 nochild" href="166-bags-and-wallets.html"><span>Bags&nbsp;and&nbsp;Wallets</span></a></div></div></div></div>
<div class="clearBoth"></div>
</div>
</div>
</div><div id="pt_menu115" class="pt_menu nav-5">
<div class="parentMenu">
<a href="115-fast-food.html">
<span>Tiffine</span>
</a>
</div>
<div id="popup115" class="popup" style="display: none; width: 1228px;">
<div class="block1" id="block1115">
<div class="column last col1"><div class="itemMenu level1"><a class="itemMenuName level3" href="167-bands.html"><span>Bands</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4 nochild" href="168-platinum-bands.html"><span>Platinum&nbsp;Bands</span></a><a class="itemMenuName level4 nochild" href="169-gold-bands.html"><span>Gold&nbsp;Bands</span></a><a class="itemMenuName level4 nochild" href="170-silver-bands.html"><span>Silver&nbsp;Bands</span></a></div></div></div></div>
<div class="clearBoth"></div>
</div>
</div>
</div>
<div id="pt_menu115" class="pt_menu nav-5">
<div class="parentMenu">
<a href="115-fast-food.html">
<span>Bakery Items</span>
</a>
</div>
<div id="popup115" class="popup" style="display: none; width: 1228px;">
<div class="block1" id="block1115">
<div class="column last col1"><div class="itemMenu level1"><a class="itemMenuName level3" href="167-bands.html"><span>Bands</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4 nochild" href="168-platinum-bands.html"><span>Platinum&nbsp;Bands</span></a><a class="itemMenuName level4 nochild" href="169-gold-bands.html"><span>Gold&nbsp;Bands</span></a><a class="itemMenuName level4 nochild" href="170-silver-bands.html"><span>Silver&nbsp;Bands</span></a></div></div></div></div>
<div class="clearBoth"></div>
</div>
</div>
</div>
<div id="pt_menu115" class="pt_menu nav-5">
<div class="parentMenu">
<a href="115-fast-food.html">
<span>juice</span>
</a>
</div>
<div id="popup115" class="popup" style="display: none; width: 1228px;">
<div class="block1" id="block1115">
<div class="column last col1"><div class="itemMenu level1"><a class="itemMenuName level3" href="167-bands.html"><span>Bands</span></a><div class="itemSubMenu level3"><div class="itemMenu level4"><a class="itemMenuName level4 nochild" href="168-platinum-bands.html"><span>Platinum&nbsp;Bands</span></a><a class="itemMenuName level4 nochild" href="169-gold-bands.html"><span>Gold&nbsp;Bands</span></a><a class="itemMenuName level4 nochild" href="170-silver-bands.html"><span>Silver&nbsp;Bands</span></a></div></div></div></div>
<div class="clearBoth"></div>
</div>
</div>
</div>
<div id="pt_menu_pt_item_menu_custom_menu" class="pt_menu">
<div class="parentMenu">
<span class="block-title">others&nbsp;</span>
</div>
<div id="popup_pt_item_menu_custom_menu" class="popup cmsblock" style="display: none; width: 904px;">
<div class="block2" id="block2_pt_item_menu_custom_menu">
<div class="static_block_custom_menu">
<div class="row">
<div class="col-md-4 col-sm-4 col-sms-12">
<div class="static-menu-img"><a href="#"><img src="img/cms/custom_menu2.jpg" alt="" /></a></div>
<p>boy photography</p>
</div>
<div class="col-md-4 col-sm-4 col-sms-12">
<div class="static-menu-img"><a href="#"><img src="img/cms/custom_menu3.jpg" alt="" /></a></div>
<p>boy photography</p>
</div>
<div class="col-md-4 col-sm-4 col-sms-12">
<div class="static-menu-img"><a href="#"><img src="img/cms/custom_menu4.jpg" alt="" /></a></div>
<p>boy photography</p>
</div>
</div>
</div>
</div>
</div>
</div>
		</div>
	</div>
</div>


					<div class="banner">
						<div style="background-repeat: no-repeat;">
							    <div class="pos-slideshow-container">
	<div class="flexslider ma-nivoslider">
        <div class="pos-loading"></div>
            <div id="pos-slideshow-home" class="slides">
                                                    <img style ="display:none" src="img/blockslideshow/3.jpg"  data-transition="boxRainReverse" data-thumb="http://demo.posthemes.com/pos_zodiac/food/img/blockslideshow/3.jpg"  alt="" title="#htmlcaption3"  />
                                    <img style ="display:none" src="img/blockslideshow/4.jpg"  data-transition="boxRainReverse" data-thumb="http://demo.posthemes.com/pos_zodiac/food/img/blockslideshow/4.jpg"  alt="" title="#htmlcaption4"  />
                            </div>
                    </div>
    </div>

 

						</div>
					</div>
				</header>
			</div>		
			<div class="columns-container" style="margin-bottom: 55px;">
				<div id="columns" class="container">
											
<!-- Breadcrumb --><div class="breadcrumb clearfix">
	<a class="home" href="http://demo.posthemes.com/pos_zodiac/food/" title="Return to Home"><span>Home</span></a>
			<span class="navigation-pipe">&gt;</span>
					<span class="navigation_page">Veg Menu</span>
			</div>

<!-- /Breadcrumb -->
										<div class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12"></div>
					</div>
					<div class="row">
												<div id="center_column" class="center_column col-xs-12 col-sm-9">
							
	

	
							<div class="content_sortPagiBar clearfix container">
			    <div class="sortPagiBar clearfix">
					<form method="post" action="http://demo.posthemes.com/pos_zodiac/food/en/products-comparison" class="compare-form">
		<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare" disabled="disabled">
			<span>Compare (<strong class="total-compare-val">0</strong>)<i class="icon-chevron-right right"></i></span>
		</button>
		<input type="hidden" name="compare_product_count" class="compare_product_count" value="0">
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="">
	</form>
			
		
		
		
	
				<ul class="display hidden-xs">
	<li class="display-title">View</li>
    <li id="grid" class="selected"><a rel="nofollow" href="#" title="Grid">Grid</a></li>
    <li id="list"><a rel="nofollow" href="#" title="List">List</a></li>
</ul>

<form id="productsSortForm" action="http://demo.posthemes.com/pos_zodiac/food/en/112-chicken" class="productsSortForm">
	<div class="select selector1">
		<label for="selectProductSort">Sort by</label>
		<div class="selector" id="uniform-selectProductSort" style="width: 176px;"><span style="width: 166px; user-select: none;">--</span><div class="selector" id="uniform-selectProductSort" style="width: 186px;"><span style="width: 176px; user-select: none;">--</span><select id="selectProductSort" class="selectProductSort form-control">
			<option value="position:asc" selected="selected">--</option>
							<option value="price:asc">Price: Lowest first</option>
				<option value="price:desc">Price: Highest first</option>
						<option value="name:asc">Product Name: A to Z</option>
			<option value="name:desc">Product Name: Z to A</option>
							<option value="quantity:desc">In stock</option>
						<option value="reference:asc">Reference: Lowest first</option>
			<option value="reference:desc">Reference: Highest first</option>
		</select></div></div>
	</div>
</form>
<!-- /Sort products -->
			
	
											<!-- nbr product/page -->
			<form action="http://demo.posthemes.com/pos_zodiac/food/en/112-chicken" method="get" class="nbrItemPage">
			<div class="clearfix selector1">
												<label for="nb_item">
					Show
				</label>
																																	<input type="hidden" name="id_category" value="112">
																			<div class="selector" id="uniform-nb_item" style="width: 43px;"><span style="width: 33px; user-select: none;">12</span><div class="selector" id="uniform-nb_item" style="width: 53px;"><span style="width: 43px; user-select: none;">12</span><select name="n" id="nb_item" class="form-control">
																							<option value="12" selected="selected">12</option>
																														<option value="24">24</option>
																																						</select></div></div>
				<span>per page</span>
			</div>
		</form>
		<!-- /nbr product/page -->

			    </div>
			</div>
				
									
		<div class="container">
	
	<!-- Products list -->
	<ul class="product_list grid">
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first-in-line first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/1-faded-short-sleeve-tshirts.html" title="bourbon chicken" itemprop="url">
							<img class="replace-2x img-responsive" src="img/faded-short-sleeve-tshirts.jpg" alt="bourbon chicken" title="bourbon chicken" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_1" title="Wishlist" href="#" rel="1" onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/1-faded-short-sleeve-tshirts.html" data-id-product="1">Add to Compare</a>
							</div>
														</li>
								<li>
																<div class="quick-view" data-toggle="modal" data-target="#myModal">
								<span>Quick view</span>
							</div>
	
  

														</li>
							</ul>
						
											</div>

						
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/1-faded-short-sleeve-tshirts.html" title="bourbon chicken" itemprop="url">
							bourbon chicken
						</a>
					</h5>
					 
	<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">	
		<div class="star_content clearfix">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star"></div>
																<div class="star"></div>
																<div class="star"></div>
										<meta itemprop="worstRating" content="0">
			<meta itemprop="ratingValue" content="2">
			<meta itemprop="bestRating" content="5">
		</div>
		<span class="nb-comments">1 Review(s)</span>
	</div>

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								150,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="order7a0f.html?add=1&amp;id_product=1&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="1">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/2-blouse.html" title="Chefs" itemprop="url">
							<img class="replace-2x img-responsive" src="../211-home_default/blouse.jpg" alt="Chefs" title="Chefs" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_2" title="Wishlist" href="#" rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/2-blouse.html" data-id-product="2">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/2-blouse.html" rel="pizza/2-blouse.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/2-blouse.html" title="Chefs" itemprop="url">
							Chefs
						</a>
					</h5>
					 
	<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">	
		<div class="star_content clearfix">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star"></div>
										<meta itemprop="worstRating" content="0">
			<meta itemprop="ratingValue" content="2">
			<meta itemprop="bestRating" content="5">
		</div>
		<span class="nb-comments">1 Review(s)</span>
	</div>

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								320,40 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="ordera9c3.html?add=1&amp;id_product=2&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="2">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/3-printed-dress.html" title="Chicken Dishes" itemprop="url">
							<img class="replace-2x img-responsive" src="../213-home_default/printed-dress.jpg" alt="Chicken Dishes" title="Chicken Dishes" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_3" title="Wishlist" href="#" rel="3" onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/3-printed-dress.html" data-id-product="3">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/3-printed-dress.html" rel="pizza/3-printed-dress.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/3-printed-dress.html" title="Chicken Dishes" itemprop="url">
							Chicken Dishes
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								120,20 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="order8aa3.html?add=1&amp;id_product=3&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="3">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-in-line last-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/4-printed-dress.html" title="Pear Recipes" itemprop="url">
							<img class="replace-2x img-responsive" src="../215-home_default/printed-dress.jpg" alt="Pear Recipes" title="Pear Recipes" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_4" title="Wishlist" href="#" rel="4" onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/4-printed-dress.html" data-id-product="4">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/4-printed-dress.html" rel="pizza/4-printed-dress.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/4-printed-dress.html" title="Pear Recipes" itemprop="url">
							Pear Recipes
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								220,19 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="orderc2ff.html?add=1&amp;id_product=4&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="4">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first-in-line first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/5-printed-summer-dress.html" title="Pizza Hurd" itemprop="url">
							<img class="replace-2x img-responsive" src="../217-home_default/printed-summer-dress.jpg" alt="Pizza Hurd" title="Pizza Hurd" itemprop="image">
						</a>
						<span class="sale-box"><span class="sale-label">Sale</span></span>										<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_5" title="Wishlist" href="#" rel="5" onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/5-printed-summer-dress.html" data-id-product="5">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/5-printed-summer-dress.html" rel="pizza/5-printed-summer-dress.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/5-printed-summer-dress.html" title="Pizza Hurd" itemprop="url">
							Pizza Hurd
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								342,58 €							</span>
							<meta itemprop="priceCurrency" content="0">
															<span class="old-price product-price">
									360,61 €
								</span>
																	<!--<span class="price-percent-reduction">-5%</span>-->
																										</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="order62d3.html?add=1&amp;id_product=5&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="5">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																																	<span class="discount">Reduced price!</span>
												</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/6-printed-summer-dress.html" title="Sesame Chicken" itemprop="url">
							<img class="replace-2x img-responsive" src="../219-home_default/printed-summer-dress.jpg" alt="Sesame Chicken" title="Sesame Chicken" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_6" title="Wishlist" href="#" rel="6" onclick="WishlistCart('wishlist_block_list', 'add', '6', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/6-printed-summer-dress.html" data-id-product="6">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/6-printed-summer-dress.html" rel="pizza/6-printed-summer-dress.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/6-printed-summer-dress.html" title="Sesame Chicken" itemprop="url">
							Sesame Chicken
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								220,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="ordere327.html?add=1&amp;id_product=6&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="6">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/7-printed-chiffon-dress.html" title="Tomato Recipes" itemprop="url">
							<img class="replace-2x img-responsive" src="../221-home_default/printed-chiffon-dress.jpg" alt="Tomato Recipes" title="Tomato Recipes" itemprop="image">
						</a>
						<span class="sale-box"><span class="sale-label">Sale</span></span>										<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_7" title="Wishlist" href="#" rel="7" onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/7-printed-chiffon-dress.html" data-id-product="7">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/7-printed-chiffon-dress.html" rel="pizza/7-printed-chiffon-dress.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/7-printed-chiffon-dress.html" title="Tomato Recipes" itemprop="url">
							Tomato Recipes
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								112,48 €							</span>
							<meta itemprop="priceCurrency" content="0">
															<span class="old-price product-price">
									140,60 €
								</span>
																	<!--<span class="price-percent-reduction">-20%</span>-->
																										</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="order0f19.html?add=1&amp;id_product=7&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="7">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																																	<span class="discount">Reduced price!</span>
												</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-in-line last-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/8-suscipit-lobortis.html" title="Vegetables Main Dish" itemprop="url">
							<img class="replace-2x img-responsive" src="../223-home_default/suscipit-lobortis.jpg" alt="Vegetables Main Dish" title="Vegetables Main Dish" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_8" title="Wishlist" href="#" rel="8" onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/8-suscipit-lobortis.html" data-id-product="8">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/8-suscipit-lobortis.html" rel="pizza/8-suscipit-lobortis.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/8-suscipit-lobortis.html" title="Vegetables Main Dish" itemprop="url">
							Vegetables Main Dish
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								200,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="orderc4c4.html?add=1&amp;id_product=8&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="8">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first-in-line last-line first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/9-consuetudium.html" title="Tomato Recipes" itemprop="url">
							<img class="replace-2x img-responsive" src="../225-home_default/consuetudium.jpg" alt="Tomato Recipes" title="Tomato Recipes" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_9" title="Wishlist" href="#" rel="9" onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/9-consuetudium.html" data-id-product="9">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/9-consuetudium.html" rel="pizza/9-consuetudium.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/9-consuetudium.html" title="Tomato Recipes" itemprop="url">
							Tomato Recipes
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								150,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="ordere04f.html?add=1&amp;id_product=9&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="9">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-line last-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/10-demonstraverunt.html" title="Chefs" itemprop="url">
							<img class="replace-2x img-responsive" src="../227-home_default/demonstraverunt.jpg" alt="Chefs" title="Chefs" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_10" title="Wishlist" href="#" rel="10" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/10-demonstraverunt.html" data-id-product="10">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/10-demonstraverunt.html" rel="pizza/10-demonstraverunt.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/10-demonstraverunt.html" title="Chefs" itemprop="url">
							Chefs
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								300,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="ordera5cc.html?add=1&amp;id_product=10&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="10">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-line first-item-of-tablet-line first-item-of-mobile-line last-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/11-praesent-luptatum.html" title="Pear Recipes" itemprop="url">
							<img class="replace-2x img-responsive" src="../229-home_default/praesent-luptatum.jpg" alt="Pear Recipes" title="Pear Recipes" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_11" title="Wishlist" href="#" rel="11" onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/11-praesent-luptatum.html" data-id-product="11">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/11-praesent-luptatum.html" rel="pizza/11-praesent-luptatum.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/11-praesent-luptatum.html" title="Pear Recipes" itemprop="url">
							Pear Recipes
						</a>
					</h5>
					 

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								500,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="order37e9.html?add=1&amp;id_product=11&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="11">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				
		
		
								
		<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last-in-line last-line last-item-of-tablet-line last-item-of-mobile-line last-mobile-line">
			<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="pizza/12-nulla-facilisis.html" title="Chinese Fried Rice" itemprop="url">
							<img class="replace-2x img-responsive" src="../231-home_default/nulla-facilisis.jpg" alt="Chinese Fried Rice" title="Chinese Fried Rice" itemprop="image">
						</a>
																<span class="new-box"><span class="new-label">New</span></span>					</div>
					<div class="actions quickview-block">
						<ul class="add-to-links">
								<li class="first">
								
<div class="wishlist">
	<a class="addToWishlist wishlistProd_12" title="Wishlist" href="#" rel="12" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
		Add to Wishlist
	</a>
</div>
								</li>
								<li class="last">
															<div class="compare">
								<a class="add_to_compare" title="Compare" href="pizza/12-nulla-facilisis.html" data-id-product="12">Add to Compare</a>
							</div>
														</li>
								<li>
																<a class="quick-view" href="pizza/12-nulla-facilisis.html" rel="pizza/12-nulla-facilisis.html">
								<span>Quick view</span>
							</a>
														</li>
							</ul>
						
											</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="pizza/12-nulla-facilisis.html" title="Chinese Fried Rice" itemprop="url">
							Chinese Fried Rice
						</a>
					</h5>
					 
	<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">	
		<div class="star_content clearfix">
												<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
																<div class="star star_on"></div>
										<meta itemprop="worstRating" content="0">
			<meta itemprop="ratingValue" content="2">
			<meta itemprop="bestRating" content="5">
		</div>
		<span class="nb-comments">1 Review(s)</span>
	</div>

					<p class="product-desc" itemprop="description">
						Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti...
					</p>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
													<span itemprop="price" class="price product-price">
								650,00 €							</span>
							<meta itemprop="priceCurrency" content="0">
																		</div>
										<div class="button-container">
																														<a class="button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=fe364affbd7a5cead98d60a32f4c9470" rel="nofollow" title="Add to cart" data-id-product="12">
										<span>Add to cart</span>
									</a>
														
																		</div>
					<div class="product-flags">
																														</div>
				</div>
				
				
			</div><!-- .product-container> -->
		</li>
				</ul>





			
								</div><!-- #center_column --></div>
											<div id="right_column" class="col-xs-12 col-sm-3 column"><!-- Block categories module -->

<!-- /Block categories module -->

<!-- Block layered navigation module -->

<!-- /Block layered navigation module -->

<!-- Block tags module -->

<!-- /Block tags module -->
<!-- MODULE Block advertising -->

<!-- /MODULE Block advertising -->
     </div>
										</div><!-- .row -->
				</div><!-- #columns -->
			</div>
			
			<div class="footer-container">
				<div id="footer">
					
			            <div class="pos-footer-center">
					    <div class="container">
						<div class="container-inner">
						    <div class="footer-center">
							<div class="row">
								<div class="footer-static row-fluid">
					<div class="f-col f-col1 col-md-3 col-sm-3 col-sms-12 footer-block">
<div class="about-us">
<div class="footer-static-title">
<h4>About Us</h4>
</div>
<div class="footer-static-content toggle-footer">
<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc.</p>
<div class="address">9 Interpro Road Madison, AL 35758, USA</div>
<div class="phone">012) 234 432 3568</div>
<div class="mail">Contact@posthemes.com</div>
</div>
</div>
</div>
							
				      <!-- Block myaccount module -->
<section class="footer-block col-md-3 col-sm-3 col-sms-12">
	<div class="footer-block-title">
	<h4><a href="loginfd9a.html" title="Manage my customer account" rel="nofollow">My account</a></h4></div>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="login856b.html" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="login2f9b.html" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="login9f3d.html" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="#" title="Manage my personal information" rel="nofollow">My personal info</a></li>
			<li><a href="#" title="Advanced Search" rel="nofollow">Advanced Search</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->

		 					
				      	<!-- MODULE Block footer -->
	<section class="footer-block col-md-3 col-sm-3 col-sms-12" id="block_various_links_footer">
		<div class="footer-block-title">
			<h4>Information</h4>
		</div>
		<ul class="toggle-footer">
							<li class="first_item">
					<a href="prices-drop.html" title="Specials">
						Specials
					</a>
				</li>
									<li class="item">
				<a href="new-products.html" title="New products">
					New products
				</a>
			</li>
										<li class="item">
					<a href="#" title="Best sellers">
						Best sellers
					</a>
				</li>
										<li class="item">
					<a href="stores.html" title="Our stores">
						Our stores
					</a>
				</li>
									<li class="item">
				<a href="#" title="Contact us">
					Contact us
				</a>
			</li>
					</ul>
		
	</section>
	<!-- /MODULE Block footer -->

		 					<div class="f-col f-col4 col-md-3 col-sm-3 col-sms-12 footer-block">
<div class="footer-static-title">
<h4>Get Inspired</h4>
</div>
<div class="footer-static-content toggle-footer">
<ul>
<li class="first"><a href="#">Shoes</a></li>
<li><a href="#">Perfumes</a></li>
<li><a href="#">Bags</a></li>
<li><a href="#">Make Up</a></li>
<li class="last"><a href="#">Jewelry</a></li>
</ul>
</div>
</div>
			</div>


							</div>
						    </div>
						</div>
					    </div>
					</div>
					<div class="pos-footer-top">
						<div class="container">
							<div class="container-inner">
							    <div class="footer-top">
								<div class="footer-static row-fluid">
					
				      <!-- Block Newsletter module-->

		 					<div class="col-md-6 col-sm-6 col-sms-12">
<div class="footer-box footer-box2">
<div class="title">follow us on</div>
<div class="content">
<ul>
<li><a class="twitter" href="#">twitter</a></li>
<li><a class="facebook" href="#">facebook</a></li>
<li><a class="google" href="#">google</a></li>
<li><a class="p" href="#">p</a></li>
<li><a class="youtube" href="#">youtube</a></li>
<li><a class="point" href="#">2-point</a></li>
</ul>
</div>
</div>
</div>
							<div class="col-md-6 col-sm-6 col-sms-12">
<div class="footer-box footer-box3">
<div class="title">payment method</div>
<div class="content">
<ul>
<li><a href="#"><img src="../../../pos_aries/img/cms/visa.jpg" alt="" /></a></li>
<li><a href="#"><img src="../../../pos_aries/img/cms/paypal.jpg" alt="" /></a></li>
<li><a href="#"><img src="../../../pos_aries/img/cms/master_card.jpg" alt="" /></a></li>
<li><a href="#"><img src="../../../pos_aries/img/cms/discover.jpg" alt="" /></a></li>
</ul>
</div>
</div>
</div>
			</div>


							    </div>	
							</div>
						</div>
					</div>
					<div class="pos-footer-bottom">
					    <div class="container">
						<div class="container-inner">
						    <div class="footer-bottom">
							<div class="footer-static row-fluid">
					<div class="footer-address">
<p>Copyright &copy; 2016 Adbhoot Innovations.All rights reserved.</p>

</div>
      <div class="pull-right" style="padding-top: 15px;">
					    	<p>Devoloped by-Technomate Systems.</p>
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="">
        <div class="modal-header">
          
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         <div id="center_column" class="center_column col-xs-12 col-sm-12 col-lg-12">
							
	

								<div class="wrapper-center-column">
	<div class="primary_block row" itemscope="" itemtype="http://schema.org/Product">
					<div class="container">
				<div class="top-hr"></div>
			</div>
								<!-- left infos-->  
		<div class="pb-left-column col-xs-12 col-sm-4 col-md-5">
			<!-- product img-->        
			<div id="image-block" class="clearfix">
				<!--					<span class="new-box">
						<span class="new-label">New</span>
					</span>
								-->
									<span id="view_full_size">
													<img id="bigpic" itemprop="image" src="img/faded-short-sleeve-tshirts.jpg" title="Chefs" alt="Chefs" width="233" height="233">
															<span class="span_link no-print">View larger</span>
																		</span>
							</div> <!-- end image-block -->
							<!-- thumbnails -->
				<div id="views_block" class="clearfix ">
									 <!-- end thumbs_list -->
									</div> <!-- end views-block -->
				<!-- end thumbnails -->
										<p class="resetimg clear no-print">
					<span id="wrapResetImages" style="display: none;">
						<a href="2-blouse.html" name="resetImages">
							<i class="icon-repeat"></i>
							Display all pictures
						</a>
					</span>
				</p>
										<!-- usefull links-->
				
					</div> <!-- end pb-left-column -->
		<!-- end left infos--> 
		<!-- center infos -->
		<div class="pb-center-column col-xs-12 col-sm-4 col-md-7 col-sm-7">
				
			<h1 itemprop="name">Chefs</h1>
			<div class="content_prices clearfix">
													<p id="reduction_amount" style="display:none">
								<span id="reduction_amount_display">
																</span>
							</p>
																											 
						<div class="clear"></div>
					</div>
			 
<div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
			<div class="comments_note clearfix">
			<span>Rating&nbsp;</span>
			<div class="star_content clearfix">
															<div class="star star_on"></div>
																				<div class="star star_on"></div>
																				<div class="star star_on"></div>
																				<div class="star star_on"></div>
																				<div class="star"></div>
													<meta itemprop="worstRating" content="0">
				<meta itemprop="ratingValue" content="2">
				<meta itemprop="bestRating" content="5">
				<span class="hidden" itemprop="ratingValue">4</span> 
			</div>
		</div> <!-- .comments_note -->
	
	<ul class="comments_advices">
					<li>
				<a href="#idTab5" class="reviews">
					<span class="read">
					Read reviews (<span itemprop="reviewCount">1</span>)
					</span>
				</a>
			</li>
					</ul>
</div>
<!--  /Module ProductComments -->			<p id="product_reference">
				<label>Model </label>
				<span class="editable" itemprop="sku">demo_2</span>
			</p>
						<p id="product_condition">
				<label>Condition </label>
				<span class="editable" itemprop="condition">				New
							</span>
			</p>
							<div id="short_description_block">
											<div id="short_description_content" class="rte align_justify" itemprop="description"><p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p></div>
					
											<p class="buttons_bottom_block">
							<a href="javascript:{}" class="button">
								More details
							</a>
						</p>
										<!---->
				</div> <!-- end short_description_block -->
						<!-- prices -->
							<div class="price">
								<p class="our_price_display" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
									<link itemprop="availability" href="http://schema.org/InStock">																			<span id="our_price_display" itemprop="price">320,40 €</span>
										<!--											tax incl.										-->
										<meta itemprop="priceCurrency" content="EUR">
																	</p>
								<p id="reduction_percent" style="display:none;">
									<span id="reduction_percent_display">
																			</span>
								</p>
								<p id="old_price" class="hidden" style="display: none;">
																			<span id="old_price_display" style="display: none;">320,40 €</span>
										<!-- tax incl. -->
																	</p>
															</div> <!-- end prices -->
							<!-- number of item in stock -->
				
										<!-- availability -->
				
						
													<!-- attributes -->
							 
												<!-- end attributes -->
						
						<!-- quantity wanted -->
												
												<!-- end quantity wanted -->
						
						<div class="box-info-product">
					<div class="product_attributes clearfix">
						
						<!-- minimal quantity wanted -->
						<p id="minimal_quantity_wanted_p" style="display: none; color: rgb(55, 72, 83);">
							This product is not sold individually. You must select at least <b id="minimal_quantity_label">1</b> quantity for this product.
						</p>
						
					</div> <!-- end product_attributes -->
					<div class="box-cart-bottom">
						<div>
							<p class="buttons_bottom_block no-print">
								<button type="submit" name="Submit" class="exclusive" style="border: none;background: none;border-style: none;box-shadow: none;">
									<span><span>Add to cart</span></span>
								</button>
							</p>
						</div>
						
<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '2', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow" title="Add to my wishlist">
		Add to my wishlist
	</a>
</p>
<strong></strong>
					</div> <!-- end box-cart-bottom -->
				</div> <!-- end box-info-product -->
				
				<p class="warning_inline" id="last_quantities" style="display: none;">Warning: Last items in stock!</p>
						<p id="availability_date" style="display: none;">
				<span id="availability_date_label">Availability date:</span>
				<span id="availability_date_value"></span>
			</p>
			<!-- Out of stock hook -->
			<div id="oosHook" style="display: none;">
				
			</div>
			
			
			
			
						<!-- add to cart form-->
			<form id="buy_block" action="http://demo.posthemes.com/pos_zodiac/food/en/cart" method="post">
				<!-- hidden datas -->
				<p class="hidden">
					<input type="hidden" name="token" value="fe364affbd7a5cead98d60a32f4c9470">
					<input type="hidden" name="id_product" value="2" id="product_page_product_id">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="id_product_attribute" id="idCombination" value="7">
				</p>
				
			</form>
					</div> <!-- end pb-center-column-->
	</div> <!-- end primary_block -->
	
		<!-- more-info -->

</div>
 
					</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>	
<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var FancyboxI18nClose = 'Close';
var FancyboxI18nNext = 'Next';
var FancyboxI18nPrev = 'Previous';
var added_to_wishlist = 'Added to your wishlist.';
var ajax_allowed = true;
var ajaxsearch = true;
var baseDir = 'http://demo.posthemes.com/pos_zodiac/food/';
var baseUri = 'http://demo.posthemes.com/pos_zodiac/food/';
var blocksearch_type = 'top';
var contentOnly = false;
var customizationIdMessage = 'Customization #';
var delete_txt = 'Delete';
var freeProductTranslation = 'Free!';
var freeShippingTranslation = 'Free shipping!';
var id_lang = 1;
var img_dir = 'http://demo.posthemes.com/pos_zodiac/food/themes/pos_zodiac_food/img/';
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
<script type="text/javascript" src="../modules/posslideshow/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="../modules/posmegamenu/js/custommenu.js"></script>
<script type="text/javascript" src="../modules/posmegamenu/js/mobile_menu.js"></script>
<script type="text/javascript" src="../modules/posscroll/scrolltop.js"></script>
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