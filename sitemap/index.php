<?php
$tree = array(
    array(
        'value' => 6,
        'parent' => null,
    ),
    array(
        'value' => 2,
        'parent' => 6,
    ),
    array(
        'value' => 8,
        'parent' => 6,
    ),
    array(
        'value' => 1,
        'parent' => 2,
    ),
    array(
        'value' => 4,
        'parent' => 2,
    ),
    array(
        'value' => 7,
        'parent' => 8,
    ),
    array(
        'value' => 9,
        'parent' => 8,
    ),
    array(
        'value' => 3,
        'parent' => 4,
    ),
    array(
        'value' => 5,
        'parent' => 4,
    ),
);





/*

foreach($tree as $v => $p) {
    echo 'Waarde: '. $p['value']. ' =>  Parent:'.$p['parent'].'<br>';
}


Maak een functie waarmee je de parent van een node kunt opvragen a.d.h.v. het nummer. Voorbeeld: de parent van 5 is node 4 en van de parent van 7 is node 8. 6 heeft geen parent, retourneer dan de waarde null (denk weer in black-box termen, dus wat zijn de parameters en wat is de returnvalue).


Maak een functie waarbij je het nummer van een node kunt opgeven en vervolgens de kinderen (children) als een array terugkrijgt. Wanneer een node geen kinderen heeft, retourneer dan een lege array.
*/
?>


