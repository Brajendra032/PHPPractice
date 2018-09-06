<?php 
$fgetsmethod=fopen("file.txt", "r");
for(;$i=fgets($fgetsmethod);)
echo "$i"."<br>";

?>