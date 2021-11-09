<pre>
<?php

// var_dump($_GET);
// var_dump($_SERVER);

$animals = array("bear", "cat", "dog");
// var_dump($animals);
$animals[] = "elephant";

echo "I want a $animals[3]<br>";   // elephant

// function to loop the array
function printArr($arr)
{
    /*for ($i = 0; $i < sizeof($animals); $i++) {
        echo $animals[$i] . "<br>";
    }*/

    foreach ($arr as $item) {
        echo $item . "<br>";
    }
}

// printArr($animals);

$names = array("Adam", "Berry", "Cathy", "Dan", "Frank");
$names[] = "Roldan";
var_dump($names);
echo $names[0] . "<br>";
echo $names[sizeof($names) - 1] . "<br>";   // last element of the array

printArr($names);

$nameList = implode("<br>", $names);
echo $nameList;

for ($i = 0; $i < sizeof($names); $i++) {
    echo $names[$i] . "<br>";
}

foreach ($names as $name) {
    echo $name . "<br>";
}


?>
</pre>