<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to db
require('/home/ctangree/db.php');

//var_dump($_GET);
$action = "add";
$sid = $first = $last = $gpa = $birthdate = $advisor = "";

//See if this an edit
if (!empty($_GET['sid'])) {

    // Get the SID
    $sid = $_GET['sid'];
    //echo $sid;

    // Set a flag
    $action = "edit";

    // Query the database
    $sid = mysqli_real_escape_string($cnxn, $sid);
    $sql = "SELECT * FROM student WHERE sid = '$sid'";
    //echo $sql;
    $result = mysqli_query($cnxn, $sql);
    //var_dump($result);
    $row = mysqli_fetch_array($result);
    //var_dump($row);

    // Get the data from the row
    $first = $row['first'];
    $last = $row['last'];
    $birthdate = $row['birthdate'];
    $gpa = $row['gpa'];
    $advisor = $row['advisor'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRC Student</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php
    $text = $action == "add" ? "Add a New" : "Edit";

    echo "<h3>$text Student</h3>";

    $url = "add-student.php";
    if ($action = 'edit') {
        $url .= '?action=edit';
    }
    ?>


    <form id="student-form" action="<?php echo $url ?>" method="post">

        <div class="form-group">
            <label for="sid">SID</label>
            <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $sid; ?>">
        </div>
        <div class="form-group">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $first; ?>">
        </div>
        <div class="form-group">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $last; ?>">
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?php echo $birthdate; ?>">
        </div>
        <div class="form-group">
            <label for="gpa">GPA</label>
            <input type="text" class="form-control" id="gpa" name="gpa" value="<?php echo $gpa; ?>">
        </div>
        <div class="form-group">
            <label for="advisor">Advisor</label>
            <select id="advisor" name="advisor">
                <option value="none">--Select--</option>

                <?php
                //Write query
                $sql = "SELECT advisor_id as id, advisor_last as last, advisor_first as first
                        FROM advisor";

                //Send query to database and get result
                $result = mysqli_query($cnxn, $sql);

                //Process result
                foreach ($result as $row) {

                    //Get the row data
                    $id = $row['id'];
                    $first = $row['first'];
                    $last = $row['last'];

                    echo "<option value='$id' ";

                    //If this is the advisor of the student being updated, select it
                    if ($id == $advisor) {
                        echo "selected";
                    }
                    echo ">$last, $first</option>";
                }

                ?>

            </select>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">
            <?php
            echo $action == 'add' ? 'Submit' : 'Save Changes';
            ?>
        </button>
    </form>
    <a href="students.php">View students</a>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>