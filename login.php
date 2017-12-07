<!-- Code from http://bit.ly/1VTnl5H used for help-->
<?php
  
$dbhost = "localhost";
$dbuser = "urcscon3_shangha";
$dbpass = "coffee1N";
$dbname = "urcscon3_shanghai";

$connection = new mysqli('66.147.242.186', 'urcscon3_shangha', 'coffee1N', 'urcscon3_shanghai');

 ob_start();
 session_start();
require_once 'include/config.php';


 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: mainadmin.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = Trim(stripslashes($_POST['email']));
  $email = mysqli_real_escape_string($connection, $email);

  $password = Trim(stripslashes($_POST['pass']));
  $password = mysqli_real_escape_string($connection, $password);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($password)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $password); // password hashing using SHA256
  
   //$query .= "SELECT userID, username, password FROM user WHERE email='$email'"; SELECT userid, username FROM tuser WHERE username = '$user_username' AND password = SHA('$user_password')"
   //$query .= "SELECT userID, username, password FROM user WHERE email = '$email' ";
   //$res = mysqli_query($connection, $query);

   $query = " SELECT userID, username, password FROM user WHERE email='$email' ";
 
 
   $result = mysql_query($query);
   $row = mysql_fetch_array($result);
   $count = mysql_num_rows($result); // if uname/pass correct it returns must be 1 row
   $_SESSION['user'] = $row['userID'];
   if( $count == 1) {
   
    header("Location: mainadmin.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
   


  }
  
 }
 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/navigation.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
<title>Login</title>

</head>
<body>

<div class="container">

 <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Sign In.</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="createaccount.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>

</html>
<?php ob_end_flush(); ?>