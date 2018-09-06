<?php 
$fp=opendir("Images");
while($f=readdir($fp))
	{
		echo "$f"."<br>";
	}
?>