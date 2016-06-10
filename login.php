<?php
session_start();
include_once("classAutoloader.php");

if ((!empty($_POST['mail_login']))&&(!empty($_POST['password_login']))) 
{
	
	$email = htmlspecialchars($_POST['mail_login']);
    $pw = htmlspecialchars($_POST['password_login']);

    echo "input recuperati";

    //connection via pdo 
    $connection = new Database();

    $queryLogin="SELECT * FROM customer WHERE mailCustomer='$email'";
    $prepLogin = $connection->conn->prepare($queryLogin);
    $res = $prepLogin->execute();
    if($prepLogin->fetchColumn())
        {
          
          echo "profile exists I get the info";

        }
     else
     	{
     	  echo "Profile doesn't exists";
     	}

}
else
{
	echo "Please insert you login credentials";

}

 ?>