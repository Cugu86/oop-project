<?php
session_start();
include_once("classAutoloader.php");

if ((!empty($_POST['mail_login']))&&(!empty($_POST['password_login']))) 
{
	
	$email = htmlspecialchars($_POST['mail_login']);
    $pw = htmlspecialchars($_POST['password_login']);
    //connection via pdo 
    $connection = new Database();
    //query to get the customer infos
    $queryLogin="SELECT * FROM customer WHERE mailCustomer='$email'";
    $prepLogin = $connection->conn->prepare($queryLogin);
    $prepLogin->execute();
    $res = $prepLogin->fetch(PDO::FETCH_ASSOC);
    //test if the request return something
    if($res)
    {
         //var_dump($res);

        if (password_verify($pw, $res['passwordCustomer'])) {
            //echo 'Le mot de passe est valide !';

             $customer = new Customer($res['idCustomer'],
                                  $res['nameCustomer'],
                                  $res['SurnameCustomer'],
                                  $res['mailCustomer'],
                                  $res['passwordCustomer'],
                                  $res['customerRole']);
                    $_SESSION['customer'] = $customer;

            if($res['customerRole']==='admin')
                 {
                     echo "<script>window.top.location='admin.php'</script>";
                 }
                 else
                 {
                    
                    echo "<script>window.top.location='store.php'</script>";
                 }
            

        } else {
            echo 'Le mot de passe est invalide.';
        }
        
    }
    else
    {
        echo "profile doesn't exists please sign up ";
    }
        
}
else
{
	echo "Please insert you login credentials";

}

?>