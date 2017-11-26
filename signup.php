<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 20%;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.aa {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
.container1 {
    padding: 5px;
    width: 100%;
}
.container2 {
    padding: 5px;
    float: right;
    width: 20%;
}
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: left;
    }
    .cancelbtn {
       width: 20%;
    }
}
</style>
<body>

<h2>SignUp Form</h2>

<form action="signup.php" method="post">
  <div class="imgcontainer">
    <img src="aa.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname1" required>

    <label><b>Set Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw1" required>
     
    <label><b>Phone no.</b></label>
    <input type="text" placeholder="Enter Phone No." name="ph1" required>
     
    <label><b>Gender</b></label>
    <input type="text" placeholder="gender..type m/f" name="gender1" required>
    
       
    <button type="submit" name="submit">SignUp</button>
    
  </div>
  </form>
  
<div>

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
if(mysqli_select_db($con,"jass"))
{
//echo "Error creating database: " . mysqli_connect_error();
echo "db selected";
//return $db;
}

/*$sql="CREATE TABLE login2 (
  id int(11)  NOT NULL ,
  pname2 varchar(25) NOT NULL,
  gender varchar(50) NOT NULL,
  ph int(10) NOT NULL,
  psw2 varchar(255) NOT NULL,
  Primary key(id)
)";

if (!mysqli_query($con,$sql))
{
    echo die('Error: ' . mysqli_error($con));
}
else
{
    echo "Table Created";
}
*/
$pname2=$psw2=$ph2=$gender2="";
if (isset($_POST['submit'])) {

      $pname2=$_POST['uname1'];
      $psw2=$_POST['psw1'];
      $ph2=$_POST['ph1'];
      $gender2=$_POST['gender1'];

 $sql1="INSERT INTO login1 (pname,psw,phoneno,gender)
      VALUES
      ('$pname2','$psw2','$ph2','$gender2')";



if (!mysqli_query($con,$sql1))
{
    echo die('Error: ' . mysqli_error($con));
}
else
{
    echo "values inserted";
}
//header("refresh:2/ url:sihnup.php");
}
mysqli_close($con);
?>

</div>

<form action="login.php" method="post">
  <div class="imgcontainer">
	<button type="submit" name="submit">Login Now...</button>
    
  </div>
  </form>
</body>
</html>
