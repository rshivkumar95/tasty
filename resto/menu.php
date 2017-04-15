<?php


include_once('config.php');


if($_SESSION['loggedIn']!=1)
{
    echo "<script type='text/javascript'>window.location='login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>TastyTadkaa | Order Your Food Online</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<script>
        $(document).ready(function(){

           
            function monitor() {

                $.ajax({
                          url: 'changestatus.php',
                          type: 'POST',
                          data: {
                          
                          
                          'action': 'count'
                          },
                         success:function(result)//we got the response
                         {
                           //alert(result);
                            var result1=$.trim(result);
                            //alert(result1);
                             if(result1==='true')
                             {
                               
                                alert('You Got A New Order !');
                                window.location.href="orders.php";
                                


                             }
                             
                         }
                         

                        });
    
}

setInterval(monitor, 1000); 

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
    $('select').material_select();
    getAll();

            var _URL = window.URL || window.webkitURL;
            $("#Item_Image").change(function(){


                var file, img;
                if ((file = this.files[0])) {
                    img = new Image();
                    img.onload = function () {




                        if(this.width!=300 || this.height!=300)
                        {
                            alert("Image Dimension must be 300X300 !");
                            //this.val('');
                            $(this).val('');
                            $('#filepath').val('');
                        }




                    };
                    img.src = _URL.createObjectURL(file);
                }

            });


             var _URL = window.URL || window.webkitURL;
            $("#Item_Image1").change(function(){


                var file, img;
                if ((file = this.files[0])) {
                    img = new Image();
                    img.onload = function () {




                        if(this.width!=300 || this.height!=300)
                        {
                            alert("Image Dimension must be 300X300 !");
                            //this.val('');
                            $(this).val('');
                            $('#filepath1').val('');
                        }




                    };
                    img.src = _URL.createObjectURL(file);
                }

            });

        });

        function changestatus(orderID,status)
        {
            if(confirm("Are You Sure ?"))
            {
                
                $.ajax
                    ({
                        url: 'changestatus.php',
                        data: { 
                            'action':'change',
                            'orderID':orderID,
                            'status':status
                        },
                        type:'POST',
                        cache: false,
                        success: function(r)
                        {
                           window.location.href='orders.php';
                        }
                    }); 

            }
        }
    </script>


    
<style type="text/css">
    .input-field ul
    {
        z-index: 1 !important;
        overflow-y: visible;
    }
</style>
    

</head>

<body>
    <!-- Start Page Loading -->
    <!--div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div-->
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1">Tasty Tadkaa</a> <span class="logo-text">Tasty Tadka</span></h1></li>
                    </ul>
                    
                    <ul class="right hide-on-med-and-down">
                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <!--li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li-->                        
                        
                    </ul>
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!"><img src="images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l12 center">
                        <img src=<?php echo '../'.$_SESSION['Restaurant_Logo']; ?> alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l12 center">
                        <!--ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                            </li>
                            <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            </li>
                        </ul-->
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['Restaurant_Name']; ?></a>
                        <p class="user-roal">Hotel</p>
                    </div>
                </div>
                </li>
                <li class="bold"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> DASHBOARD</a>
                </li>
                <li class="bold active"><a href="menu.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>MENU</a>
                </li>
                <li class="bold"><a href="orders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>ORDERS</a>
                </li>
                <li class="bold"><a href="dailyorders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>DAILY ORDERS</a>
                </li>
                <li class="bold"><a href="reviews.php" class="waves-effect waves-cyan"><i class="mdi-action-thumbs-up-down"></i>REVIEWS</a>
                </li>
                

                
               
                <li class="li-hover"><div class="divider"></div></li>
                <li class="bold"><a href="accounts.php" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i>ACCOUNT</a>
                </li>
                <li class="bold"><a href="logout.php" class="waves-effect waves-cyan"><i class="mdi-action-lock"></i>LOG OUT</a>
                </li>
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <section id="content" style="background-image:url('images/biryani.jpg')">
              <div class="container"><br>
               <div class="row">
                   <div class="col s12 l12">
                   <form method="POST" action="additem.php" enctype="multipart/form-data">
					<div  style="border-radius:25px;background-color: #fff;">
					<div id="projects-collection"  style="border-radius:25px;">
								<div class="collection-item avatar" class="collection" style="border-radius: 20px 20px 0px 0px;padding: 10px;background-image:url('images/back.jpg')">
                                       
                                        <!--<span class="collection-header">Add Restaurant</span>-->
                                        <h4 style="color:red;"><center>ADD ITEMS</center></h4>
										<p><center><strong>Add New Food Item to Restaurant Menu</strong></center></p>
                                        
                                    </div>
                                        
                                        
                                        

										
                                        <div class="row container" style="margin:10px;">
                                            
                                                <div class="row">
                                                    <div class="input-field col s12 l6">

                                                        <input id="Item_Name" name="Item_Name" type="text" class="validate" required>
                                                        <label for="Item_Name">Item Name</label>
                                                    </div>

                                                    <div class="input-field col s12 l6">

                                                        <textarea id="Item_Details" name="Item_Details" required class="materialize-textarea" length="220" style="padding:0px;"></textarea>
                                                        <label for="textarea1">Item Details</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12 l6">

                                                        <input id="Item_Price" name="Item_Price" required type="number" min=0 class="validate">
                                                        <label for="Item_Price">Item Price</label>
                                                    </div>

                                                    <div class="input-field col s12 l6">
                                                        <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>Image</span>
                                                                <input type="file" id="Item_Image" name="Item_Image" required>
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input id="filepath" class="file-path validate" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"  style="position:relative;z-index: 999 !important;">
                                                    <div class="input-field col s12 l4" >
                                                        <select id="Item_Category" name="Item_Category"  class="validate">
                                                            <option>Veg</option>
                                                            <option>Non-Veg</option>
                                                            <option>Chinese</option>
                                                            <option>South Indian</option>
                                                            <option>Sweets</option>
                                                            <option>Tiffine</option>
                                                            <option>Juice</option>
                                                            <option>Others</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-field col s12 l4">
                                                        <input id="Discount" name="Discount" type="number" min=0 class="validate" required>
                                                        <label for="Discount">Discount</label>
                                                    </div>
                                                    <div class="input-field col s12 l4" >
                                                        <select id="Item_Status" name="Item_Status"  class="validate" style="z-index: 1 !important;">
                                                            <option>Available</option>
                                                            <option>UnAvailable</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="row" style="padding: 10px;">
                                                    
                                                        <div class="input-field col s12">
                                                            <input class="btn cyan waves-effect waves-light right" id="submit" name="submit" type="submit" value="ADD">


                                                        </div>
                                                    
                                                </div>
                                            
                                        </div>
										
					</div>
                    </form>
                   </div>
				   <br>
                   <div class="col s12  l12" style="margin-top:15px;">
                    <ul class="collection" style="border-radius:25px;">


                        <?php

                        include_once('operations/config.php');
                        $id=$_SESSION['Restaurant_ID'];
                        $query="SELECT * FROM `restaurant_menu` WHERE Restaurant_Id='$id'";
                        $result=mysql_query($query) or die(mysql_error());

                        while ($obj=mysql_fetch_array($result)) {


                            ?>

                            <li class="collection-item avatar hoverable" style="padding-left: 0px ">
                                <div class="row" style="padding: 20px;">
                                    <div class="col l8 s12">

                                        <img src=<?php echo '../'.$obj['Item_Image'];?> alt="" align="left"
                                             style="width: 100px;height: 100px;padding: 5px;">


                                        <strong><?php echo $obj['Item_Name'];?></strong>
                                        <p style="font-size: 12px;"><?php echo $obj['Item_category'];?></p>
                                        <p style="font-size: 14px;word-wrap:break-word;"><?php echo $obj['Item_Details'];?></p>
                                        <p>
                                                <?php

                                                $discount=$obj['Discount'];

                                                if($discount>0)
                                                {
                                                    $newprice=$obj['Item_price']-(($obj['Item_price']*$discount)/100);
                                                     echo "<strong>Rs.<del>".$obj['Item_price']."/-</del></strong>&nbsp;&nbsp;<strong>Rs.".$newprice."/-</strong>";
                                                }

                                                ?>
                                            </p>

                                    </div>
                                    <div class="col l4 s12">
                                        <div class="row center">
                                            <div class="col s6 l6">
                                                <a onclick="update1(<?php echo $obj['Item_Id']; ?>);" class="btn-floating btn-large waves-effect waves-light tooltipped "
                                                   data-position="top" data-delay="50"
                                                   data-tooltip="Update Menu Item"><i class="mdi-editor-mode-edit"></i></a>

                                            </div>
                                            <div class="col s6 l6">
                                                <a onclick="delete1(<?php echo $obj['Item_Id']; ?>);" class="btn-floating btn-large waves-effect waves-light tooltipped"
                                                   data-position="top" data-delay="50"
                                                   data-tooltip="Delete Menu Item"><i class="mdi-action-delete"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <?php


                        }
                        ?>

                  
                  
                  
                </ul>
                </div>

               </div>
               </div>
                    <!--card stats end-->
                    
                    <!-- //////////////////////////////////////////////////////////////////////////// -->

            </section>

            <!-- //////////////////////////////////////////////////////////////////////////// -->
           
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->

    <div id="update" class="modal fade" style="border-radius:25px;">
        <form  method="POST" action="itemData.php" enctype="multipart/form-data">
            <div class="modal-content">
                <h5><center>Update Item Details</center></h5>
                <p>Leave Image Field Blank if you don't want to update. Image resolution must be 300x300.</p>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <label for="Item_Id1">Item Name</label>
                        <input id="Item_Id1" name="Item_Id1" type="hidden" class="validate" required>
                        <input id="Item_Name1" name="Item_Name1" type="text" class="validate" required>

                    </div>

                    <div class="input-field col s12 l6">
                    <label for="Item_Details1">Item Details</label>
                        <textarea id="Item_Details1" name="Item_Details1" required class="materialize-textarea" length="220"></textarea>

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                    <label for="Item_Price1">Item Price</label>
                        <input id="Item_Price1" name="Item_Price1" required type="number" min=0 class="validate">

                    </div>

                    <div class="input-field col s12 l6">
                        <div class="file-field input-field">
                        
                            <div class="btn">
                                <span>Image</span>
                                <input type="file" id="Item_Image1" name="Item_Image1">
                            </div>
                            <div class="file-path-wrapper">
                                <input id="filepath1" class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l4">
                    
                        <select id="Item_Category1" name="Item_Category1"  class="validate" style="overflow-y: scroll;z-index: 9999;">
                            <option>Veg</option>
                            <option>Non-Veg</option>
                            <option>Chinese</option>
                            <option>South Indian</option>
                            <option>Sweets</option>
                            <option>Tiffine</option>
                            <option>Juice</option>
                            <option>Others</option>
                        </select>
                    </div>

                    <div class="input-field col s12 l4">
                         <label for="Item_Discount1">Item Discount</label>
                        <input id="Discount1" name="Discount1" type="number" min=0 class="validate" required>

                    </div>
                    <div class="input-field col s12 l4" >
                        
                         <select id="Item_Status1" name="Item_Status1"  class="validate" style="z-index: 1 !important;">
                                                            <option>Available</option>
                                                            <option>UnAvailable</option>
                                                            
                                                        </select>
                                                    </div>
                </div>



                <div class="row" style="float:right">

                    <input type="submit" name="update" class="waves-effect waves-green btn " value="update">
                    <a onclick="return cancel();" class="waves-effect waves-green btn modal-action modal-close">CANCEL</a>
                </div>


            </div>

        </form>
    </div>

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer" style="background-color: #444; margin-top:0px;">
        
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2017 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">TastyTadkaa</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://technomatesystems.com/">Technomate Systems</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script type="text/javascript">

        var $image1,$image2;

        function delete1($var)
        {
            if(confirm('Are You Sure ?'))
            {
                $.ajax({
                    url: 'deleteitem.php',
                    type: 'POST',
                    data: {
                        'id': $var,
                        'sub': 'yes'
                    },
                    success:function(result)//we got the response
                    {
                        alert('Item Removed');
                    }


                });

                window.location='menu.php';
            }
        }

        function update1($var)
        {

            $.ajax({
                url: 'itemData.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    'id': $var,
                    'sub': 'item'
                },
                success:function(result)//we got the response
                {

                    $('#update').openModal();
                    $('#Item_Id1').val(result[1]);
                    $('#Item_Name1').val(result[2]);
                    $('#Item_Details1').val(result[3]);
                    $('#Item_Price1').val(result[4]);
                    $('#Discount1').val(result[5]);
                   //alert(result[7]);
                    //var optionValue  = localStorage.getItem(result[2]);
                    // $("#ADType1").find("option[value='Horizontal]'").attr('selected', true);
                    //$('#ADType1 option:contains('+trim(result[2])+')').prop('selected',true);
                    /* $("#ADType1 option").each(function(){
                     if ($(this).text() == "Horizontal")
                     $(this).attr("selected","selected");
                     });*/
                    $('#Item_Category1 option').each(function(){
                        if ($(this).text() == $.trim(result[7])){
                            $(this).attr("selected","selected");
                            $('#Item_Category1').material_select();
                        }
                    });

                    $('#Item_Status1').val(result[8]);


                    Materialize.updateTextFields();


                },
                error:function(exception){
                    alert("Error");
                }


            })


        }



    </script>



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <!--script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>
    
    <!--google map-->
    <!--script type="text/javascript" src="js/plugins/google-map/google-map-script.js"></script>

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">

    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
    // Toast Notification
    $(window).load(function() {

        
    });
    </script>
</body>

</html>