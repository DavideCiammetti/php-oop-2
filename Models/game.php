<?php
    require_once __DIR__. '/categories.php';
    require_once __DIR__. '/product.php';

    class Game extends Product{
        private $dimension;
        private $madeIn;
        private $material;
        private $categories;

        public function __construct($title, $price, $image, $madeIn, Categories $categories){
            parent::__construct($title, $price, $image);
            $this->madeIn = $madeIn;
            $this->categories = $categories;
        }

        // set

        public function setMaterial($material){
            $this->material = $material;
        }
        
        public function setMadeIn($madeIn){
            $this->madeIn = $madeIn;
        }

        public function setCategories($categories){
            $this->categories = $categories;
        }

        // get
        public function getMaterial(){
            return $this->material;
        }

        public function getMadeIn(){
            return $this->madeIn;
        }

        public function getCategories(){
           return $this->categories;
        }
    }
?>