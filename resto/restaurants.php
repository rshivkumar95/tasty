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
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Admin Name</a>
                        <p class="user-roal">Admin</p>
                    </div>
                </div>
                </li>
                <li class="bold"><a href="admin.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> DASHBOARD</a>
                </li>
                <li class="bold active"><a href="restaurants.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>RESTAURANTS</a>
                </li>
                <li class="bold"><a href="ads.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>ADs</a>
                </li>
                <li class="bold"><a href="offers.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>OFFER</a>
                </li>
                <li class="bold"><a href="review.php" class="waves-effect waves-cyan"><i class="mdi-action-thumbs-up-down"></i>REVIEWS</a>
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
                   <div class="col s12 l12">
                      <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-content-add circle light-blue darken-2"></i>
                                        <span class="collection-header">Add Restaurant</span>
                                        <p>Add New Restaurant</p>
                                        
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <form id="form" name="form" method="POST" action="addrestaurant.php" enctype="multipart/form-data">
                                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                  
                                                  <input id="Restaurant_Name" name="Restaurant_Name" type="text" class="validate" required="">
                                                  <label for="Restaurant_Name">Restaurant Name</label>
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  
                                                  <input id="Restaurant_Hours" name="Restaurant_Hours" type="text" class="validate" required="">
                                                  <label for="Restaurant_Hours">Restaurant Hours</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                  
                                                  <textarea id="Restaurant_Address" name="Restaurant_Address" class="materialize-textarea" length="220" required=""></textarea>
                                                  <label for="Restaurant_Address">Restaurant Address</label>
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  
                                                  <textarea id="About_Restaurant" name="About_Restaurant" class="materialize-textarea" length="220" required=""></textarea>
                                                  <label for="About_Restaurant">About Restaurant</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12 l4">
                                                  
                                                  <input id="Delivery_fee" name="Delivery_fee" type="number" min=0 class="validate" required="">
                                                  <label for="Delivery_fee">Delivery Fee</label>
                                                </div>
                                              
                                                <div class="input-field col s12 l4">
                                                 <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Image</span>
                                                      <input  type="file" id="Restaurant_Image" name="Restaurant_Image" required="">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                              
                                                <div class="input-field col s12 l4">
                                                 <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Logo</span>
                                                      <input type="file" id="Restaurant_Logo" name="Restaurant_Logo" required="">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                   <select id="Rating" name="Rating"  class="validate" required="" style="z-index: 9999;">
                                                     <option class="disabled">Select Rating</option>
                                                     <option>1</option>
                                                     <option>2</option>
                                                     <option>3</option>
                                                     <option>4</option>
                                                     <option>5</option>
                                                   </select>                          
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  
                                                  <input id="email" name="email" type="email"  class="validate" required="">
                                                  <label for="email"></label>  
                                                  
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <input id="Username" name="Username" type="text"  class="validate" required="">
                                                  <label for="Username">Username</label>
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  <input id="Password" name="Password" type="password"  class="validate" required="">
                                                  <label for="Password">Password</label>
                                                </div>
                                              </div>
                                              <div class="row">
                                                
                                                  <div class="input-field col s12 l6">
                                                    <input class="btn red waves-effect waves-light right" id="submit" type="submit" name="submit" value="ADD">
                                                    
                                                      
                                                  </div>
                                               
                                              </div>
                                           </form>
                                        </div>
                                    </li>    
                                </ul>
                   </div>
                   

                   <div id="restaurant-data" class="container">
                      
                      <div class="row">

                      <?php

                        include_once('operations/config.php');

                        $query = "SELECT * FROM `restaurant_info`";
                                              $result = mysql_query($query) or die(mysql_error());
                                        

                                        //foreach($result as $obj)
                                              while ($obj = mysql_fetch_array($result))
                                        {    

                      ?>

                      <!-- CUSTOM CREATED BLOCK -->
                          <div class="col s12 l4">

                              <div style="background-image: url(<?php echo $obj['Restaurant_Image']; ?>);padding: 10px;background-size:100%;">

                                   <div class="row">
                                      <div class="col s4 l4" style="margin-right: 0px;padding-right:0px; ">
                                           <img src="<?php echo $obj['Restaurant_Logo']; ?>" style="height:70px;width:70px;border:1px solid black;border-radius: 10px 10px 10px 10px;">
                                      </div>
                                      <div class="col s8 l8" style="margin-left: 0px;padding-left:0px; ">
                                           <p style="color: white;"><strong><?php echo $obj['Restaurant_Name']; ?></strong></p>
                                           <p align="left" style="color: white;"><?php echo $obj['About_Restaurant']; ?></p>
                                      </div>

                                   </div>
                                   
                                
                              </div>
                              <div >

                                 <div style="border:1px solid black;border-radius: 0px 0px 10px 10px;background: #fff;padding: 10px;">
                                   
                                           <div class="row">
                                               <div class="col s6 l6">
                                                   <strong>Restaurant Hours :</strong><br><?php echo $obj['Restaurant_Hours']; ?>
                                               </div>
                                               <div class="col s6 l6">
                                                   <strong>Delivery Fee :</strong><br><?php echo $obj['Delivery_fee']; ?>
                                               </div>
                                           </div>
                                           <div class="row" style="padding: 10px;height: 100px;width:100%;overflow-y: scroll;">
                                                
                                                  <p> <STRONG>Address :</STRONG><?php echo $obj['Restaurant_Address']; ?></p>
                                           </div>
                                           <div class="row" style="padding: 10px;">
                                                <strong>Ratings:</strong><br>
                                                <?php
                                                          $rating=$obj['Rating'];
                                                          $i=1;
                                                          for($i=1;$i<=$rating;$i++)
                                                          {
                                                             echo "<i class='mdi-action-star-rate small'></i>";
                                                          }
                                                ?>
                                                
                                           </div>

                                           <div class="row center">
                                                  <div class="col s6 l6">
                                                      <a class="btn red waves-effect waves-light" onclick="return update1(<?php echo $obj['Restaurant_ID']; ?>)" >UPDATE</a> 
                                                  </div>
                                                  <div class="col s6 l6">
                                                       <a class="btn red waves-effect waves-light" onclick="return delete1(<?php echo $obj['Restaurant_ID']; ?>)">DELETE</a>  
                                                  </div>
                                           </div>

                                 </div>
                                     

                                   </div>

                          </div>

                       <!-- CUSTOM CREATED BLOCK -->

                       <?php


                          }

                      ?>

                      </div>



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

   <div id="update" class="modal fade">
      <form  method="POST" action="restaurantData.php" enctype="multipart/form-data">
                  <div class="modal-content">
                    
                                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                  <input id="Restaurant_ID1" name="Restaurant_ID1"  type="hidden" >

                                                  <input id="Restaurant_Name1" name="Restaurant_Name1" type="text" class="validate" required="">
                                                  
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  
                                                  <input id="Restaurant_Hours1" name="Restaurant_Hours1" type="text" class="validate" required="">
                                                  
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                  
                                                  <textarea id="Restaurant_Address1" name="Restaurant_Address1" class="materialize-textarea" length="220" required=""></textarea>
                                                  
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  
                                                  <textarea id="About_Restaurant1" name="About_Restaurant1" class="materialize-textarea" length="220" required=""></textarea>
                                                  
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12 l4">
                                                  
                                                  <input id="Delivery_fee1" name="Delivery_fee1" type="number" min=0 class="validate" required="">
                                                  
                                                </div>
                                              
                                                <div class="input-field col s12 l4">
                                                 <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Image</span>
                                                      <input  type="file" id="Restaurant_Image1" name="Restaurant_Image1" >
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                              
                                                <div class="input-field col s12 l4">
                                                 <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Logo</span>
                                                      <input type="file" id="Restaurant_Logo1" name="Restaurant_Logo1">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="input-field col s12 l4">
                                                   <select id="Rating1" name="Rating1"  class="validate" required="" style="z-index: 9999;">
                                                    
                                                     <option>1</option>
                                                     <option>2</option>
                                                     <option>3</option>
                                                     <option>4</option>
                                                     <option>5</option>
                                                   </select>                          
                                                </div>
                                                <div class="input-field col s12 l4">
                                                  
                                                  <input id="email1" name="email1" type="email" min=0 class="validate" required="">
                                                  
                                                </div>
                                             
                                              
                                              </div>
                               <div style="float:right">       
                                  
                                  <input type="submit" name="update" class="waves-effect waves-green btn modal-action modal-close" value="update"> 
                                  <a onclick="return cancel();" class="waves-effect waves-green btn modal-action modal-close">CANCEL</a>
                                </div> 
                                      
                                           
                  </div>
                  
                  </form>
                </div>


    <!-- START FOOTER -->
    <footer class="page-footer" style="background-color: #444;">
        
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

           function delete1($var)
           {
                if(confirm('Are You Sure ?'))
                {
                     $.ajax({
                          url: 'deleterestaurant.php',
                          type: 'POST',
                          data: {
                          'id': $var,
                          'sub': 'yes'
                          },
                         success:function(result)//we got the response
                         {
                             alert('Restaurant Removed');
                         }


                      })
                     
                     window.location='restaurants.php';
                }
           }

           function update1($var)
           {                    
                   $.ajax({
                          url: 'restaurantData.php',
                          type: 'POST',
                          dataType: 'json',
                          data: {
                          'id': $var,
                          'sub': 'restaurant'
                          },
                         success:function(result)//we got the response
                         {
                             //alert(result[1]);
                            $('#update').openModal();
                              $('#Restaurant_ID1').val(result[0]);
                              $('#Restaurant_Name1').val(result[1]);
                              $('#Restaurant_Hours1').val(result[2]);
                              $('#Restaurant_Address1').val(result[3]);
                              $('#About_Restaurant1').val(result[4]);
                              $('#Delivery_fee1').val(result[5]);
                              $image1=result[6];
                              $image2=result[7];
                              
                              //$('#Rating1').val(result[8]);
                              $('#Rating1 option').each(function(){
                                  if ($(this).text() == result[8]){
                                   $(this).attr("selected","selected");
                                    $('#Rating1').material_select();
                                  }
                              });
                              $('#email1').val(result[9]);
                         },
                         error:function(exception){alert('Exeption:'+exception['responseText']);}


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