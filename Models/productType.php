<?php
    require_once __DIR__. '/product.php';

    class ProductTypes extends Product{
       public $prodactType;

       public function __construct($type, $categoryIcon, $title, $price, $image, $prodactType){
        parent::__construct($type, $categoryIcon, $title, $price, $image);
            $this->prodactType = $prodactType;
            throw new Exception('qualcosa è andato storto');
       }

       public function getProdType(){
            return $this->prodactType;
       }
    }

?>