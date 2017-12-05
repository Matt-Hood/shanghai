<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/navigation.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
<title><?php echo $currentTitle ?></title>

<script type="text/javascript">
function saveEdits() {

//get the editable element
var editElem = document.getElementById("edit");

//get the edited element content
var userVersion = editElem.innerHTML;

//save the content to local storage
localStorage.userEdits = userVersion;

//write a confirmation to the user
document.getElementById("update").innerHTML="Edits saved!";

}
function checkEdits() {

//find out if the user has previously saved edits
if(localStorage.userEdits!=null)
	document.getElementById("edit").innerHTML=localStorage.userEdits;
}
</script>

</head>

<body onload="checkEdits()">
<div class="container">

<header>
<div class="heading">
<h1><a href="search.php">Administrate</a>

		</h1>
	
</header>