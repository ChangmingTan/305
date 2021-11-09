<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//set a cookie that lasts for an hour
setcookie('name', 'Cookie Monster', time() + 3600);
//setcookie('movie', 'Monster LLC');


//use header file order: session_start() >>> header() >>> setcookie()
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

<?php
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = "Stranger";
}
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "Stranger";
echo "<h2>Hello, $name</h2>";
?>
This is page 1
</body>
</html>