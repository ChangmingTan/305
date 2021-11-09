<?php
function validForm()
{
    return validGpa($_POST['gpa'])
        && validName($_POST['firstName'])
        && validName($_POST['lastName']);
}

function validGpa($gpa)
{
    if (!empty($gpa)) {
        if ($gpa < 0.0 || $gpa > 4.0) {
            echo "<p>GPA must be 0.0 to 4.0</p>";
            return false;
        }
    }
    return true;
}

function validName($name)
{
    if (empty($name)) {
        echo "<p>First and last name are both required</p>";
        return false;
    }
    return true;
}