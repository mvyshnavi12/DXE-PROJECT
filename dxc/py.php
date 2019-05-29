<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname="dab";
	$connect =new mysqli($servername,$username,$password,$dbname);
	if($connect->connect_error){
		die('çonnection failed');
	}
	else
	{
		//echo 'connection worked';
	}
	$x=$_POST['username'];
	$y=$_POST['password'];
	$sql="SELECT username,password FROM user WHERE username='$x' AND password='$y'";

	$result=$connect->query($sql);

	if($result-> num_rows > 0){
		while($row=$result->fetch_assoc())
		{
			echo "HI  ". $row["username"];

		}
	}

?>


