<?php


include_once('operations/config.php');

if($_POST['sub']==='yes')
{
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);

	$query = "SELECT * FROM `restaurant_info` WHERE Username='$username' and Password='$password'";
    $result = mysql_query($query) or die(mysql_error());
    $rows=mysql_num_rows($result);
    $data  =mysql_fetch_array($result);

    if($rows==1)
    {
    	echo 'true';
    	session_start();
    	$_SESSION['username'] = $username;
		$_SESSION['Restaurant_ID'] = $data['Restaurant_ID'];
		$_SESSION['Restaurant_Name'] = $data['Restaurant_Name'];
        $_SESSION['Restaurant_Logo'] = $data['Restaurant_Logo'];
		$_SESSION['loggedIn'] = 1;
    }
    else
    {
    	echo 'false';
    }	
}