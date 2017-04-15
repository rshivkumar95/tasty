<?php

session_start();
error_reporting(0);


if($_SESSION['loggedIn']===1)
{
    echo "<script type='text/javascript'>window.location='admin.php'</script>";
}
else
{
	$_SESSION['loggedIn']=0;
   echo "<script type='text/javascript'>window.location='login.php'</script>";
}



?>

