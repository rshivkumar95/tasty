<?php

include('config.php');
//$_SESSION['test']=4;





if($_POST['sub']=='add')
{
    $item = $_POST['itemid'];
	if($_SESSION['logged']==1)
	{
		$email=$_SESSION['email'];
        $query="SELECT * FROM `wishlist` WHERE `email`='$email' and `prodID`='$item'";
        $result=mysql_query($query);

        if(mysql_num_rows($result)==0)
        {
        	$query="INSERT INTO `wishlist`(`email`, `prodID`) VALUES ('$email','$item')";
        	$result=mysql_query($query);
        	if($result)
        	 echo "Item Added To wishlist !";
        	else
        		echo mysql_error();
        }
        else
        {
           echo "Item already present in wishlist !";	
        }
	}
	else
	{
		echo "no loggedin";
	}
		
}

