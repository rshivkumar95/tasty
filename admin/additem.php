



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

			//echo $_FILES["RestaurantImage"]["name"];
			if (!empty($_FILES["Item_Image"]["name"])) 
			{
				$file_name=$_FILES["Item_Image"]["name"];
				$temp_name=$_FILES["Item_Image"]["tmp_name"];
				$imgtype=$_FILES["Item_Image"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target_path = "img/menuitems/".$imagename;
                /*$temp_target_path="../".$target_path;*/
				//echo $temp_name."   ".$target_path;
                //echo $_FILES["Restaurant_Image"]["error"];
                //$target_path_new="img/hotelimage/resized_".$imagename;

				if(move_uploaded_file($temp_name, $target_path))
				{
					//ak_img_resize($target_path, $target_path_new, $wmax, $hmax, $ext);
					$d = compress_image($target_path, $target_path, 30);
					
					
				          		$Item_Name=$_POST['Item_Name'];
								$Item_Details=$_POST['Item_Details'];
								$Item_Price=$_POST['Item_Price'];
								$Item_Category=$_POST['Item_Category'];
								$Discount=$_POST['Discount'];
									 	
								$query = "INSERT INTO `ads`( `ADTitle`, `ADType`, `Item_Image`, `ADStatus`) VALUES ('$ADTitle', '$ADType', '$target_path', '$ADStatus')";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('New AD Added !'); window.location.href='ads.php';</script>";                                        
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

