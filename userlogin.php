<?php
include('config.php');
$flag=0;
if(isset($_POST['submit']))
{
$un=$_POST['un'];
$pw=$_POST['pw'];

if(($un=='admin') && ($pw=='admin1'))
	header('Location:adminmenu.php');




	else
	{



                      $res=mysql_query("Select * from userregister where un='".$un."' and pw='".$pw."'");
         while($r=mysql_fetch_row($res))
        {
$un1= $r['6'];
$pw1= $r['7'];
          $fn= $r['0'];


if(($un==$un1) && ($pw==$pw1))
$flag=1;
		}
		if($flag==1)
		{
header('Location:order.php');
$query2=mysql_query("delete from temp ");

$query1=mysql_query("INSERT INTO temp values('$un','$fn' )");

		}
else
?>
<script type="text/javascript">
										alert("Try Again");

									</script>

									<?php
}
}

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styling.css" rel="stylesheet" type="text/css">

</head>
<script>
function validateForm() {
    var x = document.forms["form"]["un"].value;
    if (x == "") {
        alert("Enter User Name");
        return false;
    }
 var x = document.forms["form"]["pw"].value;
    if (x == "") {
        alert("Enter Password");
        return false;
    }

    }
</script>
</head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<body onsubmit="return validateForm()">
<div class="container gradient">
<form  method="POST" action="" name="form">
<h3 style = "  text-align: center; font-family: 'Ubuntu',serif;font-size:30px;">User Login</h3>
<p style = "font-family:'Ubuntu',serif;font-size:20px;">Username</p>
<input type="text" placeholder="Username"name="un" id="u">
<p style = "font-family:'Ubuntu',serif;font-size:20px;">Password</p>
<input type="password" placeholder="password"name="pw" id="pw"><br>
<input class="btn btn1" type="Submit" name="submit" id="submit" value="Login">
<input class="btn btn1" type="button" name="cancel" value="Back" onClick="window.location='index.php';" /><br>
<input class="btn btn1" type="button" name="register" value="New Users? Reister" onClick="window.location='userregister.php';" />

</form>
</div>
</body>
</html>
