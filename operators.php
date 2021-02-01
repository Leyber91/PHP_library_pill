<?php
//USING var_dump it returns us the value of the operators
// ARITHMETIC OPERATORS
echo '<h1> OPERATORS </h1>';
echo '<h2> ARITHMETIC OPERATORS </h2>';

echo '<h2> ADDITION (+) </h2>';
var_dump( 42 + 23 + 67);

echo '<h2> SUBSTRACTION (-) </h2>';
var_dump( 42 - 23);

echo '<h2> MUTLIPLY (*) </h2>';
var_dump( 7 * 7);

echo '<h2> DIVISION (/) </h2>';
var_dump( 10 / 3);

echo '<h2> REMAINDER (%) </h2>';
var_dump( 42 % 23);

//COMPARISON OPERATORS
echo '<h2> COMPARISON OPERATORS </h2>';

echo '<h3> EQUAL TO (==). Is 42 == 67? </h3>';
var_dump( 42 == 67);

echo '<h3> NOT EQUAL (! =) Is 42 != 23? </h3>';
var_dump( 42 != 23);

echo '<h3> LESS THAN (<). Is 7 < 7 ? </h3>';
var_dump( 7 < 7);

echo '<h3> MORE THAN (>). Is ( 10 > 3) ? </h3>';
var_dump( 10 > 3);

echo '<h3> LESS THAN OR EQUAL(=<) Is 7 <= 7 ?</h3>';
var_dump( 7 <= 7);

echo '<h3> MORE THAN OR EQUAL(> =). Is 10 >= 3 ? </h3>';
var_dump( 10 >= 3);

//LOGICAL OPERATORS
echo '<h2> LOGICAL OPERATORS </h2>';

echo '<p> First of All we will define variable for this subsection, two examples for each</p>';
echo '<pre>$x = true;
$y = false;</pre>';
//Defining the variables
    $x = true;
    $y = false;


echo '<h3> AND (&& or And) </h3>';
echo '<p> Result of $x and $y </p>';
var_dump( $x and $y );
echo '<p> Result of $x && $x </p>';
var_dump( $x && $x );

echo '<h3> OR (|| or Or) </h3>';
echo '<p> Result of $x or $y </p>';
var_dump( $x or $y );
echo '<p> Result of $y || $y </p>';
var_dump( $x || $x );

echo '<h3> NOT (!) </h3>';
echo '<p> Result of !$x </p>';
var_dump( !$x );
echo '<p> Result of !$y </p>';
var_dump( !$y );

echo '<h3> Xor (xor) </h3>';
echo '<p><strong> True if either $a or $b is true, but not both. </strong></p>';
echo '<p> Result of !$x xor !$x </p>';
var_dump( $x xor $x );
echo '<p> Result of !$x xor !$y </p>';
var_dump( $x xor $y );

?>