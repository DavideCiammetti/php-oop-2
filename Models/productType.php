<?php

    class ProductTypes{
       private $productType;
       
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