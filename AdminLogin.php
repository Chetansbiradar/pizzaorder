<?php
include('config.php');
if(isset($_POST['submit']))
{
$un=$_POST['un'];
$pw=$_POST['pw'];
if($un=='')
echo "Enter Username";
else
if($pw=='')
echo "Enter Password";
else
if(($un=='admin') && ($pw=='admin'))
{
header('Location:adminmenu.php');
if($query1)
{
  header("location:partlist.php");
}
}
else
echo "Try Again";

}
?>

<html>
<head>
<style>
input[type=text] {
    padding:10px;
    border:2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=password] {
    padding:10px;
    border:2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=text]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:10px 15px;
    background:#ccc;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=button] {
    padding:10px 15px;
    background:#ccc;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style

</head>
<body background="back222.jpg" text="white">
<form  method="POST" action="" name="form"  >
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table align="center" >
<tr><th><h3>ADMIN LOGIN</h3></th></tr></table>
<table align="center" border="1">
<tr><td>UserName</td><td><input type="Text" name="un" id="un"></td></tr>
<tr><td>Password</td><td><input type="password" name="pw" id="pw"></td></tr>
<tr><td></td><td><input type="Submit" name="submit" id="submit" value="Login"><input type="button" name="logout" value="Home" onClick="window.location='main.php';" /></td></tr>

</table>


</body>
</html>
