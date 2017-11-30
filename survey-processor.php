<!-- Database connecting, processing and inserting data -->
<?php
error_reporting(0);
$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

// Often these are form values in $_POST
$fname = Trim(stripslashes($_POST['first']));
$lname = Trim(stripslashes($_POST['last']));
$email = Trim(stripslashes($_POST['email']));
$album = Trim(stripslashes($_POST['favorite-album']));
$crawling = Trim(stripslashes($_POST['crawling-check']));
$intheend = Trim(stripslashes($_POST['intheend-check']));
$faint = Trim(stripslashes($_POST['faint-check']));
$numb = Trim(stripslashes($_POST['numb-check']));
$what = Trim(stripslashes($_POST['what-check']));
$favsong = Trim(stripslashes($_POST['favorite-song']));
$message = htmlspecialchars($_POST['message']);

// Escape all strings
$fname = mysqli_real_escape_string($connection, $fname);
$lname = mysqli_real_escape_string($connection, $lname);
$email = mysqli_real_escape_string($connection, $email);
$album = mysqli_real_escape_string($connection, $album);
$crawling = mysqli_real_escape_string($connection, $crawling);
$intheend = mysqli_real_escape_string($connection, $intheend);
$faint = mysqli_real_escape_string($connection, $faint);
$numb = mysqli_real_escape_string($connection, $numb);
$what = mysqli_real_escape_string($connection, $what);
$favsong = mysqli_real_escape_string($connection, $favsong);

// Databse query of inserting form data into table
$query  = "INSERT INTO survey (";
$query .= "  fname, lname, email, album, crawling, intheend, faint, numb, what, favsong, message";
$query .= ") VALUES (";
$query .= "  '{$fname}', '{$lname}', '{$email}', '{$album}', '{$crawling}', '{$intheend}', '{$faint}', '{$numb}', '{$what}', '{$favsong}', '{$message}' ";
$query .= ")";

$result = mysqli_query($connection, $query);

?>

<!-- Submission Page -->
<?php
$currentTitle = "Submission";
include "inc/top.inc";
?>

<!-- Navigation -->
<nav class="main-menu">
    <span class="logo"><a href="#">CSC174 Assignment #8</a></span>
    <ul>
        <li><span>Go to: </span></li>
        <li><a href="index.php">Survey</a></li>
    </ul>
</nav>

<div class="admin">
    <div class="response">
        <div class="row align-items-center">
            <div class="column col-md-12 col-sm-12 col-xs-12">
                <h2>Thank you <?php echo $_POST["first"]; ?> for your response.</h2>
            </div><!-- close column -->
        </div><!-- close row -->

        <div class="row align-items-center">
            <div class="column col-md-12 col-sm-12 col-xs-12 thanks">
                <?php
                if ($result) {
                    echo "<p>SUCCESS: Submission was a success! Thank you again for completing the survey.</p>";
                ?>

                <?php
                } else {
                    die("<p>ERROR: Failed to record answers. Please return and try again.</p>");
                }
                ?>
                <a href="index.php">Return to survey</a>
            </div><!-- close column -->
        </div><!-- close row -->
    </div>
</div>

<?php
include "inc/bottom.inc";
?>
<!-- End of Submission Page -->

<?php
// 5. Close database connection
mysqli_close($connection);
?>