<?php
$user="root";
$password="";
$db="login";

//create connection

$conn=mysqli_connect("localhost",$user,$password,$db);

@usernsme=$_POST[uid];
@password=$_POST[pass];

$sql="INSERT INTO myadmin VALUES('',"$uid","$pass")";
$mysqli_query($conn,$sql);











?>









<!DOCTYPE html>
<html>
<head>
<title>admin</title>
<center>

<h1>  ADMIN LOGIN </h1>
</center>
<body bgcolor="pink">

</head>

<body>
<center>
<table>

<hr><hr>
<tr><td>USERNAME</td>
   <td><input type= "text" name="uid"><td></tr>




<tr><td>PASSWORD</td>
<td><input type="password" name="pass"></td></tr>

	
	       
           			


</center>
 
 </table>
 <a href="droplist.html">
 <INPUT TYPE="SUBMIT" VALUE="SUBMIT" NAME="Submit" /></a>
 
 
 <hr><hr>
</body>


</html>