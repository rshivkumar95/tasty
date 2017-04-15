
<?php

include('config.php');



if(trim($_POST['sub'])==='quant')
{
    $item=$_POST['itemid'];
    $quant=$_POST['quant'];
    $_SESSION['cartitem'][$item]=$quant;  
    $_SESSION['ordertotal']=$_POST['ordertotal']; 
    $_SESSION['finaltotal']=$_POST['finalorder']; 
    $_SESSION['offercode']="";
    $_SESSION['offerdetails']="";
    $_SESSION['delivery']=$_POST['delivery'];
}


if(trim($_POST['sub'])==='finaltotal')
{
    
    $finaltotal=$_POST['finaltotal'];    
    $_SESSION['finaltotal']=$finaltotal; 
    $_SESSION['offercode']=$_POST['offercode']; ;
    $_SESSION['offerdetails']=$_POST['offerdetails']; ;
    echo "Applied";
}


?>