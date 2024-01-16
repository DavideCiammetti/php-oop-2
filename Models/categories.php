<?php
    class Categories{
        public $type;
        public $categoryIcon;

       public function __construct($type, $categoryIcon){
            $this->type = $type;
            $this->categoryIcon = $categoryIcon;
        }

        public function getType(){
            return $this->type;
        }

        public function getCategory(){
            return $this->categoryIcon;
        }
    }
?>

