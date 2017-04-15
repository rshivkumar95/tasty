<?php

session_start();

        
		 $_SESSION['email']="";
       $_SESSION['logged']=0;
      
        echo "<script type='text/javascript'>window.location='login.php'</script>";

?>