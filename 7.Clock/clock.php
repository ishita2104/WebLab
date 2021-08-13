<!DOCTYPE html>
<html>
<head>
	<title>DIGITAL CLOCK</title>
	<meta http-equiv="refresh" content="1"> <!--refersh after every 1sec -->
	<style>
		body{
			font-size: 30px;
			color: white;
			background-color: black;
			border:6px solid #36454F;
			text-align:center;
			height: 110px;
			width: 200px;
			padding: 25px 25px 25px 25px;
			box-shadow: 5px 10px 8px #888888;
			transform: translate(530px,100px);
		}
	</style>
</head>
<body>

	<?php 
		date_default_timezone_set("Asia/Kolkata");
		echo "<center><br>".date("H : i : s a")."</br></center>";
	?>

</body>
</html>

