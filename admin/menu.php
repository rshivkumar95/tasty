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

<script src="additem.js"></script>

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
                      <li><h1 class="logo-wrapper"><a href="index-2.html" class="brand-logo darken-1">Tasty Tadka</a> <span class="logo-text">Tasty Tadka</span></h1></li>
                    </ul>
                    
                    <ul class="right hide-on-med-and-down">
                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        
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
                        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
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
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Hotel Name</a>
                        <p class="user-roal">Hotel</p>
                    </div>
                </div>
                </li>
                <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> DASHBOARD</a>
                </li>
                <li class="bold active"><a href="menu.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>MENU</a>
                </li>
                <li class="bold"><a href="orders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>ORDERS</a>
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

            <section id="content">
              <div class="container"><br>
              <div class="row center">
              </div>
               <div class="row">
                   <div class="col s12 l4">
                      <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-content-add circle light-blue darken-2"></i>
                                        <span class="collection-header">Add Item</span>
                                        <p>Add New Food Item to Menu</p>
                                        
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <form id="form" name="form" method="POST" action="additem.php">
                                              <div class="row">
                                                <div class="input-field col s12">
                                                  
                                                  <input id="Item_Name" name="Item_Name" type="text" class="validate">
                                                  <label for="Item_Name">Item Name</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12">
                                                  
                                                  <textarea id="Item_Details" name="Item_Details" class="materialize-textarea" length="220"></textarea>
                                                  <label for="textarea1">Item Details</label>                                                  
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12">
                                                  
                                                  <input id="Item_Price" name="Item_Price" type="number" min=0 class="validate">
                                                  <label for="Item_Price">Item Price</label>
                                                </div>
                                              </div>
                                               <div class="row">
                                                <div class="input-field col s12">
                                                 <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Image</span>
                                                      <input type="file" id="Item_Image" name="Item_Image">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                               <div class="row">
                                                <div class="input-field col s12">
                                                   <select id="Item_Category" name="Item_Category"  class="validate">
                                                     <option>Milk</option>
                                                     <option>Coffee</option>
                                                     <option>Tea</option>
                                                   </select>                          
                                                </div>
                                              </div>
                                               <div class="row">
                                                <div class="input-field col s12">
                                                  <input id="Discount" name="Discount" type="number" min=0 class="validate">
                                                  <label for="Discount">Discount</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input class="btn cyan waves-effect waves-light right" id="submit" type="submit" value="ADD">
                                                    
                                                      
                                                  </div>
                                                </div>
                                              </div>
                                           </form>
                                        </div>
                                    </li>    
                                </ul>
                   </div>
                   <div class="col s12  l8">
                    <ul class="collection">
                  
                  <li class="collection-item avatar" style="padding-left: 0px ">
                    <div class="row" style="padding: 20px;">
                     <div class="col l8 s12">
                        
                            <img src="images/avatar.jpg" alt=""  align="left" style="width: 100px;height: 100px;padding: 5px;">
                           

                            <strong>Title</strong>
                            <p>Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details.</p>                       
                            <p> <strong>RS. 500/-</strong></p>
                           
                     </div>
                     <div class="col l4 s12">
                        <div class="row center">
                            <div class="col s6 l6">
                                 <a class="btn-floating btn-large waves-effect waves-light tooltipped " data-position="top" data-delay="50" data-tooltip="Update Menu Item"><i class="mdi-action-autorenew"></i></a>
                                 
                            </div>
                            <div class="col s6 l6">
                               <a class="btn-floating btn-large waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Delete Menu Item"><i class="mdi-action-delete"></i></a>
                               
                            </div>
                        </div>
                     </div>
                    </div>
                  </li>
                  <li class="collection-item avatar" style="padding-left: 0px ">
                    <div class="row" style="padding: 20px;">
                     <div class="col l8 s12">
                        
                            <img src="images/avatar.jpg" alt=""  align="left" style="width: 100px;height: 100px;padding: 5px;">
                           

                            <strong>Title</strong>
                            <p>Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details.</p>                       
                            <p> <strong>RS. 500/-</strong></p>
                           
                     </div>
                     <div class="col l4 s12">
                        <div class="row center">
                            <div class="col s6 l6">
                                 <a class="btn-floating btn-large waves-effect waves-light tooltipped " data-position="top" data-delay="50" data-tooltip="Update Menu Item"><i class="mdi-action-autorenew"></i></a>
                                 
                            </div>
                            <div class="col s6 l6">
                               <a class="btn-floating btn-large waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Delete Menu Item"><i class="mdi-action-delete"></i></a>
                               
                            </div>
                        </div>
                     </div>
                    </div>
                  </li>
                  <li class="collection-item avatar" style="padding-left: 0px ">
                    <div class="row" style="padding: 20px;">
                     <div class="col l8 s12">
                        
                            <img src="images/avatar.jpg" alt=""  align="left" style="width: 100px;height: 100px;padding: 5px;">
                           

                            <strong>Title</strong>
                            <p>Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details.</p>                       
                            <p> <strong>RS. 500/-</strong></p>
                           
                     </div>
                     <div class="col l4 s12">
                        <div class="row center">
                            <div class="col s6 l6">
                                 <a class="btn-floating btn-large waves-effect waves-light tooltipped " data-position="top" data-delay="50" data-tooltip="Update Menu Item"><i class="mdi-action-autorenew"></i></a>
                                 
                            </div>
                            <div class="col s6 l6">
                               <a class="btn-floating btn-large waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Delete Menu Item"><i class="mdi-action-delete"></i></a>
                               
                            </div>
                        </div>
                     </div>
                    </div>
                  </li>
                  <li class="collection-item avatar" style="padding-left: 0px ">
                    <div class="row" style="padding: 20px;">
                     <div class="col l8 s12">
                        
                            <img src="images/avatar.jpg" alt=""  align="left" style="width: 100px;height: 100px;padding: 5px;">
                           

                            <strong>Title</strong>
                            <p>Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details Product Details.</p>                       
                            <p> <strong>RS. 500/-</strong></p>
                           
                     </div>
                     <div class="col l4 s12">
                        <div class="row center">
                            <div class="col s6 l6">
                                 <a class="btn-floating btn-large waves-effect waves-light tooltipped " data-position="top" data-delay="50" data-tooltip="Update Menu Item"><i class="mdi-action-autorenew"></i></a>
                                 
                            </div>
                            <div class="col s6 l6">
                               <a class="btn-floating btn-large waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Delete Menu Item"><i class="mdi-action-delete"></i></a>
                               
                            </div>
                        </div>
                     </div>
                    </div>
                  </li>
                  
                  
                  
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



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer" style="background-color: #444;">
        
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2017 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">TastyTadkaa</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://technomatesystems.com/">Technomate Systems</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


   <script type="text/javascript">
      
      $(document).ready(function() {
            $("#submit").click(function() {

                alert("Button Clicked");
            var Item_Name = $("#Item_Name").val();
            var Item_Details = $("#Item_Details").val();
            var Item_Price = $("#Item_Price").val();
            var Item_Image = $("#Item_Image").val();
            var Item_Category = $("#Item_Category").val();
            var Discount = $("#Discount").val();

            if (Item_Name == '' || Item_Details == '' || Item_Price == '' || Item_Image == '' || Item_Category == '' || Discount == '') {
            alert("Insertion Failed Some Fields are Blank....!!");
            } else {
            // Returns successful data submission message when the entered information is stored in database.
            $.post("additem.php", {
            Item_Name1: Item_Name,
            Item_Details1: Item_Details,
            Item_Price1: Item_Price,
            Item_Image1: Item_Image,
            Item_Category1: Item_Category,
            Discount1: Discount
            }, function(data) {
            alert(data);
            $('#additem')[0].reset(); // To reset form fields
            });
            }
            });
            });

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