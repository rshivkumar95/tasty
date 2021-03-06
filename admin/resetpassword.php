

<?php
include_once('operations/config.php');


session_start();

$key=$_GET['request'];

$query = "SELECT * FROM `admin` WHERE temppass='$key'";
$result = mysql_query($query) or die(mysql_error());
$rows=mysql_num_rows($result);
$data  =mysql_fetch_array($result);

if($rows!=1)
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
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


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
                    <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1">Tasty Tadkaa</a> <span class="logo-text">Tasty Tadkaa</span></h1></li>
                </ul>

                <ul class="right hide-on-med-and-down">

                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
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



        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <section id="content">
            <div class="container"><br>
                <div class="row center">
                </div>

                <div class="row" >

                    <div class="col s12 l6 push-l2">
                        <ul id="projects-collection" class="collection">
                            <li class="collection-item avatar">
                                <i class="mdi-content-add circle light-blue darken-2"></i>
                                <span class="collection-header">Reset Password</span>


                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <form id="form" name="form" method="POST" action="" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="input-field col s12 l12">
                                                <input id="key" type="hidden" value="<?php echo $key; ?>">
                                                <input id="newPass" name="newPass" type="password" class="validate" required="">
                                                <label for="newPass">Enter New Password</label>
                                            </div>
                                            <div class="input-field col s12 l12">

                                                <input id="newPass1" name="newPass1" type="password" class="validate" required="">
                                                <label for="newPass1">Re-enter New Password</label>
                                            </div>








                                        </div>

                                        <div class="row">

                                            <div class="input-field col s12  center">
                                                <a class="btn red waves-effect waves-light right" onclick="change()">CHANGE</a>


                                            </div>

                                        </div>
                                    </form>
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
<footer class="page-footer" style="background-color: #444;margin-top: 200px">

    <div class="footer-copyright">
        <div class="container">
            Copyright © 2017 <a class="grey-text text-lighten-4" href="" target="_blank">TastyTadkaa</a> All rights reserved.
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://technomatesystems.com/">Technomate Systems</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->



<script type="text/javascript">

    var $image1,$image2;


    function change() {


            var key=$('#key').val();
            var newpass=$('#newPass').val();
            var newpass1=$('#newPass1').val();

          if(newpass!='' || newpass1!="") {

              if (newpass == newpass1) {

                  $.ajax({
                      url: 'reset.php',
                      type: 'POST',
                      data: {
                          'key': key,
                          'newpass':newpass,
                          'sub': 'yes'
                      },
                      success:function(result)//we got the response
                      {
                          result1=$.trim(result);
                          if(result1=="Password Changed")
                          {
                              alert("Password Changed! Login with new password");
                              window.location="index.php";
                          }


                      }


                  });

              }
              else {

                  alert('New Password Not Match with Re-entered Password');
                  $('#newPass').val('');
                  $('#newPass1').val('');
                  $('#newPass').focus();

              }
          }
          else
          {
              alert('Password should not be blank !');
              $('#newPass').val('');
              $('#newPass1').val('');
              $('#newPass').focus();
          }


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

