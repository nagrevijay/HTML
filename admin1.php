<?php
$user="root";
$password="";
$db="login";

//create connection

$conn=mysqli_connect("localhost","$user","$password","$db");

@$username=$_POST['uid'];
@$password=$_POST['pass'];
$sql="INSERT INTO admin VALUES('','$username','$password')";
mysqli_query($conn,$sql);
echo "register:";
?>