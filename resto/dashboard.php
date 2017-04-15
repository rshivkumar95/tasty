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

                    </div>
                </div>
                </li>
                <li class="bold active"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> DASHBOARD</a>
                </li>
                <li class="bold"><a href="menu.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>MENU</a>
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

                <!--start container-->
                <div class="container" style="min-height:650px;">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <!-- MY MENU HERE -->
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h4 class="task-card-title">HOTEL MENU</h4>
                                        
                                    </li>
                                    <?php

                                   include_once('operations/config.php');
                        $id=$_SESSION['Restaurant_ID'];
                        $query="SELECT * FROM `restaurant_menu` WHERE Restaurant_Id='$id'";
                                    $result=mysql_query($query) or die(mysql_error());

                                    while ($obj=mysql_fetch_array($result)) {



                                        ?>

                                        <li class="collection-item dismissable">

                                            <label for="task1"><?php echo $obj['Item_Name']; ?> <a href="#" class="secondary-content"><span class="ultra-small"><?php echo $obj['Item_price']; ?></span></a>
                                            </label>
                                            <span class="task-cat teal"><?php echo $obj['Item_category']; ?></span>
                                        </li>

                                        <?php

                                    }
                                    ?>

                                </ul>
                            </div>

                            <div class="col s12 m6 l6">
                                <ul id="task-card" class="collection with-header" style="background-color:white;">
                                    <li class="collection-header teal">
                                        <h4 class="task-card-title">INCOMPLETE ORDERS</h4>
                                        
                                    </li>
                                    <?php

                                    include_once('operations/config.php');
                                    $resID=$_SESSION['Restaurant_ID'];
                                    $query="SELECT * from orders WHERE orders.status!='Dispatched' and orders.Order_Id=ANY(SELECT orderrest.orderID FROM orderrest WHERE orderrest.restID='$resID')";
                                    $result=mysql_query($query) or die(mysql_error());
                                    $rows=mysql_num_rows($result);
                                    if($rows<1)
                                    {
                                        echo "<li><h5>No Pending Orders</h5></li>";
                                    }
                                    else
                                    while ($obj=mysql_fetch_array($result)) {
                                                $custID=$obj['custID'];
                                               //echo $custID;

                                        ?>

                                        <li class="collection-item dismissable">

                                            <?php

                                            $query1="SELECT * FROM `customers` WHERE `Email`='$custID'";
                                            $result1=mysql_query($query1) or die(mysql_error());
                                            $data  =mysql_fetch_assoc($result1);

                                              
                                            ?>

                                            <label for="task1"><?php echo $data['CustomerName']; ?> <a href="#" class="secondary-content"><span class="ultra-small"><?php echo $obj['Order_Id']; ?></span></a>
                                            </label>
                                            <span class="task-cat teal"><?php echo $obj['status']; ?></span>
                                        </li>

                                        <?php

                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->
                    <!--div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div-->
                    <!--card stats end-->
                    <div class="row">
              <div class="col s12 m12 l12">
                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h4 class="task-card-title">Reviews</h4>

                                    </li>
                    <?php

                    include_once('operations/config.php');
                     $rid=$_SESSION['Restaurant_ID'];
                    $query="SELECT * FROM `reviews` WHERE RestaurantID='$rid' ";
                    $result=mysql_query($query) or die(mysql_error());
                    $rows=mysql_num_rows($result);
                    if($rows<1)
                    {
                        echo "<li><h5>No Reviews</h5></li>";
                    }
                    else
                        while ($obj=mysql_fetch_array($result)) {



                            ?>

                            <li class="collection-item dismissable">



                                <label for="task1"><?php echo $obj['review']; ?> <a href="#" class="secondary-content"><span class="ultra-small"><?php echo $obj['rating']; ?></span></a>
                                </label>
                                <span class="task-cat teal"><?php echo $obj['reviewerName']; ?></span>
                            </li>

                            <?php

                        }
                    ?>
                                </ul>
                  
              </div>
                
            </div>
                    <!-- //////////////////////////////////////////////////////////////////////////// -->

            </section>

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer" style="background-color: #444;margin:0px;">
        
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2017 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">TastyTadkaa</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://technomatesystems.com/">Technomate Systems</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


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
    <!--script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have a new Order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });
    </script-->
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
</body>

</html>