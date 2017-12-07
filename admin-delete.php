<?php
session_start();
/*
$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');
*/
$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;}

$query  = "DELETE FROM survey ";
$query .= "WHERE counter = {$_POST['counter']} ";
$query .= "LIMIT 1";
$result = mysqli_query($connection, $query);
?>



<?php
$currentTitle = "Delete Database";
include "inc/top.inc";
?>

<!-- Navigation -->
<nav class="main-menu">
    <span class="logo"><a href="#">CSC174 Assignment #8</a></span>
    <ul>
        <li><span>Go to: </span></li>
        <li><a href="index.php">Survey</a></li>
        <li><a href="admin.php">Admin</a></li>
    </ul>
</nav>

<div class="admin">

    <h2>Status</h2>

    <div class="thanks">
        <?php
        if ($result) {
        ?>
        <p>
            Record #<?php echo $_POST['counter'] ?> has been deleted successfully! Thank you for your changes.
        </p>

        <?php
        } else {
            die("<p>ERROR: Database query failed. Please go back and try again.</p>");
        }
        ?>

        <a href="admin.php">Return to Admin Page</a>
    </div>
</div>

<?php
include "inc/bottom.inc";
?>


<?php
// 5. Close database connection
mysqli_close($connection);
?>