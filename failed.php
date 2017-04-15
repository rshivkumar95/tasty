<?php

session_start();

  echo "<h1 align='center' style='color:red;'>Payment UnSuccessfull</h1>";  

  

  unset($_SESSION['offercode']);
	 $_SESSION['ordertotal']="";
	 $_SESSION['finaltotal']="";
	 
	 unset($_SESSION['redirect']);
	 unset($_SESSION['offerdetails']);
	 
	 unset($_SESSION['address']);

	 unlink($_SESSION['success']);
  unlink($_SESSION['failed']);
  unset($_SESSION['success']);
  unset($_SESSION['failed']);

 header( "refresh:2;url=cart.php" );

?>

