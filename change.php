<?php
session_start();
 error_reporting(0);
 if($_POST['sub']=='yes')
 {

     include_once('config.php');
      $email=$_SESSION['email'];
      $oldpass=$_POST['oldPass'];


      $newpass=$_POST['newpass'];
$query = "SELECT * FROM `customers` WHERE `Email`='$email' and `Password`='$oldpass'";
$result = mysql_query($query) or die(mysql_error());
$rows=mysql_num_rows($result);
$data  =mysql_fetch_array($result);

    if($rows==1)
    {
       $query = "UPDATE `customers` SET Password='$newpass' WHERE Email='$email'";
       $result = mysql_query($query) or die(mysql_error());

       if($result)
       {
         echo "Password Changed";
       }
    }
    else
    {
      echo "Old Password Not Match";
    }

 }



 ?>   
