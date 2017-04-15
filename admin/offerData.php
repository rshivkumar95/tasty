<?php

include_once('img_compress.php');
include_once('operations/config.php');


if (isset($_POST['update'])) 
{

        	//echo $_FILES["RestaurantImage"]["name"];
	         $OfferID=$_POST['OfferID1'];
			if (!empty($_FILES["OfferImage1"]["name"])) 
			{
				$query = "SELECT * FROM `ads` WHERE ADID='$ADID'";
			    $result = mysql_query($query) or die(mysql_error());
			    $image  =mysql_fetch_array($result);
				@unlink('../'.$image['ADImage']);
				echo "<script></script>";

				
				$file_name=$_FILES["OfferImage1"]["name"];
				$temp_name=$_FILES["OfferImage1"]["tmp_name"];
				$imgtype=$_FILES["OfferImage1"]["type"];
				$info = new SplFileInfo($file_name);
				$ext= $info->getExtension();
				$imagename=date("d-m-Y")."-".time().".".$ext;
				$target = "img/offer/".$imagename;
				$target_path = "../".$target;
                move_uploaded_file($temp_name, $target_path);
                compress_image($target_path, $target_path, 30);
                $query="UPDATE `ads` SET `OfferImage`='$target' WHERE `OfferID`='$OfferID'";
                $res=mysql_query($query) or die(mysql_error());

            }
            
            
				
				          		
								$OfferName1= $_POST['OfferName1'];								
								$OfferStatus1= $_POST['OfferStatus1'];
								$OfferCode1=$_POST['OfferCode1'];								
								$OfferDiscount1=$_POST['OfferDiscount1'];
								$MinBalance1=$_POST['MinBalance1'];
								$MaxUse1=$_POST['MaxUse1'];
								
									 	
								$query = "UPDATE `offers` SET `OfferName`='$OfferName1',  `OfferStatus`='$OfferStatus1',`OfferCode`='$OfferCode1',`OfferDiscount`='$OfferDiscount1',`MinBalance`='$MinBalance1',`MaxUse`='$MaxUse1' WHERE `OfferID`='$OfferID'";  
				          		$res = mysql_query($query) or die(mysql_error());
						        if($res)
						            {     
						                  echo "<script type='text/javascript'>alert('Offers Details Updated !'); window.location.href='offers.php';</script>";                                        
						            }
					            else
					                {
					                   
					                    echo "<script type='text/javascript'>alert('Error'); window.location.href='offers.php';</script>";
					                   
					                }
}
				          

?>