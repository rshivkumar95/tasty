<?php

session_start();
error_reporting(0);

if($_SESSION['loggedIn']===1)
{
    echo "<script type='text/javascript'>window.location='dashboard.php'</script>";
}
else
{
   echo "<script type='text/javascript'>window.location='login.php'</script>";
}



?>

