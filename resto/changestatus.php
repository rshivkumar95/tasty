<?php

include_once('config.php');

if(trim($_POST['action'])==='change')
{


                            
      $orderID=$_POST['orderID'];
      $status=$_POST['status'];

      $query="UPDATE `orders` SET `status`='$status' WHERE `Order_Id`='$orderID'";

      $result=mysql_query($query);


}


if(trim($_POST['action'])==='count')
{


                            
      $restID=$_SESSION['Restaurant_ID'];
      

      $query="SELECT restID,COUNT(*) as total FROM orderrest WHERE restID=$restID";

      $result=mysql_query($query);

      $data=mysql_fetch_assoc($result);

      if($data['total']>$_SESSION['totalorder'])
      {
      	 echo "true";
      	 $_SESSION['totalorder']=$data['total'];
      }
      




}




?>