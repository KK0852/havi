<html>
<head>
<title></head></title>
<div class="box">
	<table border="2">
	<tr>
	<th>username</th>
	<th>Email</th>
	<th>date</th>
        <th>Phone number</th>
	<th>address</th>
	<th>Password</th>
	<th>Retype password</th>
	</tr>
	</div>

<?php
include("back.php");
error_reporting(0);
$query="select * from aaa";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"
		<tr>
		<th>".$result[user]."</th>
		<th>".$result[mail]."</th>
		<th>".$result[date]."</th>
		<th>".$result[mobile]."</th>
		<th>".$result[address]."</th>
		<th>".$result[password1]."</th>
                <th>".$result[password2]."</th>
		</tr>
		";
	}
}
?>
</html>