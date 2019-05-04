<?php
function data(){
    $data=['a','c','b','e','d'];
    $data2=['g','i','h'];
    sort($data);
    sort($data2);
    for ($i=0; $i < count($data) ; $i++)
    { 
        echo $data[$i];
    }
    echo '</br>';
    for ($j=0; $j < count($data2) ; $j++)
    { 
        echo $data2[$j];
    }
}

echo data();