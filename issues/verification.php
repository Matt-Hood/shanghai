<!-- Code from http://bit.ly/2j0Hift used for help-->
<?php


if(isset($_POST['register']))
{
	$email_id = $_POST['email'];
	$pass =$_POST['password'];
	$code =substr(md5(mt_rand()),0,15);
	mysql_connect('66.147.242.186','urcscon3_shangha','coffee1N');
	mysql_select_db('urcscon3_shanghai');

	
	
	$insert = mysql_query("insert into verify values('','$email_id','$pass','$code')");
	$db_id = mysql_insert_id();

	
    $to = $email_id;
    $subject = 'activation Code ';
    
    $message = 'Your Activation Code is '.$code.' Please Click On This link <a href="verification.php">Verify.php?id='.$db_id.'&code='.$code.'</a> to activate your account.';
    
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
	
/*
	$message = "Your Activation Code is '.$code.'";
    $to = $email_id;
    $subject="Activation Code For Talkerscode.com";
    $from = 'your email';
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verification.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);
*/
	echo "An Activation Code Is Sent To You Check You Emails";
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = $_GET['id'];
	$code = $_GET['id'];
	mysql_connect('localhost','cs174','default');
	mysql_select_db('cs174');
	$select=mysql_query("select email,password from verify where id='$id' and code='$code'");
	if(mysql_num_rows($select)==1)
	{
		while($row=mysql_fetch_array($select))
		{
			$email=$row['email'];
			$password=$row['password'];
		}
		$insert_user = mysql_query("insert into user values($email','$password')");
		$delete = mysql_query("delete from verify where id='$id' and code='$code'");
	}
}

?>