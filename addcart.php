<?php

include('config.php');
//$_SESSION['test']=4;



if($_POST['sub']=='check')
{
	$item = $_POST['itemid'];
	$restaurant=$_POST['restid'];

	if(in_array($restaurant, $_SESSION['cartrestaurant']))
	{
          if(in_array($item, $_SESSION['cartitem']))
			{
		         echo "Item Already Added in Cart !";
			}
			else
			{
				echo "no";
			}
	}
	else if(empty($_SESSION['cartrestaurant']))
	{
		echo "empty";
	}
	else
	{
		echo "no restaurant";
	}	
}

if($_POST['sub']=='add')
{
	$item = $_POST['itemid'];
	$restaurant=$_POST['restid'];

	if(!in_array($restaurant, $_SESSION['cartrestaurant']))
	{
          array_push($_SESSION['cartrestaurant'], $restaurant);
         
	}
	//array_push($_SESSION['cartitem'], $item);
	$_SESSION['cartitem'][$item]=1;
	echo "added";
}

