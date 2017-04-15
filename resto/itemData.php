<?php
/**
 * Created by PhpStorm.
 * User: Shivkumar Rathod
 * Date: 28-Dec-16
 * Time: 10:52 PM
 */
include_once('operations/config.php');

include_once('img_compress.php');

if(trim($_POST['sub'])==='item')
{
    $id1=$_POST['id'];
    $query = "SELECT * FROM `restaurant_menu` WHERE Item_Id='$id1'";
    //$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    echo json_encode($data);


}


if (isset($_POST['update']))
{

    //echo $_FILES["RestaurantImage"]["name"];
    $Item_Id=$_POST['Item_Id1'];
    if (!empty($_FILES["Item_Image1"]["name"]))
    {
        $query = "SELECT * FROM `restaurant_menu` WHERE Item_Id='$id1'";
        $result = mysql_query($query) or die(mysql_error());
        $image  =mysql_fetch_array($result);
        @unlink('../'.$image['Item_Image']);
        //@unlink($image['Restaurant_Logo']);
        $file_name=$_FILES["Item_Image1"]["name"];
        $temp_name=$_FILES["Item_Image1"]["tmp_name"];
        $imgtype=$_FILES["Item_Image1"]["type"];
        $info = new SplFileInfo($file_name);
        $ext= $info->getExtension();
        $imagename=date("d-m-Y")."-".time().".".$ext;
        $target = "img/menuitems/".$imagename;
                $target_path="../".$target;
        move_uploaded_file($temp_name, $target_path);
        compress_image($target_path, $target_path, 30);
        $query="UPDATE `restaurant_menu` SET `Item_Image`='$target' WHERE `Item_Id`='$Item_Id'";
        $res=mysql_query($query) or die(mysql_error());

    }


    /*$Restaurant_Name=$_POST['Restaurant_Name1'];
  $Restaurant_Hours=$_POST['Restaurant_Hours1'];
  $Restaurant_Address=$_POST['Restaurant_Address1'];
  $About_Restaurant=$_POST['About_Restaurant1'];
  $Delivery_fee=$_POST['Delivery_fee1'];
  $Rating=$_POST['Rating1'];*/

    session_start();
    $Item_Name=$_POST['Item_Name1'];
    $Item_Details=$_POST['Item_Details1'];
    $Item_Price=$_POST['Item_Price1'];
    $Item_Category=$_POST['Item_Category1'];
    $Discount=$_POST['Discount1'];
    $Restaurant_ID=$_SESSION['Restaurant_ID'];
     $Item_Status=$_POST['Item_Status1'];

    $query = "UPDATE `restaurant_menu` SET `Restaurant_Id`='$Restaurant_ID',`Item_Name`='$Item_Name',`Item_Details`='$Item_Details',`Item_price`='$Item_Price',`Discount`='$Discount',`Item_category`='$Item_Category',`status`='$Item_Status' WHERE `Item_Id`='$Item_Id'";
    $res = mysql_query($query) or die(mysql_error());
    if($res)
    {
        echo "<script type='text/javascript'>alert('Items Details Updated !'); window.location.href='menu.php';</script>";
    }
    else
    {

        echo "<script type='text/javascript'>alert('Error'); window.location.href='menu.php';</script>";

    }
}

