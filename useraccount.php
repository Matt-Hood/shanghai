<?php
    include_once("config.php");
session_start();

$_SESSION['user'] = $row['userID'];
    
    if (isset($_SESSION['user']))
    {
       
        
        $sql = " SELECT userID, username, password FROM user WHERE email='$email' ";
        $_SESSION['user'] = $row['userID'];
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["username"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
              
                echo '<tr><td>Username:</td><td>'.$row["username"].'</td></tr>';
                echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>Country:</td><td>'.$row["country"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

       // $sql = "SELECT * FROM user";
        $id = isset($_POST['email']) ? $_POST['email'] : '';

        $sql = "SELECT * FROM user WHERE email ='$id'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
               
                echo '<tr><td>Username:</td><td>'.$row["username"].'</td></tr>';
                echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
                
                echo '</table>';
                
            }
        }
        else {
           echo "0 results";
        }
    }
    
    include_once("menu.php");
?>