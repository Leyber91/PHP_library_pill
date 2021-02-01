<?php
//We will be using dates from classes in this case from DateTime class forgetting the use of old php functions
// ARITHMETIC OPERATORS
echo '<h1> DATES </h1>';
echo '<h2> We will be using dates from classes in this case from DateTime class forgetting the use of old php functions </h2>';
$d = new DateTime();
// Output the date with microseconds.
echo '<p><strong>■Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</strong></p>';
echo "<p>echo '(>format(Y-m-d))' </p>";
echo $d->format('Y-m-d');
echo '<br>';

//Dates cheatsheet
echo '<h2> Dates cheatsheet </h2>';
echo '<pre>
MM - Month with leading 0
M - Month without leading 0
dd - Day with leading 0
d - Day without leading 0
yyyy - 4 Digit year
yy - 2 Digit year
HH - Military Hour with leading 0
H - Military Hour without leading 0
hh - Hour with leading 0
h - Hour without leading 0
mm - Minute with leading 0
m - Minute without leading 0
ss - Second with leading 0
s - Second without leading 0
</pre>';


//■	Get the current date in any format

echo '<p><strong>■	Get the current date in any format</strong></p>';
echo "<p>echo '(>format(D, d M Y H))' </p>";
echo $d->format('D, d M Y H');
echo '<br>';

//■	Get the current day

echo '<p><strong>■	Get the current day</strong></p>';
echo "<p>echo '(>format(D, d M Y H))' </p>";
echo $d->format('d');
echo '<br>';

//■	Get the current month in numerical format

echo '<p><strong>■	Get the current month in numerical format</strong></p>';
echo "<p>echo '(>format(M))' </p>";
echo $d->format('m');
echo '<br>';

//■	Get the current month in word format

echo '<p><strong>■	Get the current month in word format</strong></p>';
echo "<p>echo '(>format(M))' </p>";
echo $d->format('M');
echo '<br>';

//■	Get the current minute with leading zeros 

echo '<p><strong>■	Get the current miute with leading 0s </strong></p>';
echo "<p>echo '(>format H))' </p>";
echo $d->format('hh:mm');
echo '<br>';

?>