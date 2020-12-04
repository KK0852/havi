<?php

session_start();


$conn=mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'aa');

$username = $_POST['username'];
$password = $_POST['password'];


$sql= "select * from aaa where username= '$username' && password1='$password'";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']=$username;
	header('location:login.php');
}else{
	echo"Please check your username and password";
}
?>