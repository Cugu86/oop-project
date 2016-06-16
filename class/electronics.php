<?php

require_once("product.php");

class Electronics extends Product 
{
	
	public $brand;
	public $watt;


	public function __construct($idProduct, $nameProduct, $priceProduct, $typeProduct, $quantityProduct, $description, $brand,$watt)
	{
		parent::__construct($idProduct, $nameProduct, $priceProduct, $typeProduct, $quantityProduct, $description, $brand,$watt);
		$this->brand = $brand;
		$this->watt = $watt;
	}


   
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

   
    public function getWatt()
    {
        return $this->watt;
    }

  
    public function setWatt($watt)
    {
        $this->watt = $watt;

        return $this;
    }
}

?>