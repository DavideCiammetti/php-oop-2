<?php
    require_once __DIR__. '/categories.php';
    require_once __DIR__. '/product.php';

    class Food extends Product{
       private $ingredients;
       private $energyValue;
       private $madeIn;
       private $categories;

        public function __construct($title, $price, $image, $ingredients, $madeIn, Categories $categories){
            parent::__construct($title, $price, $image);
            $this->ingredients = $ingredients;
            $this->madeIn = $madeIn;
            $this->categories = $categories;
        }

        //    set
        public function setIngredients($ingredients){
            $this->ingredients = $ingredients;
        }

        public function setEnergyValue($energyValue){
            $this->energyValue = $energyValue;
        }

        public function setMadeIn($madeIn){
            $this->madeIn = $madeIn;
        }

        public function setCategories($categories){
            $this->categories = $categories;
        }

        // get
       public function getIngredients(){
            return $this->ingredients;
       }

        public function getEnergyValue(){
            return $this->energyValue;
        }

        public function getMadeIn(){
            return $this->madeIn;
        }

        public function getCategories(){
            $this->categories;
        }
    }
?>