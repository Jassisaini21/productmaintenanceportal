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
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Successful!!</strong>... Indicates a successfull submission of product details..
</div>
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

$sql = "create table product1
(
pname varchar(15),
pid int PRIMARY KEY,
cost varchar(15)
)";
mysqli_query($con,$sql);
echo "Table created";
$pname1=$pid1=$cost1="";
if (isset($_POST['submit'])) {
      $pname1=$_POST['pname'];
      $pid1=$_POST['pid'];
      $cost1=$_POST['cost'];

}



$a=("INSERT INTO product1 (pname, pid, cost)
VALUES ('$pname1', '$pid1', '$cost1')");
if (!mysqli_query($con,$a))
{
die('Error: ' . mysqli_error($con));
}
echo "values inserted";
mysqli_close($con);
?>
</body>
</html>