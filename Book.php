<?php

class Book {
    public $title;
    public $inStock = true;

    public function __construct($t){
        $this->title = $t;
    }

    public function getStockSaldo(){
        return $this->stockSaldo;
    }


    public function setStockSaldo($v){
        if ( $v < 0 ){
            throw new Exception('Value can not be negative');
        }else{
            $this->stockSaldo = $v;
        }  
    }

    public function soldOut(){
        $this->inStock = false;
    }

}

$book = new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');

$book2->soldOut();
$book->setStockSaldo(15);

var_dump($book); 
var_dump($book2);


echo "/n";