<?php

    class ProductTypes{
       private $productType;

       public function __construct($productType){
        $this->productType = $productType;
       }
        // set
        public function setProductType($productType){
            $this->productType = $productType;
        }

        //    get
        public function getProductType(){
            return $this->productType;
        }
    }
    
?>