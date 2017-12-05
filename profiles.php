
<?php
    include_once("config.php");

    if (isset($_GET['email']))
    {
        $firstname = $_GET['email'];
        $sql = "SELECT * FROM user WHERE email ='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["username"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
               
                echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

        $sql = "SELECT * FROM user";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<h1>'.$row["username"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
               
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