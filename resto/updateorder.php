<?php
/**
 * Created by PhpStorm.
 * User: Shivkumar Rathod
 * Date: 29-Dec-16
 * Time: 2:45 AM
 */

include_once('operations/config.php');

if(trim($_POST['sub'])==='yes')
{

    $Order_Id=$_POST['id'];
    $Status=$_POST['status'];

    $query="UPDATE `orders` SET `Status`='$Status' WHERE `Order_Id`='$Order_Id'";
    $result=mysql_query($query) or die(mysql_error());


}