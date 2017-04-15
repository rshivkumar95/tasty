<?php


include_once('operations/config.php');

if($_POST['sub']==='yes')
{
	$id1=$_POST['id'];

	
	

	$delete ="DELETE FROM `reviews` WHERE reviewID='$id1'";
	$result =mysql_query($delete) or die(mysql_error());

	if($result)
	{
		echo "Review Deleted Successfully";
	}
}

?>