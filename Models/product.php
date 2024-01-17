<?php

    class Product{
       private $title;
       private $price;
       private $image;

        public function __construct($title, $price, $image){
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
        }

        // set
        public function setTitle($title){
            $this->title = $title;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function setImage($image){
            $this->image =  $image;
        }

        // get
        public function getTitle(){
            return $this->title;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getImage(){
            return $this->image;
        }
    }
?>
