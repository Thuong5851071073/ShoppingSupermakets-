<?php 
    namespace App;

   class Cart {
        public $products=null;
        public $totalPrice=0;
        public $totalQuanty=0;

        public function _constant($cart){
            if($cart){
                $this->products=$cart->products;
                $this->totalPrice=$cart->totalPrice;
                $this->totalQuanty=$cart->totalQuanty;
            }
        }

        public function AddCart($products,$id){
            
        }

   }

?>