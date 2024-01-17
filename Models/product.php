<?php
    require_once __DIR__. '/categories.php';

    class Product{
       private $title;
       private $price;
       private $image;
       private $categories;

        public function __construct($title, int $price, $image, Categories $categories){
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
            $this->categories = $categories;
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

        public function setCategories($categories){
            $this->categories = $categories;
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

        public function sgetCategories(){
           return $this->categories;
        }
    }
?>
