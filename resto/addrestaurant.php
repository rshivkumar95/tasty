



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
			if (!empty($_FILES["Restaurant_Image"]["name"])) 
			{
				$file_name=$_FILES["Restaurant_Image"]["name"];
				$temp_name=$_FILES["Restaurant_Image"]["tmp_name"];
				$imgtype=$_FILES["Restaurant_Image"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target_path = "img/hotelimage/".$imagename;
                /*$temp_target_path="../".$target_path;*/
				//echo $temp_name."   ".$target_path;
                //echo $_FILES["Restaurant_Image"]["error"];
                //$target_path_new="img/hotelimage/resized_".$imagename;

				if(move_uploaded_file($temp_name, $target_path))
				{
					//ak_img_resize($target_path, $target_path_new, $wmax, $hmax, $ext);
					$d = compress_image($target_path, $target_path, 30);
					
					if (!empty($_FILES["Restaurant_Logo"]["name"])) 
					{

						$file_name1=$_FILES["Restaurant_Logo"]["name"];
						$temp_name1=$_FILES["Restaurant_Logo"]["tmp_name"];
						$imgtype1=$_FILES["Restaurant_Logo"]["type"];
						$info = new SplFileInfo($file_name);
				        $ext1= $info->getExtension();
						$imagename1=date("d-m-Y")."-".time().$ext1;
						$target_path1 = "img/hotellogo/".$imagename1;
						
						if(move_uploaded_file($temp_name1, $target_path1))
				          {
				          	$d = compress_image($target_path1, $target_path1, 30);
				          		$Restaurant_Name=$_POST['Restaurant_Name'];
								$Restaurant_Hours=$_POST['Restaurant_Hours'];
								$Restaurant_Address=$_POST['Restaurant_Address'];
								$About_Restaurant=$_POST['About_Restaurant'];
								$Delivery_fee=$_POST['Delivery_fee'];
								$Rating=$_POST['Rating'];
								$email=$_POST['email'];
								$Username=$_POST['Username'];
								$Password=$_POST['Password'];
								$temppass=md5($email)."-".md5($Username);	 	
								$query = "INSERT INTO `restaurant_info`( `Restaurant_Name`, `Restaurant_Hours`, `Restaurant_Address`, `About_Restaurant`, `Delivery_fee`, `Restaurant_Image`, `Restaurant_Logo`, `Rating`,`email`, `Username`, `Password`,`temppass`) VALUES ('$Restaurant_Name', '$Restaurant_Hours', '$Restaurant_Address', '$About_Restaurant', '$Delivery_fee', '$target_path', '$target_path1', '$Rating','$email', '$Username', '$Password','$temppass')";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('New Restaurant Added !'); window.location.href='restaurants.php';</script>";                                        
						            }
					            else
					                {
					                   
					                    echo "<script type='text/javascript'>alert('Error'); window.location.href='restaurants.php';</script>";
					                   
					                }
				          }
				          else
				          {
				          	echo "Error Uploading Logo";
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

	public function abc()
	{
		echo "abc";
	}

	function GetImageExtension($imagetype)
   	 {
   	 	//echo $imagetype;
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
}


new ClassName();




?>

