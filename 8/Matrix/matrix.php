<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		
		text-align: center;
		
	}

	div{
		float:left;
		width: 180px;
		padding: 25px;
		border: 3px solid black;
		margin: 10px;
	}
</style>
<body>
<?php
	$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b = array(array(1,2,3),array(4,5,6),array(7,8,9));

	$m=count($a);
	$n=count($a[1]);
	$p=count($b);
	$q=count($b[1]);
	echo "<div>";
	echo "MATRIX A<br>";
	for($i=0;$i<$m;$i++)
	{
		for($j=0;$j<$n;$j++)
		{
			echo " ".$a[$i][$j];
		}
		echo "<br>";
	}
	echo "</div>";
	echo "<div>";
	echo "MATRIX B<br>";
	for($i=0;$i<$p;$i++)
	{
		for($j=0;$j<$q;$j++)
		{
			echo " ".$b[$i][$j];
		}
		echo "<br>";
	}
	echo "</div>";
	echo "<div>";
	echo "Transpose of matrix A<br>";
	for($i=0;$i<$m;$i++)
	{
		for($j=0;$j<$n;$j++)
		{
			echo " ".$a[$j][$i];
		}
		echo "<br>";
	}
	echo "</div>";
	echo "<div>";
	echo "Addition of two matrices<br>";
	if($m == $p && $n == $q)
	{
		for($i=0;$i<$m;$i++)
		{
			for($j=0;$j<$q;$j++)
			{
				echo $a[$i][$j]+$b[$i][$j]." ";
			}
			echo "<br>";
		}
	}
	echo "</div>";
	echo "<div>";
	echo "Multiplication of 2 matrices<br>";
	if($n == $p)
	{
		for($i=0;$i<$m;$i++)
		{
			for($j=0;$j<$q;$j++)
			{
				$result[$i][$j]=0;
				for($k=0;$k<$n;$k++) 
				{ 
					$result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
				}

			}
		
		}
	}
	for($i=0;$i<$m;$i++)
	{
		for($j=0;$j<$q;$j++)
		{
			echo " ".$result[$i][$j];
		}
		echo "<br>";
	}
	echo "</div>";

?>
</body>
</html>

