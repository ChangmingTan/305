<?php
//turn on air reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//var_dump($_POST);


//connect to database
require('/home/ctangree/db.php');

//get the form data and "escape" it
$song = mysqli_real_escape_string($cnxn, $_POST['song']);
$artist = mysqli_real_escape_string($cnxn, $_POST['artist']);
$album = mysqli_real_escape_string($cnxn, $_POST['album']);
$time = mysqli_real_escape_string($cnxn, $_POST['time']);
$genre = mysqli_real_escape_string($cnxn, $_POST['genre']);
$year = mysqli_real_escape_string($cnxn, $_POST['year']);
$plays = mysqli_real_escape_string($cnxn, $_POST['plays']);

//write sql statement
$sql = "INSERT INTO music(song, artist, album, time, genre, year, plays)
    VALUES('$song', '$artist', '$album', '$time', '$genre', '$year', '$plays')";
//echo $sql;

//send to database
$result = mysqli_query($cnxn, $sql);

//print a confirmation
if($result){
    echo "Song inserted successfully!";
    echo '<a href=songs.php>View songs</a>';
}