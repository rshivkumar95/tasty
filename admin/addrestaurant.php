



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

			
					
					if (!empty($_FILES["Restaurant_Logo"]["name"])) 
					{

						$file_name1=$_FILES["Restaurant_Logo"]["name"];
						$temp_name1=$_FILES["Restaurant_Logo"]["tmp_name"];
						$imgtype1=$_FILES["Restaurant_Logo"]["type"];
						$info = new SplFileInfo($file_name);
				        $ext1= $info->getExtension();
						$imagename1=date("d-m-Y")."-".time().$ext1;
						$target1="img/hotellogo/".$imagename1;
						$target_path1 ="../".$target1;
						
						if(move_uploaded_file($temp_name1, $target_path1))
				          {
				          	$d = compress_image($target_path1, $target_path1, 30);
				          		$Restaurant_Name=$_POST['Restaurant_Name'];
								//$Restaurant_Hours=$_POST['Restaurant_Hours'];
								$Restaurant_Address=$_POST['Restaurant_Address'];
								$About_Restaurant=$_POST['About_Restaurant'];
								$Delivery_fee=$_POST['Delivery_fee'];
								$Rating=$_POST['Rating'];
								$email=$_POST['email'];
								$mobile=$_POST['mobile'];
								$landmark=$_POST['landmark'];
								$city=$_POST['city'];
								$Username=$_POST['Username'];
								$Password=$_POST['Password'];
								$starttime=date("G:i", strtotime($_POST['starttime']));
								$endtime=date("G:i", strtotime($_POST['endtime']));

								$temppass=md5($email)."-".md5($Username);	 	
								$query = "INSERT INTO `restaurant_info`( `Restaurant_Name`,  `Restaurant_Address`, `About_Restaurant`, `Restaurant_Logo`, `Rating`, `email`, `mobile`, `landmark`, `city`, `Username`, `Password`, `starttime`, `endtime`, `temppass`) VALUES ('$Restaurant_Name',  '$Restaurant_Address', '$About_Restaurant', '$target1', '$Rating','$email','$mobile','$landmark', '$city', '$Username', '$Password','$starttime','$endtime','$temppass')";  
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

