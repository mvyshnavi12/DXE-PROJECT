<!--<?php

	/*$x=$_POST['username'];
	$y=$_POST['password'];


	$x = stripcslashes($x);
	$y = stripcslashes($y);
	$x = mysql_real_escape_string($x);
	$y = mysql_real_escape_string($y);


	mysql_connect("localhost","root","");
	mysql_select_db("dab");


	$result=mysql_query("select * from user where username='$x' and password='$y'")
	or die("Failed to query database".mysql_error());

	$row=mysql_fetch_array($result);




	if ($row['username']==$x && $row['password']==$y) {
		echo "login successful welcome  ".$result['username'];
	}
	else
	{
		echo "failed to login";
	}
	if($result-> num_rows > 0){
	//	while($row=$result->fetch_assoc())
		{
			echo "HI  ". $row["username"];

		}
	}else
	echo "username ";*/

?>-->




<html>
<head>
<img src="peng.jpg" align=center>
<img src="logo.jpg" align=center,top=10>
<img src="people.jpg" style="float:right;padding-right:80px">
</head>
<body>
<p><center><h1>INSTRUCTIONS</h1></center></p>

<table align=center style="padding-left:40px;font-size:25px;color:red;"><tr><td>1. Make sure you have good internet connection.</td></tr>
<tr><td>2. Don't open other tabs while writing exam.</td></tr>
<tr><td>3. Never click back button on the browser. This will take you out of test.</td></tr>
<tr><td>4. No negative marking.</td></tr>
<tr><td>5. Timer will begin as soon as you click on take test.</td></tr>
<tr><td>6. Each question carries one mark.</td></tr>
<tr><td>7. Attempt all the questions.</td></tr></table>
<br>
<table border=1 align=center><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;TimeLimit&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;Questions&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;Marks&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;15 min&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10 Marks&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;15 min&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10 Marks&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;15 min&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10 Marks&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;15 min&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;10 Marks&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
</table><br><br>
<center><a href="tests.html"><button style="background:green;color:white;width:100px;border-radius:5px;boder-color:grey;">TAKETEST</button></a></center>
</body>
</html>
