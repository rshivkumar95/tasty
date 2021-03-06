<?php



session_start();
error_reporting(0);

if($_SESSION['loggedIn']==1)
{
    echo "<script type='text/javascript'>window.location='admin.php'</script>";
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

<!--script src="additem.js"></script-->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


<style type="text/css">
   @media only screen and (max-width: 768px) {
    .login {
          width:100%;
    }
  }


    


</style>

</head>

<body style="background:url('images/biryani.jpg')">
    <!-- Start Page Loading -->
    <!--div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div-->
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
   <!-- <header id="header" class="page-topbar">
        
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1">Tasty Tadkaa</a> <span class="logo-text">Tasty Tadkaa</span></h1></li>
                    </ul>
                    
                    
                    
                    
                </div>
            </nav>
        </div>
        
    </header>-->
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    

  <!--  <div class="wrapper" style="padding:50px;">      
           
  
            <div class="container login" style=" margin: 0 auto;background:#fff;border-radius: 10px 5px 10px 5px;box-shadow: 10px 10px 5px rgba(111, 111, 107, 0.31);padding:20px;">
                 <form id="form" name="form" method="POST" action="login.php">
                             <h4>Login</h4>
                             <p>Login with your username and password to access your dashboard</p>
                                              <div class="row">
                                                <div class="input-field col s12">
                                                  
                                                  <input id="username" name="username" type="text" class="validate" required="">
                                                  <label for="username">User Name</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12">
                                                  <input id="password" name="password" type="password" class="validate" required="">
                                                  <label for="password">Password</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                
                                                  <div class="input-field col s12">
                                                   <center>
                                                    <a class="btn red waves-effect waves-light" id="submit" onclick="login();">LOGIN</a> 
                                                    </center>                                    
                                                  </div>
                                               
                                              </div>
                                              <div class="row">
                                                
                                                  <div class="input-field col s12">
                                                   <center>
                                                    <a class="modal-trigger" href="#forget">Forgot Password ?</a> 
                                                    </center>                                    
                                                  </div>
                                               
                                              </div>

                  </form>
                
            </div>
            
</div> --> 


<div id="login-page" class="row" style="top:45px;position:relative;">
    <div class="col s12 l3 push-l4 z-depth-4 card-panel" style="border-radius:15px;">
      <form class="login-form" id="form" name="form" method="POST" action="login.php">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/TastyTadkastatic.png" alt="" style="width:180px;height:180px;" class="responsive-img valign">
            <p class="center login-form-text">Restaurants Login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username"  type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <a class="btn waves-effect waves-light col s12" id="submit" style="background-color:#f01b1b;" onclick="login();">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l12">
              <p class="margin center-align medium-small"><a class="modal-trigger" href="#forget">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>




            <!-- //////////////////////////////////////////////////////////////////////////// -->
           
            <!-- LEFT RIGHT SIDEBAR NAV-->

<div id="forget" class="modal fade">
      <form  method="POST" enctype="multipart/form-data">
                  <div class="modal-content">
                     <h4>Enter Registered Email</h4>
                     <p>Password Reset Link Will Be Sent To Your Registered Email ID.</p>

                              <div class="row">
                                                <div class="input-field col s12">
                                                  
                                                  <input id="email" name="email" type="email" class="validate" required="">
                                                  <label for="email">Email</label>
                                                </div>
                                              
                                                
                               </div>
                                              
                                              
                                              
                                              
                    
                                              
                               <div class="row" style="float:right">       
                                  
                                  <a onclick="forget();" class="waves-effect waves-green btn" >Send</a>
                                  
                                </div> 
                                      
                                           
                  </div>
                  
                  </form>
                </div>
        



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer" style="background-color: #444;bottom:0px;position:fixed;width:100%;">
        
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

           function forget()
           {

               var email=$('#email').val();

               if(email=="")
               {
                  alert('Enter Email First !');
                  $('#email').focus();
               }
               else
               {

                  $.ajax({
                          url: 'sendpass.php',
                          type: 'POST',
                          data: {
                          'emailid': email,
                          'sub': 'yes'
                          },
                         success:function(result)//we got the response
                         {
                              alert(result);

                         }
                         

                      })
               }

           }


           function login()
           {
              var username=$('#username').val();
              var password=$('#password').val();
              //alert('error');
              if(username!="")
              {
                     
                      
                      if(password!="")
                        {
                            $.ajax({
                          url: 'check.php',
                          type: 'POST',
                          data: {
                          'username': username,
                          'password':password,
                          'sub': 'yes'
                          },
                         success:function(result)//we got the response
                         {
                           //alert(result);
                            var result1=$.trim(result);
                             if(result1==='true')
                             {
                                alert('Login successful');
                                window.location="index.php";
                             }
                             if(result1==='false')
                             {
                               alert('Wrong username or password');
                               $('#username').val('');
                               $('#password').val('');
                               $('username').focus();
                             }
                         }
                         
                         

                        });
                              
                        }
                        else
                        {
                              alert('Enter password');
                              $('#password').focus();
                        }
              }
              else
              {

                 alert('Enter username');
                 $('#username').focus();
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