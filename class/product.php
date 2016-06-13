<?php

 class Product
 {
 	
 	private $idProduct;
 	private $nameProduct;
 	private $priceProduct;
 	private $typeProduct;
 	private $quantityProduct;


	public function __construct($idProduct, $nameProduct, $priceProduct, $typeProduct, $quantityProduct)
	{
		$this->idProduct = $idProduct;
		$this->nameProduct = $nameProduct;
		$this->priceProduct = $priceProduct;
		$this->typeProduct = $typeProduct;
		$this->quantityProduct = $quantityProduct;
	}


    public function getIdProduct()
    {
        return $this->idProduct;
    }

   
    private function _setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

    }


    public function getNameProduct()
    {
        return $this->nameProduct;
    }


    private function _setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;

       
    }

   
    public function getPriceProduct()
    {
        return $this->priceProduct;
    }

    
    private function _setPriceProduct($priceProduct)
    {
        $this->priceProduct = $priceProduct;

        return $this;
    }

   
    public function getTypeProduct()
    {
        return $this->typeProduct;
    }

   
    private function _setTypeProduct($typeProduct)
    {
        $this->typeProduct = $typeProduct;

        return $this;
    }

   
    public function getQuantityProduct()
    {
        return $this->quantityProduct;
    }

   
    private function _setQuantityProduct($quantityProduct)
    {
        $this->quantityProduct = $quantityProduct;

        
    }
} 

 ?>