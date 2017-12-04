<?php 
session_start(); 
include 'config.php';

if (isset($_SESSION['uid'])) 
{
      echo $_SESSION['uid'];

      echo "<a href=\"profile.php?id=".$_SESSION['uid']."&action=view\">View Profile<a/>";
      echo "<a href=\"profile.php?id=".$_SESSION['uid']."&action=edit\">Edit Profile</a>";
}else{


    // not allowed redirect
}
?>