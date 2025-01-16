<?php
$myfile = fopen("xyz.php", "w") or die("Unable to open file!");
$txt = "ON";
fwrite($myfile, $txt);
fclose($myfile);
?>
<a href='on.php'>LED ON</a>
<br>
<a href='off.php'>LED OFF</a>