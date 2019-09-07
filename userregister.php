<?php
include('config.php');

if(isset($_POST['submit']))

{

	$query1=mysql_query("INSERT INTO userregister values ('$_POST[fname]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[contact]','$_POST[email]','$_POST[un]','$_POST[pw]')");
	if($query1)
{
?>
<script type="text/javascript">
alert("Saved successfully");
</script>

<?php
}
}
?>

<html>
<head>
<script>
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false)
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
function validateForm() {
    var x = document.forms["form"]["fname"].value;
    if (x == "") {
        alert("Enter First Name");
        return false;
    }
 var x = document.forms["form"]["address"].value;
    if (x == "") {
        alert("Enter Address");
        return false;
    }
 var x = document.forms["form"]["contact"].value;

if (x.length != 10) {
        alert("Enter 10 Digits Only");
        return false;

    }
 var x = document.forms["form"]["email"].value;
    if (x == "") {
        alert("Enter Email");
        return false;
    }
var x = document.forms["form"]["un"].value;
    if (x == "") {
        alert("Enter Username");
        return false;
    }
var x = document.forms["form"]["pw"].value;
    if (x == "") {
        alert("Enter Password");
        return false;
    }
}



</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link href="styling.css" rel="stylesheet" type="text/css">
</head>

<body>
 <form  method="POST" action="" name="form"  onsubmit="return validateForm()">
<div class="container gradient borderDesign">
<h1 style = "text-align: center; font-family: 'Ubuntu',serif;font-size:30px;">User Registration</h1>
<table>
<tr><td>Name</td><td><input type="Text" name="fname" id="fname" onkeypress='return event.charCode >= 65 && event.charCode <= 132'></td></tr>
<tr><td>Address</std><td><input type="text" name="address" id="address"></td></tr>
<tr><td>City</td><td>
<select class="btn btn1" name="city" id="city"><option value="Kalaburagi">Kalaburagi</option>
<option value="Vijaypur">Vijaypur</option>
<option value="Bangalore">Bangalore</option>
<option value="Raichur">Raichur</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Mumbai">Mumbai</option></select>

</td><td>State</td><td>
<select class="btn btn1" name="state" id="state">
<option value="Karnataka">Karnataka</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
</select>
</td></tr>
<tr>
<td>Contact</td>
<td><input type="text" name="contact" id="contact" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
<td>EMail</td>
<td><input type="text" name="email" id="email" onblur="validateEmail(this);"></td>
</tr>
<tr>
<td>UserName</td><td><input type="Text" name="un" id="un"></td>
<td>Password</td><td><input type="password" name="pw" id="pw"></td>
</tr>
</table>
<br><br>
<table align="center">
<tr><td></td>
	<td>
		<input class="btn btn1" type="Reset" name="Reset" value="Reset">
	<input class="btn btn1" type="Submit" name="submit" id="submit" value="Submit">
<input class="btn btn1" type="button" name="back" value="Menu" onClick="window.location='userlogin.php';" /></td></tr>
</table>
</div>

</body>
</html>
