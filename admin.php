<?php

// 1. Create a database connection

/*
$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

$query  = "SELECT * ";
$query .= "FROM survey ";
$query .= "ORDER BY counter ASC";

$result = mysqli_query($connection, $query);	
*/

 session_start();
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 


$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

    $query  = "SELECT * ";
    $query .= "FROM survey ";
    $query .= "ORDER BY counter ASC";

    $result = mysqli_query($connection, $query);

?>

<?php
$currentTitle = "Admin Page";
include "inc/top.inc";


?>

<!-- Navigation -->
<nav class="main-menu">
    <span class="logo"><a href="#">Admin-Survey</a></span>
    <ul>
        <li><span>Go to: </span></li>
        <li><a href="mainadmin.php">Home</a></li>
        <li><a href="#table">Table</a></li>
        <li><a href="#delete">Delete</a></li>
        <li><a href="#update">Update</a></li>
    </ul>
</nav>

<div class="admin" id="table">
    <h2>Survey Database Table</h2>

    <table border>
        <tr>      
            <th>Counter ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Crawling</th>
            <th>In the End</th>
            <th>Faint</th>
            <th>Numb</th>
            <th>What I've Done</th>
            <th>Favorite Song</th>
            <th>Reason</th>
        </tr>

        <?php
        while($pages = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $pages["counter"]; ?></td>
            <td><?php echo $pages["fname"]; ?></td>
            <td><?php echo $pages["lname"]; ?></td>
            <td><?php echo $pages["email"]; ?></td>
            <td><?php echo $pages["crawling"]; ?></td>
            <td><?php echo $pages["intheend"]; ?></td>
            <td><?php echo $pages["faint"]; ?></td>
            <td><?php echo $pages["numb"]; ?></td>
            <td><?php echo $pages["what"]; ?></td>
            <td><?php echo $pages["favsong"]; ?></td>
            <td><?php echo $pages["message"]; ?></td>
        </tr>
        <?php } ?>

    </table>
</div>

<div class="admin" id="delete">
    <h2>Delete Entry</h2>
    <form method="post" action="admin-delete.php">
        <p>Enter the counter ID of the entry you want to delete from the table above. Click 'Submit' to delete the entry.</p>
        <label for="counter">Choose Counter ID:</label>
        <input type="number" class="counter" name="counter" id="counter">
        <input type="submit" name="submit" class="btn btn-primary" id="submit" value="Submit"> 
    </form>
</div>

<div class="admin" id="update">
    <h2>Update Entry</h2>
    <form method="post" action="admin-update.php">
        <p>Enter the counter ID of the entry you want to update from the table above. Then fill out all the fields below with the values you want to update for the entry. Please re-enter original values for those values you do not want to change.</p>
        <label for="counter">Choose Counter ID:</label>
        <input type="number" class="counter" name="counter" id="counter">
        <?php include "inc/survey.inc"; ?>
    </form>
</div>

<?php
include "inc/bottom.inc";
?>

<?php
// 5. Close database connection
mysqli_close($connection);
?>
