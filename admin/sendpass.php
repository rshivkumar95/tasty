<?php

include_once('operations/config.php');
if($_POST['sub']=='yes')
{
	  $email=$_POST['emailid'];

	  $query="SELECT * FROM `admin` WHERE email='$email'";

	  $result = mysql_query($query) or die(mysql_error());
      $rows=mysql_num_rows($result);
      $data  =mysql_fetch_array($result);
      if($rows==1)
      {
          $temppass=md5($email)."-".md5($data['User_Name']);
          $query="UPDATE `admin` SET temppass='$temppass' WHERE email='$email'";
          $result = mysql_query($query) or die(mysql_error());

          $to = $email;
          $subject = "Password Reset Request on Tasty Tadkaa";
          $txt = "Click on Below link to reset your Password <br> "."resetpassword.php?request=".$temppass;
          $headers = "From: no-reply@tastytadkaa.com" . "\r\n";

          mail($to,$subject,$txt,$headers);

          echo "Password Reset Link is Sent to Your Registered Mail ID";

      }
      else
      {
          echo "Email Address is Not Registered";
      }

}



?>