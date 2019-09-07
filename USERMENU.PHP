<?php 
include('config.php');
$flag=0;
if(isset($_POST['submit']))
{
$pin=$_POST['pin'];


	

                      $res=mysql_query("Select * from userverify where acno='".$pin."' ");  
         while($r=mysql_fetch_row($res))
        {
$pin1= $r['10']; 



if($pin==$pin1) 
$flag=1;
		}
		if($flag==1)
		{
header('Location:usermenu.php');


		}
else
?>
<script type="text/javascript">
										alert("Try Again");
										
									</script>
									
									<?php
}


?>

<html><head>
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
 
   
  
	 if (x.length != 6) {
        alert("Enter 6 character Only");
        return false;

    }
	
}
</script>

</head>
<body background="back333.jpg" onsubmit="return validateForm()" text="white">
<form  method="POST" action="" name="form"  >
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><h3>FOR USER LOGIN</h3></center>
<table align="center" border="1">


<tr><td></td><td><input type="button" name="wt" value="Withdrawl" onClick="window.location='wt.php';" />
<tr><td></td><td><input type="button" name="fundtrans" value="Fund Transfer" onClick="window.location='fundtransfer.php';" />
<tr><td></td><td><input type="button" name="pc" value="PIN Change" onClick="window.location='pinchange.php';" />
<tr><td></td><td><input type="button" name="cancel" value="Cancel" onClick="window.location='userpin.php';" /></td></tr>


</table>


</body>
</html>