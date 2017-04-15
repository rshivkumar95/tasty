<?php


include_once('config.php');

if(trim($_POST['sub'])==='offers')
{
    $email=$_SESSION['email'];

	$id1=$_POST['id'];
     $query = "SELECT * FROM `offers` WHERE `OfferID`='$id1'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);
     //var_dump($data);
    $max=$data['MaxUse'];
    $MinBalance=$data['MinBalance'];

    $query = "SELECT orders.custID,COUNT(*) as totaluse from orders where orders.offer=ANY (SELECT offers.OfferCode from offers WHERE offers.OfferID='$id1') and orders.custID='$email'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());

    $data1=mysql_fetch_assoc($result);

    //echo $data1['totaluse'];
    if($data1['totaluse']>$max)
    {
    	echo json_encode("Max usage limit exceeded for this coupon | Try Another !");
    }
    else
    {
    	if($MinBalance>$_SESSION['ordertotal'])
    	{
    		echo json_encode("Invalid coupon | Order total is less than Min Balance !");
    	}
    	else
    	{
    		echo json_encode($data);
    		//echo json_encode("Valid");
    	}
    	

    }

}





if(trim($_POST['sub'])==='offerstxt')
{
    $email=$_SESSION['email'];
	$id1=$_POST['OfferCode'];
     $query = "SELECT * FROM `offers` WHERE `OfferCode`='$id1'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    if(mysql_num_rows($result)>0)
    { 	

    $id=$data['OfferID'];
    $max=$data['MaxUse'];
    $MinBalance=$data['MinBalance'];

    $query = "SELECT count(*) as totaluse FROM `orders` WHERE `Offer`='$id' and `custID`='$email'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());

    $data1=mysql_fetch_assoc($result);


    if($data1['totaluse']>=$max)
    {
    	echo json_encode("Max usage limit exceeded for this coupon | Try Another !");
    }
    else
    {
    	if($MinBalance>$_SESSION['ordertotal'])
    	{
    		echo json_encode("Invalid coupon | Order total is less than Min Balance !");
    	}
    	else
    	{
    		echo json_encode($data);
    		//echo json_encode("Valid");
    	}
    	

    }
   }
   else
   {
   	   echo json_encode("no");
   }

}


if(trim($_POST['sub'])==='viewoffer')
{
	$id1=$_POST['id'];
     $query = "SELECT * FROM `offers` WHERE `OfferID`='$id1'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    echo json_encode($data);
	

}