<?php



class ClassName
{
	
	function __construct()
	{
		
		if(isset($_POST['submit']))
		{

			//echo $_FILES["RestaurantImage"]["name"];
			if (!empty($_FILES["Restaurant_Image"]["name"])) 
			{
				$file_name=$_FILES["Restaurant_Image"]["name"];
				$temp_name=$_FILES["Restaurant_Image"]["tmp_name"];
				$imgtype=$_FILES["Restaurant_Image"]["type"];
				$ext= $this->GetImageExtension($imgtype);
				$imagename=date("d-m-Y")."-".time().$ext;
				$target_path = "img/hotelimage/".$imagename;
                /*$temp_target_path="../".$target_path;
				echo $temp_target_path;*/

				if(move_uploaded_file($temp_name, $target_path))
				{
					if (!empty($_FILES["Restaurant_Logo"]["name"])) 
					{

						$file_name1=$_FILES["Restaurant_Logo"]["name"];
						$temp_name1=$_FILES["Restaurant_Logo"]["tmp_name"];
						$imgtype1=$_FILES["Restaurant_Logo"]["type"];
						$ext1= $this->GetImageExtension($imgtype1);
						$imagename1=date("d-m-Y")."-".time().$ext1;
						$target_path1 = "img/hotellogo/".$imagename1;
						
						if(move_uploaded_file($temp_name1, $target_path1))
				          {
				          		$Restaurant_Name=$_POST['Restaurant_Name'];
								$Restaurant_Hours=$_POST['Restaurant_Hours'];
								$Restaurant_Address=$_POST['Restaurant_Address'];
								$About_Restaurant=$_POST['About_Restaurant'];
								$Delivery_fee=$_POST['Delivery_fee'];
								$Rating=$_POST['Rating'];
								$Username=$_POST['Username'];
								$Password=$_POST['Password'];
									 	
								$query = "INSERT INTO `restaurant_info`( `Restaurant_Name`, `Restaurant_Hours`, `Restaurant_Address`, `About_Restaurant`, `Delivery_fee`, `Restaurant_Image`, `Restaurant_Logo`, `Rating`, `Username`, `Password`) VALUES VALUES ('$Restaurant_Name', '$Restaurant_Hours', '$Restaurant_Address', '$About_Restaurant', '$Delivery_fee', '$target_path', '$target_path1', '$Rating', '$Username', '$Password')";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('New Restaurant Added!'); window.location.href='restaurant.php';</script>";                                        
						            }
					            else
					                {
					                   
					                    echo "<script type='text/javascript'>alert('Error'); window.location.href='restaurant.php';</script>";
					                   
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