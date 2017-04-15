<?php


include_once('config.php');

if($_POST['sub']==='yes')
{

   $email=$_POST['email'];
   
   $password=$_POST['password'];
   


  $query = "SELECT * FROM `customers` WHERE Email='$email' and Password='$password'";
    $result = mysql_query($query) or die(mysql_error());
    $rows=mysql_num_rows($result);

    if($rows==1)
    {
    	 echo "true";
       $_SESSION['email']=$email;
       $_SESSION['logged']=1;
    }
   else
   {
   	  
		  	echo "false";
		  
   }
}


if($_POST['sub']==='checklogin')
{
   if($_SESSION['logged']==1)
   {

      echo "true";
   }
  else
  {
    $_SESSION['link']="cart.php";
      $_SESSION['redirect']='true';
     echo "false";
  }

   

}



if($_POST['sub']==='takemeback')
{
   
  
      unset($_SESSION['link']);
      $_SESSION['redirect']='';
      echo "true";
  

   

}

if($_POST['sub']==='proceedaddress')
{           
      $_SESSION['redirect']='true';
      echo "true";
}


if($_POST['sub']==='confirmpayment')
{           
      $_SESSION['redirect']='payment';
       $_SESSION['address']=$_POST['address'];;
      echo "payment";
}


if($_POST['sub']==='takemebackpayment')
{
   
  
      
      $_SESSION['redirect']='true';
      echo "true";
  

   

}