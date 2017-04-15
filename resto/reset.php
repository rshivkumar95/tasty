<?php
/**
 * Created by PhpStorm.
 * User: Shivkumar Rathod
 * Date: 28-Dec-16
 * Time: 1:46 PM
 */
error_reporting(0);
if($_POST['sub']=='yes')
{
    include_once('operations/config.php');

    $key=$_POST['key'];
    $newpass=$_POST['newpass'];

        $query = "UPDATE `restaurant_info` SET Password='$newpass' WHERE temppass='$key'";
        $result = mysql_query($query) or die(mysql_error());

        if($result)
        {
            echo "Password Changed";
        }


}
