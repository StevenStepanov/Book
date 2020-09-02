<?php

class S2tted {
    public $title;

    function __construct($t){
        $this->sätted = $t;
    }

}

$säte  = new S2tted('Helisätted');
$säte2 = new S2tted('Kuvasätted');
$säte3 = new S2tted('Kasutajasätted');

var_dump($säte->sätted);
var_dump($säte2->sätted);
var_dump($säte3->sätted);

echo "/n";