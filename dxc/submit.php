<?php
$x=$_POST['first'];
$y=$_POST['pass'];
$z=$_POST['em'];
$w=$_POST['ph'];
$servername ="localhost";
$username = "root";
$password = "";
$dbname="dab";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {

	die("connection failed:". $conn->connect_error);

}
echo "connected successfully";
$sql = "INSERT INTO user (username,password,email,mobile) VALUES ('$x','$y','$z','$w')";

if ($conn->query($sql) === TRUE){
	echo "new record created";

}
else
{
	echo "Error:" .$sql ."<br>" .$conn->error;
}

$conn->close();
?>