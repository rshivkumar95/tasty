



<?php
include_once('img_compress.php');

include_once('operations/config.php');

class ClassName
{



    function __construct()
    {
        $wmax = 1000;
        $hmax = 300;

        if(isset($_POST['submit']))
        {
              echo "here";//echo $_FILES["RestaurantImage"]["name"];
            if (!empty($_FILES["Item_Image"]["name"]))
            {
                $file_name=$_FILES["Item_Image"]["name"];
                $temp_name=$_FILES["Item_Image"]["tmp_name"];
                $imgtype=$_FILES["Item_Image"]["type"];
                $info = new SplFileInfo($file_name);
                $ext= $info->getExtension();
                $imagename=date("d-m-Y")."-".time().".".$ext;
                $target = "img/menuitems/".$imagename;
                $target_path="../".$target;
                /*$temp_target_path="../".$target_path;*/
                //echo $temp_name."   ".$target_path;
                //echo $_FILES["Restaurant_Image"]["error"];
                //$target_path_new="img/hotelimage/resized_".$imagename;

                if(move_uploaded_file($temp_name, $target_path))
                {
                    //ak_img_resize($target_path, $target_path_new, $wmax, $hmax, $ext);
                    $d = compress_image($target_path, $target_path, 30);

                    session_start();
                    $Item_Name=$_POST['Item_Name'];
                    $Item_Details=$_POST['Item_Details'];
                    $Item_Price=$_POST['Item_Price'];
                    $Item_Category=$_POST['Item_Category'];
                    $Discount=$_POST['Discount'];
					$Restaurant_ID=$_SESSION['Restaurant_ID'];
                    $Item_Status=$_POST['Item_Status'];

                    $query = "INSERT INTO `restaurant_menu`(`Restaurant_Id`, `Item_Name`, `Item_Details`, `Item_price`, `Discount`, `Item_Image`, `Item_category`,`status`) VALUES ('$Restaurant_ID','$Item_Name','$Item_Details','$Item_Price','$Discount','$target','$Item_Category','$Item_Status')";
                    $res = mysql_query($query) or die(mysql_error());
                    if($res)
                    {
                        echo "<script type='text/javascript'>alert('New Item Added !'); window.location.href='menu.php';</script>";
                    }
                    else
                    {

                        echo "<script type='text/javascript'>alert('Error'); window.location.href='ads.php';</script>";

                    }
                }

            }
            else
            {
                echo "Error Uploading Image";
            }
        }

    }

}





new ClassName();




?>

