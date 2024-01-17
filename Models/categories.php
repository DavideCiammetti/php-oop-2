<?php
    require_once __DIR__. '/productType.php';
    
    class Categories extends ProductTypes{
        private $type;
        private $categoryIcon;

        public function __construct($productType, $type, $categoryIcon){
            parent::__construct($productType);
            $this->type = $type;
            $this->categoryIcon = $categoryIcon;
        }

        // set
        public function setType($type){
            $this->type = $type;
        }

        public function setCategory($categoryIcon){
            $this->categoryIcon = $categoryIcon;
        }

        // get
        public function getType(){
            return $this->type;
        }

        public function getCategory(){
            return $this->categoryIcon;
        }
    }

    $gioco_cane = new Categories('gioco per cani', 'cane', 'icona cane');
?>

