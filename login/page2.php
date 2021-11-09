<?php

////Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*echo "<pre>";
var_dump($_SERVER);
echo "</pre>";*/

// header
$title = "Page 2";
require('includes/check-login.php');
require('includes/header.php');


?>

<body>

<div class="container">
    <?php
    include ("includes/navbar.html");
    ?>

    <h1>Page 2</h1>
    <p>This is another page containing super-sensitive data</p>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>