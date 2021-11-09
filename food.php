<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$greeting = "Hello";

function hello($name = "")
{
    global $greeting;

    $msg = "<p>$greeting";
    if ($name != "") {
        $msg .= ", $name";
    }
    $msg .= "!</p>";
    echo $msg;
}

hello("Joe");
hello();

function crazy($num)
{
    if ($num < 0)
        return false;
    else if ($num < 10)
        return $num;
    else
        return "Crazy";
}

$val1 = crazy(-5);
$val2 = crazy(8);
$val3 = crazy(100);

echo "$val1, $val2, $val3";

// define a constant
define("TAX_RATE", 0.10);
$total = 57.50 * TAX_RATE;

$day = 5;
switch ($day) {
    case 1:
        print "Mon";
        break;
    case 2:
        print "Tue";
        break;
    case 3:
        print "Invalid";
}

for ($i = 0; $i<5; $i++) {
    echo "$i<br>";
}

$x = 0;
while ($x <= 5) {
    echo "$x<br>";
    $x++;
}

echo $x == 5 ? "tacos" : "pizza";

/* echo "<pre>";
var_dump($_SERVER);
echo "</pre>"; */


// define a function takes two parameters and prints their average
// modify function to return an average
// write a function that takes a percentage grade as a parameter
// and returns the letter grade equivalent
// 90-100 = A
// 80-90 = B
// 70-80 = C
// 60-70 = D
// <60 = E

function average ($grade1, $grade2) {
    return ($grade1 + $grade2) / 2;
}

function grade($percentage) {
    if ($percentage > 90 && $percentage < 100)
        return "A";
    else if ($percentage > 80 && $percentage < 90)
        return "B";
    else if ($percentage > 70 && $percentage < 80)
        return "C";
    else if ($percentage > 60 && $percentage < 70)
        return "D";
    else
        return "E";
}

$result = grade(average(80, 69));
echo "<p>$result</p>";

?>