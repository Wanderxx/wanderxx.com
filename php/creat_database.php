<html>
<head>
<title>Creating MySQL Database</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '131415508';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = 'CREATE DATABASE a6890213_db';
$retval = mysql_query($sql，$conn);
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database a6890213_db created successfully\n";
mysql_close($conn);
?>
</body>
</html>