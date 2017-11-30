<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/navigation.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
<title><?php echo $currentTitle ?></title>

</head>
		<nav>
			<ul>
        <li><span>Go to: </span></li>
        <li><a class="slide" href="#summary">Summary</a></li>
        <li><a class="slide" href="#survey">Survey</a></li>
        <li><a class="slide" href="#credits">Credits</a></li>
        <li><a href="user-account.php">User Account</a></li>
    </ul>
		</nav>
		<article>
			<h1>User Home Page</h1>
			
			
	
			
		</article>	
		
		<aside>
			<?php 
/*
			session_start();

			if(!isset($_COOKIE['logged_in'])) {
				echo "Please log in to view your profile";
			}
			else { // Person is Logged In
				$user_name = $_COOKIE["logged_in"];
			
				//connect to thrones database
				$servername = "localhost";
				$username = "root";
				$password = "mysql";
				$dbname = "Thrones_Database";
				
				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// Set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$userquery = $conn->prepare("SELECT * FROM Users WHERE username = '$user_name'");
					$userquery->execute();

 		while($row = $userquery->fetch(PDO::FETCH_ASSOC)) {
		
				$username = $row['username'];
				$email = $row['lastname'];
				$profile_pic = $row['profile_pic'];
				$bio = $row['bio'];
				$birthdate = $row['birthdate'];
				$join_date = $row['join_date'];
				$profile_last_updated = $row['profile_last_updated'];
				$favorite_character = $row['favorite_character'];
		}
*/
	?>
<!--
	<h2><?php echo $username; ?> profile </h2><br/>
	<table>
		<tr><td> username: </td><td> <?php echo $username; ?></td></tr>
		<tr><td> email: </td><td> <?php echo $email; ?></td></tr>
		<tr><td> profile_pic: </td><td> <?php echo $profile_pic; ?></td></tr>
		<tr><td> bio: </td><td> <?php echo $bio; ?></td></tr>
		<tr><td> birthday: </td><td> <?php echo $birthdate; ?></td></tr>
		<tr><td> date joined: </td><td> <?php echo $join_date; ?></td></tr>
		<tr><td> profile_last_updated: </td><td> <?php echo $profile_last_updated; ?></td></tr>
		<tr><td> favorite_character: </td><td> <?php echo $favorite_character; ?></td></tr>

	</table> -->
		</aside>	
	</body>
</html>