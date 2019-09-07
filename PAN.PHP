
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link href="styling.css" rel="stylesheet" type="text/css">

<style>
#customers {
  font-family: "Ubuntu", serif;
  border-collapse: collapse;
  width: 60%;
  background: linear-gradient(#e66465, #9198e5);
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
  color: white;
}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
}
</style>
</head>
<body>
<form  method="POST" action="" name="form"  >
<div class="container gradient borderDesign">
<h3 style ="text-align: center; font-family: 'Ubuntu',serif;font-size:30px;">Pan Pizza</h3>
<table id="customers">
<tr>
<th>Pizza</th>
<th>Product Code</th>
<th>Rate </th>
</tr>
<tr><td><img src="c4.jpg" width="200px" height="100px"></td><td>Pan4</td><td> 280Rs</td></tr>
<tr><td><img src="c5.jpg" width="200px" height="100px"><td>Pan5</td><td>600Rs</td></td></tr>
<tr><td><img src="c6.jpg" width="200px" height="100px"><td>Pan6</td><td>800Rs</td></td></tr>
<tr>
<td></td>
<td><input class="btn btn1" type="button" name="order" value="Order" onClick="window.location='userlogin.php';" /></td>
<td><input class="btn btn1" type="button" name="logout" value="Logout" onClick="window.location='index.php';" /></td>
</tr>
</table>
</div>
</body>
</html>
