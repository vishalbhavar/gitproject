<html>
<head>
<title>login</title>
</head>
<?php
$servername="localhost";
$username="root";
$password="Pass@123";
$dbname="ropvatika";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo"";
}
?>
