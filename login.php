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

<h2>Login Form</h2>

<form action="1.php" method="post">
  <div class="imgcontainer">
    <img src="aa.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
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
else
{
//echo "Error creating database: " . mysqli_connect_error();
if(mysqli_select_db($con,"jass"))
{
    echo "DB selected..";
}
else
{
    echo "No DB selected..";
}
//return $db;
}
$pname1=$psw1="";
if (isset($_POST['submit'])) {
      $pname1=$_POST['uname'];
      $psw1=$_POST['psw'];
      $sql1="select psw from login1 where pname LIKE '%$pname1%'";
      $row=mysqli_query($con,$sql1);
      /*if(mysqli_query($con,$sql1))
      {
        echo die('Error: ' . mysqli_error($con));
        echo "Invalid User...."  ;
      }
      else
      {
          $row = mysqli_fetch_row($sql1);

      }
      */

      if (!$row==$psw1)
      {
          echo "Logged In....";
      }
      else
      {
          echo "Wrong password....";
      }
 

}
mysqli_close($con);
?>

</div>



  <form action="1.php" method="post">
  <div class="container1" width="20px" style="background-color:#f1f1f1">
    <button type="submit" class="cancelbtn" name="cancel">cancel</button>
    <span class="psw">Forgot <a href="password.php">password</a></span>
  </div>
</form>


</body>
</html>
