



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
			if (!empty($_FILES["OfferImage"]["name"])) 
			{
				$file_name=$_FILES["OfferImage"]["name"];
				$temp_name=$_FILES["OfferImage"]["tmp_name"];
				$imgtype=$_FILES["OfferImage"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target_path = "img/offer/".$imagename;
                /*$temp_target_path="../".$target_path;*/
				//echo $temp_name."   ".$target_path;
                //echo $_FILES["Restaurant_Image"]["error"];
                //$target_path_new="img/hotelimage/resized_".$imagename;

				if(move_uploaded_file($temp_name, $target_path))
				{
					//ak_img_resize($target_path, $target_path_new, $wmax, $hmax, $ext);
					$d = compress_image($target_path, $target_path, 30);
					
					
				          		$OfferName=$_POST['OfferName'];								
								$OfferStatus=$_POST['OfferStatus'];								
									 	
								$query = "INSERT INTO `offers`( `OfferName`, `OfferImage`, `OfferStatus`) VALUES ('$OfferName',  '$target_path', '$OfferStatus')";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('New Offer Added !'); window.location.href='offers.php';</script>";                                        
						            }
					            else
					                {
					                   
					                    echo "<script type='text/javascript'>alert('Error'); window.location.href='offers.php';</script>";
					                   
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

