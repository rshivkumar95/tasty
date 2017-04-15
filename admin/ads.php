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
    <script>
    $( document ).ready(function() {

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
                
                
            }
        });         
    }
    //$('select').material_select();
    getAll();

        var _URL = window.URL || window.webkitURL;
        $("#ADImage").change(function(){

     
        var file, img;
          if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {

                   var adtype=$('#ADType').val();

                   if(adtype=='Horizontal')
                   {
                    if(this.width!=870 || this.height!=134)
                    {
                      alert("Image Dimension must be 870X134 !");
                      $(this).val('');
                      $('#filepath').val('');
                    }
                   }
                   if(adtype=='Boxed')
                   {
                    if(this.width!=270 || this.height!=192)
                    {
                      alert("Image Dimension must be 270X192 !");
                      //this.val('');
                      $(this).val('');
                      $('#filepath').val('');
                    }
                   }
                   if(adtype=='Banner')
                   {
                    if(this.width!=1170 || this.height!=446)
                    {
                      alert("Image Dimension must be 1170X498 !");
                      //this.val('');
                      $(this).val('');
                      $('#filepath').val('');
                    }
                   }

                   if(adtype=='Select AD Type')
                   {
                    
                      alert("Please Select AD Type First");
                      //this.val('');
                      $(this).val('');
                      $('#filepath').val('');


                    
                   }
                };
                img.src = _URL.createObjectURL(file);
          }

         });


        var _URL = window.URL || window.webkitURL;
        $("#ADImage1").change(function(){

     
        var file, img;
          if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {

                   var adtype=$('#ADType1').val();

                   if(adtype=='Horizontal')
                   {
                    if(this.width!=870 || this.height!=134)
                    {
                      alert("Image Dimension must be 870X134 !");
                      //this.val('');
                      $(this).val('');
                      $('#filepath1').val('');
                    }
                   }
                   if(adtype=='Boxed')
                   {
                    if(this.width!=270 || this.height!=192)
                    {
                      alert("Image Dimension must be 270X192 !");
                      //this.val('');
                      $(this).val('');
                      $('#filepath1').val('');
                    }
                   }
                   if(adtype=='Banner')
                   {
                    if(this.width!=1170 || this.height!=446)
                    {
                      alert("Image Dimension must be 1170X498 !");
                      //this.val('');
                      $(this).val('');
                      $('#filepath1').val('');
                    }
                   }

                   if(adtype=='Select AD Type')
                   {
                    
                      alert("Please Select AD Type First");
                      //this.val('');
                      $(this).val('');
                      $('#filepath1').val('');


                    
                   }
                };
                img.src = _URL.createObjectURL(file);
          }

         });


    });

    
 
    

    
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
                <li class="bold"><a href="restaurants.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>RESTAURANTS</a>
                </li>
                <li class="bold  active"><a href="ads.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>ADs</a>
                </li>
                <li class="bold"><a href="offers.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>OFFER</a>
                </li>
                <li class="bold"><a href="delivery.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>DELIVERY CHARGES</a>
                </li>
                <li class="bold"><a href="orders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>ORDERS</a>
                </li>
                 <li class="bold"><a href="dailyorders.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment"></i>DAILY ORDERS</a>
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

            <section id="content" style="background-image:url('images/biryani.jpg')">
              <div class="container"><br>
              <div class="row center">
              </div>
               <div class="row">
                   <div class="col s12 l6 push-l3">
                      <ul id="projects-collection" class="collection" style="border-radius:25px;">
                                   
                                        <li class="collection-item avatar" style="background-image:url('images/back.jpg')">
  
                                       
										<h4 style="color:red;"><center>ADD NEW ADDS</center></h4>
                                        </li>
                                  
                                    <li class="collection-item">
                                        <div class="row">
                                            <form id="form" name="form" method="POST" action="addnewad.php" enctype="multipart/form-data">
                                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                  
                                                  <input id="ADTitle" name="ADTitle" type="text" class="validate" required="">
                                                  <label for="ADTitle">AD Title</label>
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  
                                                  <select id="ADType" name="ADType"  class="validate" required="" style="z-index: 9999;">
                                                     <option class="disabled">Select AD Type</option>
                                                     <option>Horizontal</option>
                                                     <option>Boxed</option>
                                                     <option>Banner</option>                                                        
                                                   </select> 
                                                </div>
                                              </div>
                                              
                                              <div class="row">
                                                
                                              
                                                <div class="input-field col s12 l6">
                                                 <div class="file-field input-field">
                                                    <div class="btn red">
                                                      <span>Image</span>
                                                      <input type="file" id="ADImage" name="ADImage" required="">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input id="filepath" class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>


                                              
                                                <div class="input-field col s12 l6">
                                                      <select id="ADStatus" name="ADStatus"  class="validate" required="" style="z-index: 9999;">
                                                     <option disabled="">AD Status</option>
                                                     <option>Active</option>
                                                     <option>De-Active</option>                                                     
                                                   </select> 
                                                </div>
                                              </div>
                                              <div class="row">
                                                 <div class="input-field col s12 l6">
                                                      <input id="ADPriority" type="number" name="ADPriority" min="0" required="">
                                                      <label for="ADPriority">Enter Priority</label>
                                                </div>
                                                
                                              </div>
                                              
                                              <div class="row">
                                                
                                                  <div class="input-field col s12 l7">
                                                    <input class="btn red waves-effect waves-light right" id="submit" type="submit" name="submit" value="ADD">
                                                    
                                                      
                                                  </div>
                                               
                                              </div>
                                           </form>
                                        </div>
                                    </li>    
                                </ul><br><br>
                   </div>
                   

                   <div id="restaurant-data" class="container" style="margin-bottom:50px;">
                      
                      <div class="row">


                      <?php

                        include_once('operations/config.php');

                        $query = "SELECT * FROM `ads`";
                                              $result = mysql_query($query) or die(mysql_error());
                                        

                                        //foreach($result as $obj)
                                              while ($obj = mysql_fetch_array($result))
                                        {    

                      ?>
					
                      <!-- CUSTOM CREATED BLOCK -->
                           <div class="col s12 l12">
                                     
                              <div class="row hoverable" style="padding: 15px;border-radius:25px;background:white;">
                                  <div class="col s12 l2">
                                        <h6><strong><?php echo $obj['ADTitle']; ?></strong></h6>
                                  </div>
                                  <div class="col s12 l2">
                                        <h6><?php echo $obj['ADType']; ?></h6>
                                  </div>
                                  <div class="col s12 l3">
                                        <img src="<?php echo '../'.$obj['ADImage']; ?>" class="responsive-img">
                                  </div>
                                  <div class="col s6 l2">
                                        <h6><?php echo $obj['ADStatus']; ?></h6>
                                  </div>
                                  <div class="col s6 l1">
                                        <h6><?php echo $obj['ADPriority']; ?></h6>
                                  </div>
                                  <div class="col s6 l1">
                                        <a onclick="update1(<?php echo $obj['ADID']; ?>);" class="btn-floating btn-large waves-effect waves-light pink tooltipped" data-position="top" data-delay="50" data-tooltip="UPDATE"><i class="mdi-action-autorenew"></i></a>
                                  </div>
                                  <div class="col s6 l1">
                                        <a onclick="return delete1(<?php echo $obj['ADID']; ?>)" class="btn-floating btn-large waves-effect waves-light pink tooltipped" data-position="top" data-delay="50" data-tooltip="DELETE"><i class="mdi-action-delete"></i></a>
                                  </div>
                              </div>
							<br>
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



    <!-- 
     -->


   <div id="update" class="modal fade" style="border-radius:25px;">
      <form  method="POST" action="AdData.php" enctype="multipart/form-data">
                  <div class="modal-content">
                            <h3 class="center">Update ADs</h3>
                            <p class="center">(If you don't want to change image then leave image field blank.)</p>
                              <div class="row">
                                                <div class="input-field col s12 l6">
                                                  <input type="hidden" name="ADID1" id="ADID1">
                                                  <input id="ADTitle1" name="ADTitle1" type="text" class="validate" required="">
                                                  
                                                </div>
                                              
                                                <div class="input-field col s12 l6">
                                                  
                                                  <select id="ADType1" name="ADType1"  class="validate" required="" style="z-index: 9999;">
                                                     <option class="disabled">Select AD Type</option>
                                                     <option value="Horizontal">Horizontal</option>
                                                     <option value="Boxed">Boxed</option>
                                                     <option value="Banner">Banner</option>                                                     
                                                   </select> 
                                                </div>
                                              </div>
                                              
                                              <div class="row">
                                                
                                              
                                                <div class="input-field col s12 l6">
                                                 <div class="file-field input-field">
                                                    <div class="btn red">
                                                      <span>Image</span>
                                                      <input type="file" id="ADImage1" name="ADImage1">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input id="filepath1" class="file-path validate" type="text">
                                                    </div>
                                                  </div>
                                                </div>


                                              
                                                <div class="input-field col s12 l6">
                                                      <select id="ADStatus1" name="ADStatus1"  class="validate" required="" style="z-index: 9999;">
                                                     <option disabled="disabled">AD Status</option>
                                                     <option value="Active">Active</option>
                                                     <option value="De-Active">De-Active</option>                                                     
                                                   </select> 
                                                </div>
                                              </div>
                                               <div class="row">
                                                 <div class="input-field col s12 l6">
                                                      <input id="ADPriority1" type="number" name="ADPriority1" min="0" required="">
                                                     
                                                </div>
                                                
                                              </div>
                                              
                                              
                    
                                              
                                 <div class="row">
                                                <div class="input-field col s12 l4" style="float:right">
                                   
                                  
                                  <input type="submit" name="update" class="waves-effect waves-green btn red" value="update"> 
                                </div>
                                 <div class="input-field col s12 l4" style="float:right">
                                  <a onclick="return cancel();" class="waves-effect waves-green btn modal-action modal-close red">CANCEL</a>
                               
                                 </div>
                                 </div>     
                                           
                  </div>
                  
                  </form>
                </div>


    <!-- START FOOTER -->
    <footer class="page-footer" style="background-color: #444;bottom:0px;position:fixed;width:100%;">
        
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
                          url: 'deletead.php',
                          type: 'POST',
                          data: {
                          'id': $var,
                          'sub': 'yes'
                          },
                         success:function(result)//we got the response
                         {
                             alert('AD Removed');
                         }
                         

                      })
                     
                     window.location='ads.php';
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
                          'sub': 'ads'
                          },
                         success:function(result)//we got the response
                         {
                             
                              $('#update').openModal();
                              $('#ADID1').val(result[0]);
                              $('#ADTitle1').val(result[1]);
                              //var optionValue  = localStorage.getItem(result[2]);
                             // $("#ADType1").find("option[value='Horizontal]'").attr('selected', true);
                             //$('#ADType1 option:contains('+trim(result[2])+')').prop('selected',true);
                            /* $("#ADType1 option").each(function(){
                                if ($(this).text() == "Horizontal")
                                  $(this).attr("selected","selected");
                              });*/
                              $('#ADType1 option').each(function(){
                                  if ($(this).text() == result[2]){
                                   $(this).attr("selected","selected");
                                    $('#ADType1').material_select();
                                  }
                              });

                              $('#ADStatus1 option').each(function(){

                                  if ($(this).text() == result[4]){
                                   $(this).attr("selected","selected");
                                    $('#ADStatus1').material_select();
                                  }
                              });

                              $('#ADPriority1').val(result[5]);
                             
                              
                                                                                  
                         },
                         error:function(exception){alert('Exception:'+exception.responseText);}


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