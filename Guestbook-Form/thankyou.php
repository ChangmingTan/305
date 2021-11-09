<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you!</title>
</head>
<body>

<pre>
<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("validation-functions.php"); // use require() when something essential, use include if it is not essential, stop if don't find the file


// create a flag to track validation
$isValid = true;

// initialize all variables
$fname = "";
$lname = "";
$jobtitle = trim($_POST['jobtitle']);
$company = trim($_POST['company']);
$linkedinurl = "";
$email = "";
$meet = null;
$message = trim($_POST['message']);
//$mailing = $_POST['mailing'];
//$method = $_POST['method'];

// First and last name are required
if (validName($_POST['fname'])) {
    $fname = trim($_POST['fname']);
} else {
    echo "<p>First name is required.</p>";
    $isValid = false;
}

if (validName($_POST['lname'])) {
    $lname = trim($_POST['lname']);
} else {
    echo "<p>Last name is required.</p>";
    $isValid = false;
}

// Email address, if supplied, must be valid
if ((isset($_POST['checkbox']) && !empty($_POST['email'])) || (!isset($_POST['checkbox']) && !empty($_POST['email']))) {
    if (validEmail($_POST['email'])) {
        $email = trim($_POST['email']);
    } else {
        echo "<p>Email is required.</p>";
        $isValid = false;
    }
}

if ((!empty($_POST['linkedinurl']))) {
    if (validLinkedin($_POST['linkedinurl'])) {
        $linkedinurl = trim($_POST['linkedinurl']);
    } else {
        echo "<p>LinkedIn URL is required.</p>";
        $isValid = false;
    }
}

if (validMeet($_POST['meet'])) {
    $meet = $_POST['meet'];
} else {
    echo "<p>How we meet is required.</p>";
    $isValid = false;
}

// If there are no errors, then display a summary of the data.
if ($isValid) {
    // display the form data
    echo "<h1>Thank you for signing my guestbook!</h1>";
    echo "<h2>Information Summary</h2>";
    echo "<p>Name: $fname $lname</p>";
    echo "<p>Job Title: $jobtitle</p>";
    echo "<p>Company: $company</p>";
    echo "<p>LinkedIn URL: $linkedinurl</p>";
    echo "<p>Email address: $email</p>";
    echo "<p>How did we meet: $meet</p>";
    echo "<p>Message: $message</p>";
//    echo "<p>Add me to the mailing list: $mailing</p>";
//    echo "<p>Email format: $emailFormat</p>";


    require("add-guestbook.php");
}

// send email
//$fromAddress = "poppa@gmail.com";
//$toAddress = "Ctan9@mail.greenriver.edu";
//$subject = "Order Confirmation";
//$headers = "From: Poppa's Pizza <$fromAddress>";
//$message = "Your order has been confirmed\r\n";
//$message .= "Name: $fname $lname\r\n";
//$message .= "Address: $address\r\n";

//mail($toAddress, $subject, $message, $headers);

?>
</pre>

</body>
</html>