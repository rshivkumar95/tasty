<?php
/**
 * Created by PhpStorm.
 * User: Shivkumar Rathod
 * Date: 28-Dec-16
 * Time: 10:38 PM
 */




include_once('operations/config.php');

if($_POST['sub']==='yes')
{
    $id1=$_POST['id'];

    $query = "SELECT * FROM `restaurant_menu` WHERE Item_Id='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $image  =mysql_fetch_array($result);
    @unlink('../'.$image['Item_Image']);


    $delete ="DELETE FROM `restaurant_menu` WHERE Item_Id='$id1'";
    $result =mysql_query($delete) or die(mysql_error());

    if($result)
    {
        echo "Item Deleted Successfully";
    }
}

