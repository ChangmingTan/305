<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// header
$title = "Admin Page";
require('includes/check-login.php');
require('includes/header.php');

?>


<body>

<div class="container">
    <?php
    include("includes/navbar.html");
    ?>
    <h1>Admin Page</h1>
    <p>This page contains super-sensitive data</p>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>