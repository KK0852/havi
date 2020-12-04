<?php
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
  
$dbselect = mysqli_select_db($conn,"aa");
if(!$dbselect){
	error_log ("Failed to connect db:" . mysqli_error($con));
	die("Internal server error");
}

$sql="insert into aaa(name,mail,date,mobile,address,password1,password2) 
values('$_POST[name]','$_POST[mail]','$_POST[date]','$_POST[mobile]','$_POST[address]','$_POST[password1]','$_POST[password2]')";

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
?>