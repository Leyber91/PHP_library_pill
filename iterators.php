<?php

    $planets = array (
        'Mercury' => 1,
        'Venus' => 2,
        'Earth' => 3,
        'Mars' => 4,
        'Jupiter' => 5,
        'Saturn' => 6,
        'Uranus' => 7,
        'Neptune' => 8,

    );
    $planets2 = array (
        'Mercury',
        'Venus',
        'Earth',
        'Mars',
        'Jupiter',
        'Saturn',
        'Uranus',
        'Neptune',

    );

//For Each example
echo '<h3> For Each iterator example </h3>';

foreach($planets2 as $planet){
    echo $planet . "\n" . "<br>";
};


echo '<br>';

echo '<h3> While iterator example </h3>';
//WHILE Iterator
    $obj = new ArrayObject( $planets );
    $it = $obj->getIterator();
    echo "Iterating over: " . $obj->count() . " values\n" . '<br>';

    while( $it->valid() )
{
    echo $it->key() . "=" . $it->current() . "<br>";
    $it->next();
};

//for loops are the most complex loops in PHP
//for (expr1; expr2; expr3)
    // statement
    /* example 1 */

    echo '<br>';

    echo '<h3> For iterator example </h3>';

for ($i = 1; $i <= 23; $i++) {
    echo 'We have ' . 23-$i . ' seconds left </br>';
}


//Do While loop
//Checked at the end of each iteration instead of in the beginning

echo '<br>';

echo '<h3> WhileDo iterator example </h3>';

$i = 0;
do {
    echo $i;
} while ($i > 0);

?>