<?php
    class Game{
        private $dimension;
        private $madeIn;
        private $material;

        public function __construct($dimension, $madeIn){
            $this->dimension = $dimension;
            $this->madeIn = $madeIn;
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
    }
?>