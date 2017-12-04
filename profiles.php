<?php
    include_once("config.php");

    if (isset($_GET['username']))
    {
        $username = $_GET['username'];
        $sql = "SELECT * FROM user WHERE username='$username'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["username"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
              
                echo '<tr><td>Name:</td><td>'.$row["username"].'</td></tr>';
                echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
               
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
   
    include_once("menu.php");
?>