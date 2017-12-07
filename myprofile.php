<!-- Code from http://bit.ly/1VTnl5H used for help-->
<?php
 ob_start();
 session_start();
 require_once 'include/config.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM user WHERE userID=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>



</head>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         
         
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="mainadmin.php">Back to Home</a></li>
       
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['email']; ?>&nbsp;<span class="caret"></span></a>

            

                 
                
              
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

 <div id="wrapper">

 <div class="container">
    
     <div class="page-header">
     <h3> </h3>


     </div>
        
        <div class="row">
        <div class="col-lg-12">
        <h1></h1>
        </div>
        </div>
    
    </div>
    
    </div>
    
  
    
</body>
<article>
  <ul >
                 <li>UserID: <?php echo $userRow['userID']; ?></li>
                 <li>Username: <?php echo $userRow['username']; ?></li>
                 <li>Email: <?php echo $userRow['email']; ?></li>
                 <li>BIO: <?php echo $userRow['bio']; ?></li>
                 <li>Favsong: <?php echo $userRow['favsong']; ?></li>
                 <li>Birthday: <?php echo $userRow['birthday']; ?></li>
               </ul>
</article>
</html>
<?php ob_end_flush(); ?>