
<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<center>
<body>
	<form action="" method="POST">
	<table border = "2" style="border-collapse: collapse;">
		<br><caption>ISHITA CHATTOPADHYAY - 1CR18CS077</caption><br>
		<caption>CALCULATOR</caption>
		<tr>
			<th>Value 1:</th><td><input type="text" name="a"></td>
		</tr>
		<tr>
			<th>Value 2:</th><td><input type="text" name="b"></td>
		</tr>
		<tr>
			<th colspan="2"><input type="submit" name="cal" value="CALCULATE"></th>
		</tr>
	</form>
	<?php
	if(isset($_POST['cal']))
	{
		$a=$_POST['a'];
		$b=$_POST['b'];
		if(is_numeric($a) &&is_numeric($b))
		{
			echo "<tr><th>ADDITION </th><td>".($a+$b)."</td></tr><br>";
			echo "<tr><th>SUBTRACTION </th><td>".($a-$b)."</td></tr><br>";
			echo "<tr><th>MULTIPLICATION </th><td>".($a*$b)."</td></tr><br>";
			echo "<tr><th>DIVISION </th><td>".($a/$b)."</td></tr><br>";
		}
		else{
			echo "Invalid Input!";
		}
	}
	echo "</table>";
	?>
	</table>
</body>
</center>
</html>

