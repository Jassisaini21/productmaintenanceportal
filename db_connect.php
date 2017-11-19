<?php

$con = mysqli_connect("127.0.0.1","root","");
if(!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
if(mysqli_query($con,"CREATE DATABASE jass"))
{
echo "Database created";
}
else
{
//echo "Error creating database: " . mysqli_connect_error();
$db=mysql_select_db("jass", $con);
return $db;
}

?>