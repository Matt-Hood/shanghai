<!-- Code from http://bit.ly/2AVRi0i used for help-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/navigation.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">

<h1>Search by Email</h1>
<form action="search.php" method="post" enctype="multipart/form-data">
    Email:  <input type="text" name="email" value="" placeholder="" size="20">
    <input type="submit" value="Search" name="submit">
</form>

<?php 
session_start();

 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }

include_once("include/cnfig.php");

    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
        
        $sql = " SELECT * FROM user WHERE email ='$email';";
        
        $res = $conn->query($sql);
        
        if ($res->num_rows > 0) {
   ?>

   <h3>Search results:</h3>

   <?php
            while($row = $res->fetch_assoc()) {
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
                
                echo '<tr><td>Name:</td><td>'.$row["username"].'</td></tr>';
                echo '<tr><td>email:</td><td>'.$row["email"].'</td></tr>';
                echo '<tr><td>BIO:</td><td>'.$row["bio"].'</td></tr>';
               
                echo '<tr><td>Favorite Song:</td><td>'.$row["favsong"].'</td></tr>';
                echo '<tr><td>Birthday:</td><td>'.$row["birthday"].'</td></tr>';
              
                echo '</table>';
                echo '<hr />';
            }
        }
        else {
           echo "0 results";
        }
    }
    include_once("menu.php");

?>