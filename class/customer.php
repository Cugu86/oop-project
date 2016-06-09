<?php

class Customer
{
  
  private $idCustomer;
  private $name;
  private $surname;
  private $mail;
  private $password;


  public function __construct($idCustomer, $name, $surname, $mail, $password)
  {
    $this->idCustomer = $idCustomer;
    $this->name = $name;
    $this->surname = $surname;
    $this->mail = $mail;
    $this->password = $password;
  }


  
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

  
    public function _setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

    }


    public function getName()
    {
        return $this->name;
    }

    public function _setName($name)
    {
        $this->name = $name;
    }


    public function getSurname()
    {
        return $this->surname;
    }

    public function _setSurname($surname)
    {
        $this->surname = $surname;
    }

 
    public function getMail()
    {
        return $this->mail;
    }


    public function _setMail($mail)
    {
        $this->mail = $mail;

    }

 
    public function getPassword()
    {
        return $this->password;
    }


    public function _setPassword($password)
    {
        $this->password = $password;

    }
}

?>