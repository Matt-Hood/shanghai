<!-- Code from http://bit.ly/2AVRi0i used for help-->
<?php 
 session_start();
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 ?>

<!doctype html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
    <body>
        
        <hr />
        <h2>All our members:</h2>
        <?php include_once("display.php"); include_once("menu.php");?>
    </body>
</html>

