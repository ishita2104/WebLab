<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<style type="text/css">

	h2{
		text-align: center;
	}
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 50%;
		margin-left: auto;
		 margin-right: auto;
		 margin-top: 70px;
	 }
	td, th {
		border: 1px solid black;
		text-align: left;
		padding: 8px;
	}

</style>
<body>
<h2>ISHITA CHATTOPADHYAY- 1CR18CS077</h2>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="weblab";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
	die("Connection failed: ".$conn->connect_error);
else
	echo "Connection is Successful!";
$sql = "select * from student";
$result = $conn->query($sql);
echo "<table border='2'><tr><th>Name</th><th>USN</th><th>Batch</th></tr>";
$a=[];
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$row["name"]."</td>"; 
		echo "<td>".$row["usn"]."</td>";
		echo "<td>".$row["batch"]."</td></tr>";
		array_push($a, $row["usn"]);
	}
}
else
	echo "Table is empty";
//selection sort
$n=count($a);
for($i=0; $i<($n-1); $i++)
{
	$pos=$i;
	for($j=$i+1; $j<$n; $j++)
	{
		if($a[$pos] > $a[$j])
			$pos = $j;
	}
	if($pos!=$i)
	{
		$temp = $a[$i];
		$a[$i] = $a[$pos];
		$a[$pos] = $temp;
	}
}
$b=[];
$c=[];
$result = $conn->query($sql);
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		for($i=0;$i<$n;$i++)
		{
			if($row["usn"] == $a[$i])
			{
				$b[$i] = $row["name"];
				$c[$i] = $row["batch"];
			}
		}
	}
}
echo "<table border='2'><tr><th>Name</th><th>USN</th><th>Batch</th></tr>";
for($i=0;$i<$n;$i++)
{
	echo "<tr>";
	echo "<td>".$b[$i]."</td>";
	echo "<td>".$a[$i]."</td>";
	echo "<td>".$c[$i]."</td></tr>";
}
echo "</table></body></html>";
$conn->close();
?>
</body>
</html>
