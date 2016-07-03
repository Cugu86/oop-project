<?php 

include_once('classAutoloader.php');



if (!empty($_POST['postmail'])) {

	echo "pieno";
	$mail = htmlspecialchars($_POST['postmail']);

	$connection = new Database();

	$queryMail="SELECT mailCustomer FROM customer WHERE mailCustomer='$mail'";
    $prepLogin = $connection->conn->prepare($queryLogin);
    $prepLogin->execute();
    $res = $prepLogin->fetch(PDO::FETCH_ASSOC);

    var_dump($res);

	
}else{
	echo "vuoto";
}







?>