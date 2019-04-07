<?php
$myfile = fopen("newfile.html","w") or die("Unable to open file!");
$txt = "Opportunities Near You\n";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
