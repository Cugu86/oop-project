<?php
session_start();
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
include_once("classAutoloader.php");


if ((!empty($_POST['inputName']))
  and(!empty($_POST['inputSurname']))
  and(!empty($_POST['inputEmail']))
  and(!empty($_POST['inputPassword']))
  and(!empty($_POST['inputPassword1']))) 
  {
    
    if ($_POST['inputPassword'] === $_POST['inputPassword1']) 
      {
        
        //validate user input

        $name = htmlspecialchars($_POST['inputName']);
        $surname = htmlspecialchars($_POST['inputSurname']);
        $email = htmlspecialchars($_POST['inputEmail']);
        $pw =  password_hash($_POST['inputPassword'],PASSWORD_BCRYPT);

        
        //connection via pdo 
        $connection = new Database();

        // CHECK FOR DOUBLES

        $queryCheck="SELECT * FROM customer WHERE mailCustomer='$email'";
        $prepCheck = $connection->conn->prepare($queryCheck);
        $prepCheck->execute();
        if($prepCheck->fetchColumn())
        {
          $_SESSION['messageMail']="Email exsist already, please choose another email or sign in";
          echo "<script>window.top.location='index.php'</script>";
        }
        else
        {

        //INSERTION

        $query = "INSERT INTO customer VALUES ('','$name','$surname','$email','$pw','')";

        $prep = $connection->conn->prepare($query);
        $res = $prep->execute();
        $lastID = $connection->conn->lastInsertId();

        $querySelect="SELECT * FROM customer WHERE idCustomer='$lastID'";
        $resSelect = $connection->conn->prepare($querySelect);

          if (!empty($resSelect->execute()) )
          {
            $resOBJ = $resSelect->fetchAll(PDO::FETCH_OBJ);

            $customer = new Customer($resOBJ[0]->idCustomer,
                       $resOBJ[0]->nameCustomer,
                       $resOBJ[0]->SurnameCustomer,
                       $resOBJ[0]->mailCustomer,
                       $resOBJ[0]->passwordCustomer);

            $_SESSION['customer']=$customer;

          }
          else
          {
          echo "an error has occured while retrieving data from the database";
          }


        if ($res)
          {
            $_SESSION['welcomeMessage']= 'Welcome '. $customer->getName().' you will shortly recieve a confirmation email';
            
            // Sending confrmation mail

            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('lacugurra@gmail.com')
            ->setPassword('Cugurra86');
            $mailer = Swift_Mailer::newInstance($transport);
            $message = Swift_Message::newInstance();
            $message->setSubject('Sign Up');
            $message->setBody('Thank you <em>very very much</em> <b>'.$customer->getName().'</b> for signing up.<br / > Go and buy something', 'text/html');
            $message->setFrom(array('lacugurra@gmail.com' => 'La Cugurra'));
            $message->setTo(array($email));
            $result = $mailer->send($message);

            $connection=null;

            echo "<script>window.top.location='store.php'</script>";
          }

        }
      
      }
      else
      {
        
        echo "Please insert the same password in both fields!";
      }

}





