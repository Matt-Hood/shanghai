<?php 

include_once("config.php");

    if (isset($_SESSION['userID']))
    {
        //$email = $_POST['email'];

       // $_SESSION['userid'] = $id

        $id = $_SESSION['userID'];

        
        $sql = " SELECT * FROM user WHERE userID = '$id';";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   ?>

   <h3>Search results:</h3>

   <?php
            while($row = $result->fetch_assoc()) {
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
                
                echo '<tr><td>Name:</td><td>'.$row["username"].'</td></tr>';
                echo '<tr><td>email:</td><td>'.$row["email"].'</td></tr>';
              
                echo '</table>';
                echo '<hr />';
            }
        }
        else {
           echo "0 results";
        }
    }
   

?>