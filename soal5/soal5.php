<?php

function acak($panjang){
    $karakter = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $string ='';

    for ($i=0; $i < $panjang ; $i++) { 
        $pos = rand(0, strlen($karakter)-1);
        $string .=$karakter{$pos};
    }
    return $string;
}

echo acak(30);