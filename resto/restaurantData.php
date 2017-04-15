<?php

include_once('img_compress.php');
include_once('operations/config.php');

if(trim($_POST['sub'])==='ads')
{
	$id1=$_POST['id'];
     $query = "SELECT * FROM `ads` WHERE ADID='$id1'";
	//$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    echo json_encode($data);
	

}
if(trim($_POST['sub'])==='restaurant')
{
	$id1=$_POST['id'];
     //$query = "SELECT * FROM `ads` WHERE ADID='$id1'";
	$query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    echo json_encode($data);
	

}

if(trim($_POST['sub'])==='offer')
{
	$id1=$_POST['id'];
     //$query = "SELECT * FROM `ads` WHERE ADID='$id1'";
	$query = "SELECT * FROM `offers` WHERE OfferID='$id1'";
    $result = mysql_query($query) or die(mysql_error());
    $data  =mysql_fetch_array($result);

    echo json_encode($data);
	

}

if (isset($_POST['update'])) 
{

        	//echo $_FILES["RestaurantImage"]["name"];
	         $Restaurant_ID=$_POST['Restaurant_ID1'];
			if (!empty($_FILES["Restaurant_Image1"]["name"])) 
			{
				 $query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
				    $result = mysql_query($query) or die(mysql_error());
				    $image  =mysql_fetch_array($result);
					@unlink($image['Restaurant_Image']);
					//@unlink($image['Restaurant_Logo']);
				$file_name=$_FILES["Restaurant_Image1"]["name"];
				$temp_name=$_FILES["Restaurant_Image1"]["tmp_name"];
				$imgtype=$_FILES["Restaurant_Image1"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target_path = "img/hotelimage/".$imagename;
                move_uploaded_file($temp_name, $target_path);
                compress_image($target_path, $target_path, 30);
                $query="UPDATE `restaurant_info` SET `Restaurant_Image`='$target_path' WHERE `Restaurant_ID`='$Restaurant_ID'";
                $res=mysql_query($query) or die(mysql_error());

            }
            
            if (!empty($_FILES["Restaurant_Logo1"]["name"])) 
					{
						 $query = "SELECT * FROM `restaurant_info` WHERE Restaurant_ID='$id1'";
					    $result = mysql_query($query) or die(mysql_error());
					    $image  =mysql_fetch_array($result);
						//@unlink($image['Restaurant_Image']);
						@unlink($image['Restaurant_Logo']);
                         
						$file_name=$_FILES["Restaurant_Logo1"]["name"];
				$temp_name=$_FILES["Restaurant_Logo1"]["tmp_name"];
				$imgtype=$_FILES["Restaurant_Logo1"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target_path = "img/hotellogo/".$imagename;
                move_uploaded_file($temp_name, $target_path);
                compress_image($target_path, $target_path, 30);
                $query="UPDATE `restaurant_info` SET `Restaurant_Logo`='$target_path' WHERE `Restaurant_ID`='$Restaurant_ID'";
                $res=mysql_query($query) or die(mysql_error());

              }
				
				          		/*$Restaurant_Name=$_POST['Restaurant_Name1'];
								$Restaurant_Hours=$_POST['Restaurant_Hours1'];
								$Restaurant_Address=$_POST['Restaurant_Address1'];
								$About_Restaurant=$_POST['About_Restaurant1'];
								$Delivery_fee=$_POST['Delivery_fee1'];
								$Rating=$_POST['Rating1'];*/

								$Restaurant_Name= $_POST['Restaurant_Name1'];
								$Restaurant_ID= $_POST['Restaurant_ID1'];
								$Restaurant_Hours= $_POST['Restaurant_Hours1'];
								$Restaurant_Address= $_POST['Restaurant_Address1'];
								$About_Restaurant= $_POST['About_Restaurant1'];
								$Delivery_fee= $_POST['Delivery_fee1'];
								$Rating= $_POST['Rating1'];
								$email= $_POST['email1'];
									 	
								$query = "UPDATE `restaurant_info` SET `Restaurant_Name`='$Restaurant_Name', `Restaurant_Hours`='$Restaurant_Hours', `Restaurant_Address`='$Restaurant_Address', `About_Restaurant`='$About_Restaurant', `Delivery_fee`='$Delivery_fee', `Rating`='$Rating',`email`='$email' WHERE `Restaurant_ID`='$Restaurant_ID'";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('Restaurant Details Updated !'); window.location.href='restaurants.php';</script>";                                        
						            }
					            else
					                {
					                   
					                    echo "<script type='text/javascript'>alert('Error'); window.location.href='restaurants.php';</script>";
					                   
					                }
				          }
				          

?>