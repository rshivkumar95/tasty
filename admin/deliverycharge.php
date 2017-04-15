<?php



include_once('config.php');


if(isset($_POST['submit']))
{

	$minOrder=$_POST['minOrder'];
	$maxOrder=$_POST['maxOrder'];


	$query="UPDATE `minmaxorder` SET `MinOrder`='$minOrder',`MaxOrder`='$maxOrder'";
	$result=mysql_query($query);

	$minRange1=$_POST['minRange1'];
	$minRange2=$_POST['minRange2'];
	$maxRange1=$_POST['maxRange1'];
	$maxRange2=$_POST['maxRange2'];
	$charge1=$_POST['charge1'];
	$charge2=$_POST['charge2'];

	$query="UPDATE `orderrange` SET `min`='$minRange1',`max`='$maxRange1',`charge`='$charge1' WHERE `id`=1";
	$result=mysql_query($query);

	$query="UPDATE `orderrange` SET `min`='$minRange2',`max`='$maxRange2',`charge`='$charge2' WHERE `id`=2";
	$result=mysql_query($query);

	 echo "<script type='text/javascript'>alert('Delivery Charges Updated !'); window.location.href='delivery.php';</script>";   
}