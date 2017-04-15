<?php
date_default_timezone_set("Asia/Kolkata");
error_reporting(0);
session_start();
echo basename($_SERVER['REQUEST_URI']);
if(empty($_SESSION['cartrestaurant']))
{
	$_SESSION['cartrestaurant']=array();
}
if(empty($_SESSION['cartitem']))
{
	$_SESSION['cartitem']=array();
}

if(!mysql_connect("localhost","technomates","technomates07"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("tasty_tadkaa"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

 
?>
