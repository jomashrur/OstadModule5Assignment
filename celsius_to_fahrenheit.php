<?php 
// function to convert Celsius to Fahrenheit scale 
function Conv_To_Fah($cel) 
{ 
    return (($cel * 9.0 / 5.0) + 32.0); 
} 

    $cel = 32.0; 
    echo "The temperature in Fahrenheit is: " . number_format(Conv_To_Fah($cel), 2);
?>
