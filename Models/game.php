<?php
    require_once __DIR__. '/categories.php';
    require_once __DIR__. '/product.php';

    class Game extends Product{
        private $dimension;
        private $madeIn;
        private $material;
        private $categories;

        public function __construct($title, $price, $image ,$dimension, $madeIn, Categories $categories){
            parent::__construct($title, $price, $image);
            $this->dimension = $dimension;
            $this->madeIn = $madeIn;
            $this->categories = $categories;
        }

        // set

        public function setMaterial($material){
            $this->material = $material;
        }

        public function setDimension($dimension){
            $this->dimension = $dimension;
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

        public function getDimension(){
            return  $this->dimension;
        }

        public function getMadeIn(){
            return $this->madeIn;
        }

        public function getCategories(){
            $this->categories;
        }
    }
?>