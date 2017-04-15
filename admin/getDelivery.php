<?php

include_once('config.php');
if(trim($_POST['data'])==='first')
{
	$query="SELECT * FROM `minmaxorder`";
	$result=mysql_query($query);
	$data=mysql_fetch_array($result);

	echo json_encode($data);
}



if(trim($_POST['data'])==='second')
{
	$query="SELECT * FROM `orderrange`";
	$result=mysql_query($query);
	
	$range = array();
	
	$i=1;
	while($data=mysql_fetch_array($result))
	{
         $range['min'.$i]=$data['min'];
         $range['max'.$i]=$data['max'];
         $range['charge'.$i]=$data['charge'];
         $i=$i+1;
	}
	
	echo json_encode($range);
	
}


