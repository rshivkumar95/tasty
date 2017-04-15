<?php

include_once('img_compress.php');
include_once('operations/config.php');


if (isset($_POST['update'])) 
{

        	//echo $_FILES["RestaurantImage"]["name"];
	         $ADID=$_POST['ADID1'];
			if (!empty($_FILES["ADImage1"]["name"])) 
			{
				$query = "SELECT * FROM `ads` WHERE ADID='$ADID'";
			    $result = mysql_query($query) or die(mysql_error());
			    $image  =mysql_fetch_array($result);
				@unlink('../'.$image['ADImage']);
				echo "<script></script>";

				$ADType1= $_POST['ADType1'];
				$file_name=$_FILES["ADImage1"]["name"];
				$temp_name=$_FILES["ADImage1"]["tmp_name"];
				$imgtype=$_FILES["ADImage1"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target = "img/offer/".$imagename;
				$target_path = "../".$target;
                move_uploaded_file($temp_name, $target_path);
                compress_image($target_path, $target_path, 30);
                $query="UPDATE `ads` SET `ADImage`='$target', `ADType`='$ADType1' WHERE `ADID`='$ADID'";
                $res=mysql_query($query) or die(mysql_error());

            }
            
            
				
				          		
								$ADTitle1= $_POST['ADTitle1'];
								
								$ADStatus1= $_POST['ADStatus1'];
								$ADPriority1= $_POST['ADPriority1'];
								
									 	
								$query = "UPDATE `ads` SET `ADTitle`='$ADTitle1',  `ADStatus`='$ADStatus1', `ADPriority`='$ADPriority1' WHERE `ADID`='$ADID'";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('Ad Details Updated !'); window.location.href='ads.php';</script>";                                        
						            }
					            else
					                {
					                   
					                    echo "<script type='text/javascript'>alert('Error'); window.location.href='ads.php';</script>";
					                   
					                }
}
				          

?>