
 <?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 
 define('DBHOST', '66.147.242.186');
 define('DBUSER', 'urcscon3_shangha');
 define('DBPASS', 'coffee1N');
 define('DBNAME', 'urcscon3_shanghai');

 $con = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 
 if ( !$con ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }