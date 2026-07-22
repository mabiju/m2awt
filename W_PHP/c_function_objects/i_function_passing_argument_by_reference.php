<?php
// passing argument by reference
function addFive($num)
{
    $num += 5;
}
function addSix(&$num)
{
    $num += 66;
}
$origNum = 10;
addFive($origNum);
echo "Original value is $origNum <br/>";
addSix($origNum);
echo "Original value is $origNum <br/>";

/* 
About the function addFive($num)
---------------------------------
The parameter $num does not have an ampersand (&). That means PHP passes a copy of the value, not the original variable. Inside the function, $num += 5; changes only the copy, not the real $origNum. So, after calling:
addFive($origNum);
The value of $origNum is still 10.

About the function addSix(&$num)
--------------------------------
The parameter has an ampersand (&) i.e. &$num. This means the function receives the actual variable (by reference), not just a copy. So when you do $num += 66;, it changes the real $origNum in memory.So, after calling:
addSix($origNum);
Now $origNum becomes 10 + 66 = 76.

The final Output
-----------------
When you run the full php script:
After addFive($origNum) → still 10
Original value is 10
After addSix($origNum) → now 76
Original value is 76

Therefore, final Output in Browser:
Original value is 10
Original value is 76


Remember:
---------
Without & → PHP passes by value (makes a copy).
With & → PHP passes by reference (changes the original).

 */