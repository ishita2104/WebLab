<?php
 $file = "count.txt";
 $count = 0;
 $count = strval(file_get_contents($file));
 $count = (int)$count;
 file_put_contents($file, $count+1);
 ?>
 <br><br>
 <?php
 echo "<center><h1>ISHITA CHATTOPADHYAY - 1CR18CS077</h1></center>";
 echo "<center> <h2>Visitor Count: ".$count."</h2></center>";
?>
