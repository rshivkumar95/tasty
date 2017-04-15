

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <script type="text/javascript">
		function submitPayuForm() { 
   // **NOTE** set form values first
   
   //document.getElementById('payuForm').submit();
   alert('Shiva');
}
window.onload = submitForm;
	

  </script>
</head>
<body onload="submitPayuForm()">
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
