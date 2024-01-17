<?php
    class Food{
       private $ingredients;
       private $energyValue;
       private $madeIn;

        public function __construct($ingredients, $madeIn){
            $this->ingredients = $ingredients;
            $this->madeIn = $madeIn;
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
    }
?>