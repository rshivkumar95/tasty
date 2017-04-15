<?php


	include_once('config.php');

$result=mysql_query("SELECT Order_Id as orderid from orders ORDER BY Order_Id DESC LIMIT 1") or die(mysql_error());

$data=mysql_fetch_assoc($result);

//var_dump($_SESSION);

$custID=$_SESSION['email'];

$result1=mysql_query("SELECT * from customers WHERE Email='$custID'") or die(mysql_error());

$data1=mysql_fetch_assoc($result1);

$fname=split(" ",$data1['CustomerName']);

$firstname= $fname[0];
$phone=$data1['MobileNo'];

$orderID=$data['orderid']+1;
//echo $orderID;



$successfile=md5(rand()).".php";
$failedfile=md5(rand()).".php";

$_SESSION['success']=$successfile;
$_SESSION['failed']=$failedfile;


$code="<?php include_once(\"success.php\")  ?>";
file_put_contents($successfile, $code);
$code1="<?php include_once(\"failed.php\")  ?>";
file_put_contents($failedfile, $code1);

//$key="WEkfABby";
//$salt="ecB7edKL6Y";
$key="WEkfABby";
$salt="ecB7edKL6Y";
$productInfo="TastyTadkaa";

$hashseq=$key."|".$orderID."|".$_SESSION['finaltotal']."|".$productInfo."|".$firstname."|".$_SESSION['email']."|||||||||||".$salt;

$hash=strtolower(hash("sha512",$hashseq));


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <script type="text/javascript">
		function submitForm() { 
   // **NOTE** set form values first
   var hash="<?php echo $hash; ?>";

   if(hash=='')
   	{
   		return;
   	}
   //document.getElementById('payuForm').submit();
   alert('Shiva');
}
window.onload = submitForm;
	

  </script>
</head>
<body onload="javascript:submitPayuForm()">
	<form name="payuForm" id="payuForm" action="https://secure.payu.in/_payment" method="POST">
	
	 <input type="hidden" name="key" value="WEkfABby">
	 <input type="hidden" name="hash" value="<?php echo $hash; ?>">
	 <input type="hidden" name="txnid" value="<?php echo $orderID; ?>">
	 <input type="hidden" name="amount" value="<?php echo $_SESSION['finaltotal']; ?>">
	 <input type="hidden" name="firstname" value="<?php echo $firstname;  ?>">
	 <input type="hidden" name="email" value="<?php echo $custID;  ?>">
	 <input type="hidden" name="phone" value="<?php echo $phone;  ?>">
	 <input type="hidden" name="productinfo" value="<?php echo $productInfo; ?>">
	 <input type="hidden" name="surl" value="<?php echo 'http://localhost/td/'.$successfile; ?>">
	 <input type="hidden" name="furl" value="<?php echo 'https://localhost/td/'.$failedfile; ?>">
	 <input type="hidden" name="service_provider" value="payu_paisa" />

	

</form>

</body>
</html>
