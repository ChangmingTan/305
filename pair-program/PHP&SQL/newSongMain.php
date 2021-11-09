
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Song</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>

<div class="container">
    <h3>Add a New Song</h3>
    <p><a href="songs.php">(View songs)</a></p>

    <form id="myForm" action="add-song.php" method="post">

        <div class="form-group">
            <label for="song">Song</label>
            <input type="text" class="form-control"
                   name="song">
        </div>
        <div class="form-group">
            <label for="artist">Artist</label>
            <input type="text" class="form-control"
                   name="artist">
        </div>
        <div class="form-group">
            <label for="album">Album</label>
            <input type="text" class="form-control"
                   name="album">
        </div>
        <div class="form-group">
            <label for="time">Time</label>
            <input type="text" class="form-control"
                   name="time">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select  name="genre">
                <option value="none">--Select--</option>
                <option value='1'>Rock</option>
                <option value='2'>Jazz</option>
                <option value='3'>Hip-Hop</option>
                <option value='4'>Country</option>

            </select>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control"
                   name="year">
        </div>
        <div class="form-group">
            <label for="plays">Plays</label>
            <input type="text" class="form-control"
                   name="plays">
        </div>

        <button id="submit" type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
