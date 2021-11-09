<!-- Changming Tan
     1/31/2020
     URL: https://ctan.greenriverdev.com/305/pair-program/php-functions/stairs.php


     Create a new file called stairs.php. Add a block comment header with your names, the date,
     and the file path and description. Turn on error reporting.

     Write a PHP function stairsteps() that takes a parameter representing a number of steps,
     and draws the picture below. If the parameter is an invalid value, then ignore it.
     Eliminate redundancy from your code.

	              o  *****
	             /|\ *   *
	             / \ *   *
	          o  *****   *
	         /|\ *       *
	         / \ *       *
	      o  *****       *
	     /|\ *           *
	     / \ *           *
	  o  *****           *
	 /|\ *               *
	 / \ *               *
    *********************
-->

<pre>
<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

function stairsteps($steps)
{

    $head = "&nbsp;&cir;&nbsp;&nbsp;&nbsp;&nbsp;*****";
    $body = "/|\&nbsp;&nbsp;*";
    $leg = "/ \&nbsp;&nbsp;*";

    for ($i = 0; $i <= $steps; $i++) {
        if ($steps > 0) {
            $frontSpace = str_repeat("&nbsp;&nbsp;&nbsp;", $steps - $i);;
            $backSpace = str_repeat("&nbsp;&nbsp;", $steps * $i);;

            //echo $frontSpace . $head . str_repeat("&nbsp;&nbsp;<br>", 0 + $i);
            echo $frontSpace . $head . $backSpace . "*<br>";
            echo $frontSpace . $body . $backSpace . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
            echo $frontSpace . $leg . $backSpace . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
        }
    }
    echo str_repeat("*****", $steps + 1);
}

echo stairsteps(4);


?>
</pre>
