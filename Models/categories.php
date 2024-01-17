<?php
    require_once __DIR__. '/productType.php';
    
    class Categories{
        private $type;
        private $categoryIcon;
        private $productType;

        public function __construct($type, $categoryIcon,ProductTypes $productType){
            $this->type = $type;
            $this->categoryIcon = $categoryIcon;
            $this->productType = $productType;
        }

        // set
        public function setType($type){
            $this->type = $type;
        }

        public function setCategory($categoryIcon){
            $this->categoryIcon = $categoryIcon;
        }

        public function setProductType($productType){
            $this->productType = $productType;
        }

        // get
        public function getType(){
            return $this->type;
        }

        public function getCategory(){
            return $this->categoryIcon;
        }

        public function getProductType(){
            return $this->productType;
        }
        
    }
?>

