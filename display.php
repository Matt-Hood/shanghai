<?php 
//display all users
include_once("config.php");

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $firstname = $row["username"];
        echo '<tr><td><a href="/shanghai/profiles.php?first='.$firstname.'">'.$firstname.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
include_once("menu.php");
?>