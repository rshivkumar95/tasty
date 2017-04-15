<?php

session_start();

        $_SESSION['username'] = "";
		$_SESSION['Restaurant_ID'] = "";
		$_SESSION['Restaurant_Name'] = "";
		$_SESSION['loggedIn'] = 0;
      
        echo "<script type='text/javascript'>window.location='login.php'</script>";

?>