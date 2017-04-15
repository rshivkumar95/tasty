<?php



session_start();


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

//setInterval(monitor, 1000); 

            
    $('select').material_select();
   

    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15,
    format:'yyyy-mm-dd',
    onSet: function( arg ){
        if ( 'select' in arg ){ //prevent closing on selecting month/year
            this.close();
        }
    } // Creates a dropdown of 15 years to control year
  });

           

            var _URL = window.URL || window.webkitURL;
            $("#orderdate").change(function()
            {

                    var date=this.value;
                   
                        
              $.ajax
                ({
                    url: 'getordersbydate.php',
                    data: {
                        'date':date
                        
                    },
                    type:'POST',
                    cache: false,
                    success: function(r)
                    {
                        
                        $("#order_list").html(r);
                    }
                }); 

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
                <li class="bold"><a href="menu.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>MENU</a>
                </li>
                <li class="bold"><a href="orders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>ORDERS</a>
                </li>
                 <li class="bold active"><a href="dailyorders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>DAILY ORDERS</a>
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
            <div class="container" style="min-height:650px;"><br>
                <div class="row center">
                </div>
               <div class="row container" style="margin:10px;background: #fff;">
                                            
                                                
                                                <div class="row"  style="position:relative;z-index: 999 !important;">
                                                    <div class="input-field col s12 l4" >
                                                        
                                                    </div>

                                                    <div class="input-field col s12 l4">
                                                        <h5>Select Date</h5>
                                                        <input type="date" id="orderdate" class="datepicker" placeholder="Select Date">
                                                    </div>
                                                    <div class="input-field col s12 l4" >
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                            
                                        </div>
                
                     
                <div id="order_list">

                       

                    
                    

                </div>
            </div>


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
<footer class="page-footer" style="background-color: #444;margin-top:0px;">

    <div class="footer-copyright">
        <div class="container">
            Copyright © 2017 <a class="grey-text text-lighten-4" href="http://tastytdkaa.com" target="_blank">TastyTadkaa</a> All rights reserved.
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://technomatesystems.com/">Technomate Systems</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<script type="text/javascript">

    var $image1,$image2;

    function update($var)
    {
        if(confirm('Are You Sure ?'))
        {
            //alert("Updated");
            var val1='#Order'+$var;
            var status=$(val1).val();

           $.ajax({
                url: 'updateorder.php',
                type: 'POST',
                data: {
                    'id': $var,
                    'status':status,
                    'sub': 'yes'
                },
                success:function(result)//we got the response
                {
                    alert('Status Updated');
                }


            });

            window.location='dailyorders.php';
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