<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="css/overrides.css">
<link rel="stylesheet" href="css/navigation.css">




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
<h1><a href="adminpriv.php">Site-Administation</a> | <a href="admin.php">Survey-Administration</a> </h1>
</div>

		
	
</header>