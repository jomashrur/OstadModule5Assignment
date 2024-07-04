<?php 
  
// Input the three numbers 
// and store it in variable 
  
$number1 = 4; 
$number2 = 5; 
$number3 = 6; 
  
// Using the following function to find the largest number 
  
function checkNumber($n1, $n2, $n3)
{
    if ($n1 > $n2 && $n1 > $n3)
        $greatest= $n1;
    elseif ($n2 > $n3)
        $greatest= $n2;
    else
        $greatest= $n3;
    return $greatest;
}
echo "Greatest among $number1 $number2 $number3 is " . checkNumber($number1, $number2, $number3);
?>