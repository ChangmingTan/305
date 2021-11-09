<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to db
require('/home/ctangree/db.php');

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="icon" href="https://ps.w.org/gwolle-gb/assets/icon-256x256.png?rev=1114688" type="image/png"
          sizes="16x16">

    <!-- stylesheet -->
    <link rel="stylesheet" href="stytlesheet.css">

    <title>Guestbook</title>
</head>
<body>
<div id="main">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to My Guestbook!</h1>
        <p class="lead">I'd love to have you to leave your contact information in the form down below for me! Thank you
            so much!</p>
        <hr class="my-4">
        <p>Admin can log in and see the Guestbook summary.</p>
        <a class="btn btn-primary" href="guestbook.php">Admin</a>
    </div>

    <form id="guestform" action="thankyou.php" method="post">
        <!-- Contact Information -->
        <fieldset class="form-row">
            <legend>Contact Info</legend>
            <p class="asterisk">* = required</p><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <span class="asterisk">*</span>
                    <input type="text" class="form-control" id="fname" name="fname" value="">
                    <span class="err" id="errFname">Please enter first name</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <span class="asterisk">*</span>
                    <input type="text" class="form-control" id="lname" name="lname" value="">
                    <span class="err" id="errLname">Please enter last name</span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jobtitle">Job Title</label>
                    <input type="text" class="form-control" id="jobtitle" name="jobtitle" value="">
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" value="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="linkedinurl">LinkedIn URL</label>
                    <input type="text" class="form-control" id="linkedinurl" name="linkedinurl" value="">
                    <span class="err" id="errLinkedinurl">LinkedIn URL must start with "http" and end with ".com"</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" value="">
                    <span class="err" id="errEmail">Email address must contain an @ symbol and a dot (.) and remove unnecessary space </span>
                </div>
            </div>
        </fieldset>

        <!-- How we met -->
        <fieldset class="form-row">
            <legend>How we met</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="meet">How did we meet?</label>
                    <span class="asterisk">*</span>
                    <select class="form-control" id="meet" name="meet">
                        <option value="none">---Please Select---</option>
                        <option value="meetup">Meetup</option>
                        <option value="jobfair">Job Fair</option>
                        <option value="haven't met">We haven't met yet</option>
                        <option value="other">Other</option>
                    </select>
                    <span class="err" id="errMeet">Please select how we met</span>
                </div>
                <div class="form-group col-md-6" id="ifother">
                    <label for="other">Other (please specify)</label>
                    <input type="text" class="form-control" id="other" name="other" value="">
                    <span class="err" id="errOther">Please specify how we met</span>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" value=""></textarea>
            </div>
        </fieldset>

        <!-- Mailing List -->
        <fieldset class="form-row">
            <legend>Mailing list</legend>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkbox" name="checkbox">
                <label class="form-check-label" for="checkbox">Please add me to your mailing list!</label>
            </div>

            <div id="emailFormat">
                <label>Please choose an email format:</label>
                <div class="form-row">
                    <div class="form-row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="method" id="html" value="html">
                            <label class="form-check-label" for="html">HTML</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="method" id="text" value="text">
                            <label class="form-check-label" for="text">Text</label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<!-- validation javascript -->
<!--Disable client-side (JavaScript) validation on your form by commenting out the call to your JS validate() function. If you have any HTML validation (e.g. type='url' or required), then you will need to remove it.-->
<script src="form-validation.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>