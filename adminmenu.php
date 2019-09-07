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
header('Location:seats.html');
else
echo "Try Again";
if($query1)
{
header("location:partlist.php");
}
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
<br><br><br><br><br><br><br><br><br><br>
<form  method="POST" action="" name="form"  >
<br><br><br>
<table align="center">
<tr>
<td><input type="button" name="viewusers" value="View Users" onClick="window.location='viewusers.php';" /></td>
<td><input type="button" name="sendpin" value="Send PIN" onClick="window.location='userverify.php';" /></td>


<td><input type="button" name="logout" value="Logout" onClick="window.location='index.php';" /></td>
</tr>

</table>


</body>
</html>