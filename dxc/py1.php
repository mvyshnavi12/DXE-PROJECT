<?php
$x=$_POST["username"];
$y=$_POST["password"];
$servername ="localhost";
$username = "root";
$password = "";
$dbname="dab";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {

   die("connection failed:". $conn->connect_error);

}
//echo "connected successfully";
$sql = "SELECT username,password FROM user WHERE username='$x' AND password='$y'";

if ($conn->query($sql) === TRUE){
   echo "you have registred successfully";

}
else
{
   echo "Error:" .$sql ."<br>" .$conn->error;
}

$conn->close();

?>