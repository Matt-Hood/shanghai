<!doctype html>
<html>
	<head>
		<title>CSC 174 Assignment 9</title>
		<!-- CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="css/overrides.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
		<!-- JavaScript --> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/header.js"></script>
	</head>
	<body>
		<header> 
			<div class="login-top">
				<div id="logged-in">
					<span id="welcome-name"></span>
					<form method="POST" action="logout.php">
						<input type="submit" value="Log out"/>
					</form>
				</div>
				<div id="logged-out">
					<form method="POST" action="login.php">
						Username: <input type="text" name="username" required/> 
						Password: <input type="password" name="password" required/>
						<input type="submit" value="Log in!"/>
					</form>
					<a href="create-account.php">Create Account</a>
				</div>
				<script type="text/javascript">
					showHeader();
				</script>
			</div>
		</header>
		<nav><!-- All Top-level .html files should have exactly the same header contents -->
			<ul>
        <li><span>Go to: </span></li>
        <li><a class="slide" href="#summary">Summary</a></li>
        <li><a class="slide" href="#survey">Survey</a></li>
        <li><a class="slide" href="#credits">Credits</a></li>
        <li><a href="user-account.php">User Account</a></li>
    </ul>
		</nav>
		<article>
			<BR><BR><BR><BR>
			<h1>Create Account</h1>
			Welcome to the site!
			<br>
			To create an account, please enter the following information and click 'Join!'.
			<br>
			<form method="post" action="createaccount.php">
				Username: <input type="text" name="username" required/><br/>
				Password: <input type="password" name="password" required/><br/>
				Email: <input type="text" name="email" required/><br/>
				Birthday: <input type="date" name="birthday" required/><br/>
				<input type="submit" value="Join!"/>
			</form>
		</article>
		<aside>
		
		</aside>
		<footer>
		
		</footer>
		
	</body>
</html>