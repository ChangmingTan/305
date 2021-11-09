<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('includes/check-login.php');

//Connect to db
require('/home/ctangree/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook Summary</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="stytlesheet.css">
</head>
<body>
<div class="container">

    <h3>Guestbook Summary</h3>

    <table id="guest-table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job Title</th>
            <th>Company</th>
            <th>LinkedIn URL</th>
            <th>Email</th>
            <th>Meet</th>
            <th>Message</th>
            <th>MailingList</th>
            <th>Mailing Format</th>
            <th>Datestamp</th>
        </tr>
        </thead>

        <?php

        //Define a query
        $sql = "SELECT * FROM Guestbook";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $fname = $row['FirstName'];
            $lname = $row['LastName'];
            $jobtitle = $row['JobTitle'];
            $company = $row['Company'];
            $linkedinurl = $row['LinkedInURL'];
            $email = $row['Email'];
            $meet = $row['Meet'];
            $message = $row['Message'];
            $checkbox = $row['MailingList'];
            $method = $row['Method'];
            $datestamp = $row['Datestamp'];

            echo "<tr>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$jobtitle</td>
                    <td>$company</td>
                    <td>$linkedinurl</td>
                    <td>$email</td>
                    <td>$meet</td>
                    <td>$message</td>
                    <td>$checkbox</td>
                    <td>$method</td>
                    <td>$datestamp</td>
                  </tr>";
        }

        ?>
    </table>
    <a href="index.php" class="btn btn-primary" >Back to Guestbook Form</a><br>
    <a href="logout.php" class="btn btn-primary" >Logout</a>
</div>


<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#guest-table').DataTable();
</script>
</body>
</html>