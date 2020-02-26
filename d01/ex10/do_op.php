#!/usr/bin/php
<?php
if ($argc == 4)
{
    $a = trim($argv[1], " \t");
    $b = trim($argv[3], " \t");
    $op = trim($argv[2], " \t");
    if ($op == "+")
        echo $a + $b;
    else if ($op == "-")
        echo $a - $b;
    else if ($op == "/")
        echo $a / $b;
    else if ($op == "*")
        echo $a * $b;
    else if ($op == "%")
        echo $a % $b; 
   echo "\n";
}
else
    echo "Incorrect Parameters\n";
?>