<?php

$link = mysqli_connect("localhost", "root","tiger", "voting" ) or die("Connection Error");
$name=$_POST['name'];
$password=$_POST['password'];

$query="select password from login where name = '$name'";
$res=mysqli_query($link,$query) or die("ERROR");
$r=mysqli_fetch_array($res);
if($r[0]==$password){

header("location: vote.html");
}
elseif($r[0]==NULL)
{
die("invalid user");
}
else
{
die ("invalid password");
}
?>
