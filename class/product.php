<?php

 class Product
 {
 	
 	protected $idProduct;
 	protected $nameProduct;
 	protected $priceProduct;
 	protected $typeProduct;
 	protected $quantityProduct;
    protected $description;


	public function __construct($idProduct, $nameProduct, $priceProduct, $typeProduct, $quantityProduct, $description)
	{
		$this->idProduct = $idProduct;
		$this->nameProduct = $nameProduct;
		$this->priceProduct = $priceProduct;
		$this->typeProduct = $typeProduct;
		$this->quantityProduct = $quantityProduct;
        $this->description = $description;
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

   
    public function getDescription()
    {
        return $this->description;
    }

   
    private function _setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
} 

 ?>