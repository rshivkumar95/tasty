<?php


include_once('operations/config.php');

if($_POST['sub']==='yes')
{
	$id1=$_POST['id'];

	$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $image  =mysql_fetch_array($result);
	@unlink('../'.$image['Restaurant_Image']);
	@unlink('../'.$image['Restaurant_Logo']);

	$delete ="DELETE FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
	$result =mysql_query($delete);

	if($result)
	{
		echo "Restaurant Deleted Successfully";
	}
}

?>