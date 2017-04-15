<?php


include_once('operations/config.php');

if($_POST['sub']==='yes')
{
	$id1=$_POST['id'];

	$query = "SELECT * FROM `ads` WHERE ADID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $image  =mysql_fetch_array($result);
	@unlink($image['ADImage']);
	

	$delete ="DELETE FROM `ads` WHERE ADID='$id1'";
	$result =mysql_query($delete) or die(mysql_error());

	if($result)
	{
		echo "AD Deleted Successfully";
	}
}

?>