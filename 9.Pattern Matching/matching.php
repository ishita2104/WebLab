<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
  <style type="text/css">
    body{
      /*color: white;*/
      text-align: center;
      margin-top: 70px;
    }
  </style>
<body>
<h2>ISHITA CHATTOPADHYAY - 1CR18CS077</h2>
<?php
  $states = "Mississippi Alabama Texas Massachusetts Kansas";
  $statearray = explode(" ", $states);
  $statesList = [];
  echo "<h2>Original Array</h2>";
  foreach ($statearray as $key => $value) {
  print("statearray[$key] = $value<br>");
  }
  foreach ($statearray as $value) {
  if(preg_match('/.*xas$/',$value))
  $statesList[0] = $value;
  }
  foreach ($statearray as $value) {
  if(preg_match('/^k.*s$/i',$value))
  $statesList[1] = $value;
  }
  foreach ($statearray as $value) {
  if(preg_match('/^M.*s$/',$value))
  $statesList[2] = $value;
  }
  foreach ($statearray as $value) {
  if(preg_match('/.*a$/',$value))
  $statesList[3] = $value;
  }
  echo "<h2>Resultant Array</h2>";
  foreach ($statesList as $key => $value) {
  print("statesList[$key] = $value<br>");
  }
?>
</body>
</html>
