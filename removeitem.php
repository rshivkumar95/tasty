<?php


include('config.php');

if(trim($_POST['sub'])==='remove')
{

    $item=$_POST['itemid'];
    

    unset($_SESSION['cartitem'][$item]);
    $rest=$_SESSION['cartrestaurant'];
    if(isset($_SESSION['cartitem'][$item]))
    {
    	echo "Error In Removing !";
    }
    else
    {

    	

		$cart=$_SESSION['cartitem'];

		 //var_dump($rest);
		 $i=0;
		foreach ($rest as $re) {
	     //echo $re;

	        $flag=0;
			$query="SELECT `Item_Id` FROM `restaurant_menu` WHERE `Restaurant_Id`='$re'";

			$result=mysql_query($query) or die(mysql_error());


			$items=array();

			while ($obj=mysql_fetch_assoc($result)) 
			{
				# code...

				array_push($items, $obj['Item_Id']);

			}

			if(empty($cart))
			{
				unset($rest);
			}

			foreach ($cart as $key => $value) 
			{
				
				if(in_array($key, $items))
				{
					//$flag=0;
					//echo "restaurant Present";
					$flag='0';
					break;
				}
				else
				{
					 //echo "No Item";
					 $flag='1';
					 //echo $flag;
				}
			}

			//echo "i chi Value".$i;
			//echo "flag chi value".$flag;
			if($flag=='1')
			{
				//echo $i;
				//echo $rest[$i];
		  	  unset($rest[$i]);
			}
			$flag=0;

			$i=$i+1;
						//print_r($items);
			}

			//var_dump($rest);

			$rest=array_values($rest);

			$_SESSION['cartrestaurant']=$rest;

    	echo "Item removed from Cart !";


    }
    

}
