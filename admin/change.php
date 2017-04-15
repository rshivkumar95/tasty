<?php
 error_reporting(0);
 if($_POST['sub']=='yes')
 {
     include_once('operations/config.php');
      $username='rshivkumar';
      $oldpass=$_POST['oldPass'];
      $newpass=$_POST['newpass'];
      $query = "SELECT * FROM `admin` WHERE User_Name='$username' and Password='$oldpass'";
    $result = mysql_query($query) or die(mysql_error());
    $rows=mysql_num_rows($result);
    $data  =mysql_fetch_array($result);
    if($rows==1)
    {
       $query = "UPDATE `admin` SET Password='$newpass' WHERE User_Name='$username'";
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
