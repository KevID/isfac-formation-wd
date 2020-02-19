<?php
// Exercice a
$b= array(
        array(
            0,
            1
        ),
        array(
            2,
            array(
                3
            )
        )
    );

var_dump($b);

// Comment extraire la valeur 3 du Array ?

echo $b[1][1][0];

$c = array( 12 => array("age"=>45, "ville"=>"Poitiers"),
            48 => array("age"=>23, "ville"=>"Parsis"));
var_dump($c);
echo $c[12]["age"];