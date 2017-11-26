<html>
<head>
<style>
.alert {
    padding: 20px;
    background-color: #008000;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>

<?php
$con = mysqli_connect("127.0.0.1","root","");
echo "connection created";
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
if(mysqli_query($con,"CREATE DATABASE jass"))
{
echo "Database created";
}
else
{
//echo "Error creating database: " . mysqli_connect_error();
mysqli_select_db( $con,"jass");
//return $db;
}


$pname1=$pid1=$cost1="";
if (isset($_POST['submit'])) {
      $pname1=$_POST['pname'];
      $pid1=$_POST['pid'];
      $cost1=$_POST['cost'];




$sql1="INSERT INTO product1 (pname,pid,cost)
      VALUES
      ('$pname1','$pid1','$cost1')";
if (!mysqli_query($con,$sql1))
{
die('Error: ' . mysqli_error($con));
}
else
echo "values inserted";
}


echo "<div class='alert'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
  Successful!!<b>... Indicates a successfull submission of state details..</b>
</div>";

mysqli_close($con);
?>
</body>
</html>