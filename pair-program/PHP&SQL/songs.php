<pre>
<?php
/**
 * https://akaur.greenriverdev.com/305/songs/songs.php
 *  Amardip Kaur & Changming Tan
 *  2/20/2020
 *  IT 305 Pair Program (Music)
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//connecting to database
require('/home/ctangree/db.php');


?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Songs</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
<div class="container">

    <h1>Song Summary</h1>
    <p><a href="newSongMain.php">(Add Songs)</a></p>

    <table id="myTable">
        <thead>
        <tr>
            <th>id</th>
            <th>Song</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Time</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Plays</th>
        </tr>
        </thead>

        <?php
        $sql = "SELECT * FROM music";

        //runs $sql line with my database
        $result = mysqli_query($cnxn, $sql);

        //var_dump($result);

        //get table info from database
        foreach ($result as $row) {
            $id = $row['id'];
            $song = $row['song'];
            $artist = $row['artist'];
            $album = $row['album'];
            $time = $row['time'];
            $genre = $row['genre'];
            $year = $row['year'];
            $plays = $row['plays'];

            //print it
            echo "<tr>
                    <td>$id</td>
                    <td>$song</td>
                    <td>$artist</td>
                    <td>$album</td>
                    <td>$time</td>
                    <td>$genre</td>
                    <td>$year</td>
                    <td>$plays</td>
                  </tr>";
        }
        ?>
    </table>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $('#myTable').DataTable();
</script>

</body>
</html>