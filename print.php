<?php
//YOU USE ECHO FOR EMBED HTML CONTENT
echo '<h1/><strong>No one like you to make it happen</strong> <p/> <h2/>';

// YOU USE PRINT AS ECHO
print ("Come one you got it");

// YOU CAN DEFINE VARIABLES
$name = "Luis";
//YOU CAN ADD AS MANY ECHOS AS YOU NEED
echo '<br/>';

print "My name is $name";

echo '<br/>';
//PRINT R. Prints it in a more human readable way

    //integer variable  
    $input1 = 42;  
    print_r('Integer Value: '.$input1);  
    echo "</br>";  
      
    //float variable  
    $input2 = 3.14159265359;  
    print_r('Float Value: '.$input2);  
    echo "</br>";  
      
    //string variable  
    $input3 = 'Welcome to PHP!';  
    print_r('String Value: '.$input3);  

// Yoou can define the variable and print the result
    function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}
    echo '</h2/';
    echo print_r2(2);


?>