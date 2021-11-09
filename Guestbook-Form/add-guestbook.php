<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//var_dump($_GET);

//Connect to your database
require('/home/ctangree/db.php');

//Get the form data and "escape" it
$fname = mysqli_real_escape_string($cnxn, $_POST['fname']);
$lname = mysqli_real_escape_string($cnxn, $_POST['lname']);
$jobtitle = mysqli_real_escape_string($cnxn, $_POST['jobtitle']);
$company = mysqli_real_escape_string($cnxn, $_POST['company']);
$linkedinurl = mysqli_real_escape_string($cnxn, $_POST['linkedinurl']);
$email = mysqli_real_escape_string($cnxn, $_POST['email']);

if ($_POST['meet'] != "other") {
    $meet = mysqli_real_escape_string($cnxn, $_POST['meet']);
} else {
    $meet = mysqli_real_escape_string($cnxn, $_POST['other']);
}

$message = mysqli_real_escape_string($cnxn, $_POST['message']);

if (isset($_POST['checkbox'])) {
    $checkbox = "yes";
} else {
    $checkbox = "no";
}

if (isset($_POST['method'])) {
    $method = $_POST['method'];
} else {
    $method = "";
}


//write sql statement
$sql = "INSERT INTO Guestbook(FirstName, LastName, JobTitle, Company, LinkedInURL, Email, Meet, Message, MailingList, Method)
        VALUES('$fname', '$lname', '$jobtitle', '$company', '$linkedinurl', '$email', '$meet', '$message', '$checkbox', '$method')";
//echo $sql;

//send to database
$result = mysqli_query($cnxn, $sql);

//Print a confirmation
if ($result) {
    //echo "Guestbook inserted successfully!";
    //echo '<a href=guestbook.php>View Guestbook</a>';
}

