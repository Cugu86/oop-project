<?php
session_start();
if (!isset($_SESSION['customer']))
		{	
		 echo "<script>window.top.location='index.php'</script>";
		}
	else if(isset($_SESSION['customer'])!="")
			echo "<script>window.top.location='index.php'</script>";	
if(isset($_GET['logout']))
  {
	session_destroy();
	session_unset();
    echo "<script>window.top.location='index.php'</script>";
   }
?>