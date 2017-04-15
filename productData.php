<?php


include_once('config.php');

if(trim($_POST['sub'])==='products')
{
	$id1=$_POST['id'];
     $query = "SELECT * FROM `restaurant_menu` WHERE `Item_Id`='$id1'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    echo json_encode($data);
	

}