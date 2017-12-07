<!-- Code from http://bit.ly/2AVRi0i used for help-->

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
<?php
    include_once("include/cnfig.php");

     session_start();
  if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
   

    if (isset($_GET['name']))
    {
        $firstname = $_GET['name'];
        $sql = "SELECT * FROM user WHERE username ='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["username"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
               
                echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>Bio:</td><td>'.$row["bio"].'</td></tr>';
               
                echo '<tr><td>Favsong:</td><td>'.$row["favsong"].'</td></tr>';
                echo '<tr><td>Birthday:</td><td>'.$row["birthday"].'</td></tr>';
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
                echo '<tr><td>Bio:</td><td>'.$row["bio"].'</td></tr>';
               
                echo '<tr><td>Favsong:</td><td>'.$row["favsong"].'</td></tr>';
                echo '<tr><td>Birthday:</td><td>'.$row["birthday"].'</td></tr>';
                echo '</table>';
                
            }
        }
        else {
           echo "0 results";
        }
    }
    
    include_once("menu.php");
?>