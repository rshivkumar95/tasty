



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
			if (!empty($_FILES["ADImage"]["name"])) 
			{
				$file_name=$_FILES["ADImage"]["name"];
				$temp_name=$_FILES["ADImage"]["tmp_name"];
				$imgtype=$_FILES["ADImage"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target = "img/offer/".$imagename;
				$target_path = "../".$target;
                /*$temp_target_path="../".$target_path;*/
				//echo $temp_name."   ".$target_path;
                //echo $_FILES["Restaurant_Image"]["error"];
                //$target_path_new="img/hotelimage/resized_".$imagename;

				if(move_uploaded_file($temp_name, $target_path))
				{
					//ak_img_resize($target_path, $target_path_new, $wmax, $hmax, $ext);
					$d = compress_image($target_path, $target_path, 30);
					
					
				          		$ADTitle=$_POST['ADTitle'];
								$ADType=$_POST['ADType'];
								$ADStatus=$_POST['ADStatus'];
								$ADPriority=$_POST['ADPriority'];
								
									 	
								$query = "INSERT INTO `ads`( `ADTitle`, `ADType`, `ADImage`, `ADStatus`, `ADPriority`) VALUES ('$ADTitle', '$ADType', '$target', '$ADStatus', '$ADPriority')";  
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

