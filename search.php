<h1>Search by Email</h1>
<form action="search.php" method="post" enctype="multipart/form-data">
    Country:  <input type="text" name="email" value="" placeholder="" size="20">
    <input type="submit" value="Search" name="submit">
</form>

<?php 

include_once("config.php");

    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
        
        $sql = "SELECT * FROM user WHERE email='$email';";
        
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
    include_once("menu.php");

?>