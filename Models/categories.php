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


<?php
    // require_once __DIR__. '/categories.php';

    class Product extends Categories{
        protected $title;
        protected $price;
        protected $image;

        public function __construct($type, $categoryIcon, $title, $price, $image){
            parent::__construct($type, $categoryIcon);
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
        }

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
    // $cane = new Categories('cane', 'immagine/cane');
   $product1 = new Product('cane', 'immagine/cane','titolo', 'prezzo', 'immagine');
?>