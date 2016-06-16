<?php

require_once("product.php");

class Food extends Product
{
	
	public $expDate;
	public $producer;
	public $bio;


    /**
     * Class Constructor
     * @param    $expDate   
     * @param    $producer   
     * @param    $bio   
     */
    public function __construct($idProduct, $nameProduct, $priceProduct, $typeProduct, $quantityProduct, $description, $expDate, $producer, $bio)
    {
        parent:: __construct($idProduct, $nameProduct, $priceProduct, $typeProduct, $quantityProduct, $description, $expDate, $producer, $bio);
        $this->expDate = $expDate;
        $this->producer = $producer;
        $this->bio = $bio;
    }


    public function getExpDate()
    {
        return $this->expDate;
    }

    
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

   
    public function getProducer()
    {
        return $this->producer;
    }

   
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

   
    public function getBio()
    {
        return $this->bio;
    }

   
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }
}


?>