<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//var_dump($_GET);

//Pretend that we validated
require('validate.php');
if (!validForm()) {
    die("<p>Please click back and try again</p>");
}

//Connect to your database
require('/home/ctangree/db.php');

//Get the form data and "escape" it
$sid = mysqli_real_escape_string($cnxn, $_POST['sid']);
$firstName = mysqli_real_escape_string($cnxn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($cnxn, $_POST['lastName']);
$birthdate = mysqli_real_escape_string($cnxn, $_POST['birthdate']);
$gpa = mysqli_real_escape_string($cnxn, $_POST['gpa']);
$advisor = mysqli_real_escape_string($cnxn, $_POST['advisor']);

//See if this is an update
if ($_GET['action'] == 'edit') {

    $sql = "UPDATE student
            SET sid = '$sid', first = '$firstName', last = '$lastName',
            birthdate = '$birthdate', gpa = '$gpa', advisor = '$advisor'
            WHERE sid = '$sid'";
} else {
    //Write an SQL statement
    $sql = "INSERT INTO student 
            VALUES ('$sid', '$firstName', '$lastName',
                    '$birthdate', '$gpa', '$advisor')";
}

//echo $sql;
//return;

//Send the query to the database
$result = mysqli_query($cnxn, $sql);

//Print a confirmation
if ($result) {
    echo "Student inserted successfully!";
    echo '<a href=students.php>View students</a>';
}

