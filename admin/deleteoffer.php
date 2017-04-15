<?php


include_once('operations/config.php');

if($_POST['sub']==='yes')
{
	$id1=$_POST['id'];

	$query = "SELECT * FROM `offers` WHERE OfferID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $image  =mysql_fetch_array($result);
	@unlink('../'.$image['OfferImage']);
	

	$delete ="DELETE FROM `offers` WHERE OfferID='$id1'";
	$result =mysql_query($delete) or die(mysql_error());

	if($result)
	{
		echo "Offer Deleted Successfully";
	}
}

?>