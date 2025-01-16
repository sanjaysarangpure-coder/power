<?php
$myfile = fopen("xyz.php", "w") or die("Unable to open file!");
$txt = "OFF";
fwrite($myfile, $txt);
fclose($myfile);
?>
Click <a href='on.php'>LED ON</a>
<br>
Click <a href='off.php'>LED OFF</a>