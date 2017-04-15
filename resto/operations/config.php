<?php
  session_start();
error_reporting(0);
if(!isset($_SESSION['loggedIn']))
     $_SESSION['loggedIn']=0;
if(!mysql_connect("localhost","technomates","technomates07"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("tasty_tadkaa"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

 
?>
