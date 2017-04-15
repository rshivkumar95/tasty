<?php

include("config.php");
session_start();

if(isset($_POST['submit']))
{
	
            $Item_Name=$_POST['Item_Name'];
			$Item_Details=$_POST['Item_Details'];
			$Item_Price=$_POST['Item_Price'];
			$Discount=$_POST['Discount'];
			
			$Item_Category=$_POST['Item_Category'];



        function GetImageExtension($imagetype)
   	 {
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

     function compress_image($source_url, $destination_url, $quality) 
		{ 
		$info = getimagesize($source_url); 
		if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url); 
		elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url); 
		elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url); 
		imagejpeg($image, $destination_url, $quality); 
		return $destination_url; 
		} 
	 
	 
	 
if (!empty($_FILES["Item_Image"]["name"])) {

	$file_name=$_FILES["Item_Image"]["name"];
	$temp_name=$_FILES["Item_Image"]["tmp_name"];
	$imgtype=$_FILES["Item_Image"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "img/product/".$imagename;
}

if(!(GetImageExtension($imgtype)))
{
      echo "invalid image !(only bmp,gif,jpg,png images supported)";
}

else
{
				if(move_uploaded_file($temp_name, $target_path)) {

				 	
					$query = "INSERT INTO `products` (ProductName,Item_Image,ProductDesc,ProductBenefits,Price) VALUES ('$ProductName', '$target_path', '$ProductDesc','$ProductBenefits','$ProductPrice')";  
				          $res = mysql_query($query) or die(mysql_error());
				          if($res)
				            {     
				                  echo "<script type='text/javascript'>alert('New Product Added!'); window.location.href='index.php';</script>";                                        
				            }
				            else
				                {
				                   
				                    echo "<script type='text/javascript'>alert('Error'); window.location.href='index.php';</script>";
				                   
				                }

					
				}
				else{

				   exit("Error While uploading image on the server");
				} 

}

























			
			 // Connection Closed.
}
?>