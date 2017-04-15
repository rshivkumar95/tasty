<?php


include_once('config.php');

if($_POST['sub']==='yes')
{

   $email=$_POST['email'];
   $name=$_POST['name'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $address=$_POST['address'];
   $temppass=md5($mobile).'-'.md5($email);


  $query = "SELECT * FROM `customers` WHERE Email='$email'";
    $result = mysql_query($query) or die(mysql_error());
    $rows=mysql_num_rows($result);

    if($rows>0)
    {
    	 echo "false";
    }
   else
   {
   	  $query = "INSERT INTO `customers` ( `CustomerName`, `CustomerAddress`, `MobileNo`, `Email`, `Password`, `temppass`) VALUES ('$name','$address','$mobile','$email','$password','$temppass')";  
		$res = mysql_query($query) or die(mysql_error());
		if($res)
		  {     
			 echo "true";                                        
		  }
		  else
		  {
		  	echo mysql_error();
		  }
   }
}
