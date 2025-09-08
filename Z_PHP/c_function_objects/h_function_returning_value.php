<?php
function addNums($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}
$returned_value = addNums(10, num2: 20);
echo "The returned value from the function =  $returned_value";
