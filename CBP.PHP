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
<h3 style = "  text-align: center; font-family: 'Ubuntu',serif;font-size:30px;">Cheese Burst Pizza</h3>
<table id="customers">
<tr>
  <th>Pizza</th>
  <th>Product Code</th>
  <th>Rate </th>
</tr>
<tr><td><img src="c1.jpg" width="200px" height="100px"></td><td>Cheese1</td><td> 200Rs</td></tr>
<tr><td><img src="c2.jpg" width="200px" height="100px"><td>Cheese2</td><td>500Rs</td></td></tr>
<tr><td><img src="c3.jpg" width="200px" height="100px"><td>Cheese3</td><td>350Rs</td></td></tr>
<tr>
<td></td>
<td><input class="btn btn1" type="button" name="order" value="Order" onClick="window.location='userlogin.php';" /></td>
<td><input class="btn btn1" type="button" name="logout" value="Logout" onClick="window.location='index.php';" /></td>
</tr>
</table>
</div>
</body>
</html>
