<?php session_start();
//display all users
include_once("config.php");

$username = $_SESSION['name'];
$sql = "SELECT * FROM user WHERE username='$username'";;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $username = $row["username"];
        echo '<tr><td><a href="/shanghai/profiles.php?first='.$username.'">'.$username.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
include_once("menu.php");
?>