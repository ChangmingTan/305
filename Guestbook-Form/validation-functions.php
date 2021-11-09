<?php


function validForm()
{
    return validName($_POST['fname'])
        && validName($_POST['lname'])
        && validEmail($_POST['email'])
        && validLinkedin($_POST['linkedinurl'])
        && validMeet($_POST['meet']);
}

function validName($name)
{
    return !empty(trim($name));
}

function validEmail($email)
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}

function validLinkedin($linkedinurl)
{
    return filter_var(trim($linkedinurl), FILTER_VALIDATE_URL);
}

function validMeet($meet)
{
    $options = array("meetup", "jobfair", "haven't met", "other");
    return ($meet != "none" && in_array($meet, $options));
}

?>
