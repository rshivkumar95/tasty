<?php

session_start();
include_once('config.php');
  echo "<h1 align='center' style='color:green;'>Payment Successfull | Order Placed !</h1>";

  $orderDate=date('Y-m-d');
	 $custID=$_SESSION['email'];
	 $offer=$_SESSION['offercode'];
	 $originalPrice=$_SESSION['ordertotal'];
	 $offerPrice=$_SESSION['finaltotal'];
	 $address=$_SESSION['address'];
	 //echo "$orderDate $custID $offer $originalPrice $offerPrice Placed";
      $query="INSERT INTO `orders`( `orderDate`, `custID`, `offer`, `originalPrice`, `offerPrice`,`deliveryAddress`,`status`) VALUES ('$orderDate','$custID','$offer','$originalPrice','$offerPrice','$address','Placed')";

      $result=mysql_query($query);

      $query="SELECT * FROM `orders` ORDER BY `Order_Id` DESC LIMIT 1";

      $result=mysql_query($query) or die(mysql_error());

      $data=mysql_fetch_assoc($result);
      $orderID=$data['Order_Id'];

      foreach ($_SESSION['cartrestaurant'] as $restID) 
      {

         
         $query="INSERT INTO `orderrest`(`orderID`, `restID`) VALUES ('$orderID','$restID')";
         $result=mysql_query($query) or die(mysql_error());
      }

      foreach ($_SESSION['cartitem'] as $key => $value) 
      {

      	 
      	 $query="INSERT INTO `orderitem`(`orderID`, `itemID`, `quant`) VALUES ('$orderID','$key','$value')";
      	 $result=mysql_query($query) or die(mysql_error());
      }

     unset($_SESSION['offercode']);
	 $_SESSION['ordertotal']="";
	 $_SESSION['finaltotal']="";
	 unset($_SESSION['cartrestaurant']);
	 unset($_SESSION['cartitem']);
	 unset($_SESSION['redirect']);
	 unset($_SESSION['offerdetails']);
	 
	 unset($_SESSION['address']);  

  unlink($_SESSION['success']);
  unlink($_SESSION['failed']);
  unset($_SESSION['success']);
  unset($_SESSION['failed']);

 header( "refresh:2;url=myaccount.php" );

?>

