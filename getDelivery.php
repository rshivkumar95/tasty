<?php

include_once('config.php');

if(trim($_POST['sub'])==='delivery')
{

	$order=$_POST['order'];

    $query="SELECT * FROM `minmaxorder`";
    $result=mysql_query($query);
    $data=mysql_fetch_assoc($result);

    $minOrder=$data['MinOrder'];
    $maxOrder=$data['MaxOrder'];




    if($order<$minOrder)
    {
    	echo "less";
    	$_SESSION['delivery']=$charge;
    }
    else if($order>=$maxOrder)
    {
    	echo 0;
    } 
    else
    {
         $query="SELECT * FROM `orderrange` WHERE '$order'>`min` and '$order'<`max`;";
    	 $result=mysql_query($query);
    	 $data=mysql_fetch_assoc($result);	
    	 $charge=$data['charge'];
    	 $_SESSION['delivery']=$charge;
    	 echo $charge;
    }   
}