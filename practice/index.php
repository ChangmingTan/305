<?php
/*  Changming Tan
    Jan 21, 2020
    305/practice/index.html
    I'm learning PHP!
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Today is Tuesday</h1>

<?php
echo "<p>Hello World</p>";
?>

<h2>Nice to meet you</h2>

<?php
$message = "Hello world";
echo "<p>$message</p>";
echo '<p>$message</p>';

//echo '<p>Hello World</p>'; // runs faster than ""
//echo "<p>Hello World</p>";

$var_name = 5;
$varName = true;
$VarName = "this is not the same";
$var2 = "contains a number";
$var2 = 5;
$var2 = 5.0;
$var2 = false;

echo '$var_name contains ' . $var_name;

echo "<p>".(5 / 3)."</p>";
?>

<?php
echo "<p>Hello world</p>";
?>

<?php

$str = "Tom^Dick^Harry";
$arr = explode("^", $str);
print_r($arr);
?>

<?php
echo "<p>Let's go!</p>";
echo '<p>Let\'s go!</p>';

$veg1 = "broccoli";
$veg2 = "carrot";

echo "Do you have any ".$veg2."s?";
echo "Do you have any {$veg2}s?";

echo strlen("Howdy!");  //6
echo strlen("Hi there");    //8
echo str_word_count("hi there");    //2
echo strpos("Hello", "lo")  //3
?>

<?php

$phrase = " I like PHP ";
echo "<p>".trim($phrase)."</p>";
echo "<p>".strlen($phrase)."</p>";
echo "<p>".str_replace("like", "love", $phrase)."</p>";
echo "<p>".strtoupper($phrase)."</p>";
?>

</body>
</html>