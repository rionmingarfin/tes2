<?php
function data(){
    $data=[
        'name' => 'rion ming arfin',
        'addres' => 'desa.padang pelawi kec.sukaraja.kab seluma kota bengkulu',
        'hobbies' =>array('sepakbola,futsal'),
        'is_married' => false,
        'school' =>(object)array(
            'highhschool' => 'SMAN 6 SELUMA KOTA BENGKULU',
            'university' => 'no'
        ),
        'skils' => (object) array(
            'php','mysql','html','css'
        )
    ];
    return $data;
};

echo json_encode(data());