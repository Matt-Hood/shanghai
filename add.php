<form action="add.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Name:</td><td><input type="text" name="name" value="" placeholder="" size="20"></td></tr>
    <tr><td>Email:</td><td><input type="text" name="email" value="" placeholder="" size="20"></td></tr>
    <tr><td>Password:</td><td><input type="text" name="pass" value="" placeholder="" size="20"></td></tr>
   
    </table>
    <input type="submit" value="Create" name="submit">
</form>

<?php
    include_once("config.php");

    if (isset($_POST['name']))
    {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
       
        
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        
      
    }
    include_once("menu.php");
?>