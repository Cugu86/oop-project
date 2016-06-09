<?php

include_once('classAutoloader.php');

class Admin extends Customer
{
	
  private $role;
	
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }
  
    private function _setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

    }
}

?>