<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .navbar-inverse {
            background-color: <?php echo $_SESSION['color']; ?>;
        }

        a {
            font-size: <?php echo $_SESSION['size']; ?>px;
        }
    </style>
</head>
