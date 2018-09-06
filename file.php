<h4>Fopen r mode in fread</h4>
<?php 
$file = fopen("file.txt","r");
$size=filesize("file.txt");
$value=fread($file,$size);
echo "$value";
?>
<hr>
<h4>Fwrite w mode in fwrite</h4>
<?php
echo "</br>"; 
$newfile=fopen("file.txt", "w");
$newtext="I AM Updated";
$new=fwrite($newfile,$newtext);
echo "How Much Data I Updated";
echo "</br>"; 
echo "$new"." "."Characters";
?>
<hr>
<h4>Fwrite a mode in fwrite</h4>
<?php
echo "</br>"; 
$newfiles=fopen("file.txt", "a");
$newtexts="I AM Updated";
$news=fwrite($newfiles,$newtexts);
echo "How Much Data I Updated";
echo "</br>"; 
echo "$news"." "."Characters";
?>
<hr>
<h4>Fgets Method</h4>
<?php 
$fp=fopen("file.txt", "r");
for(;$i=fgets($fp);)
{
	echo "$i";
}
?>
<?php 
$file="file/txt";
if(file_exists($file))
	{
		unlink($file);
		echo "Your File Deleted Succesfully";
	}
	else
		{
			echo "File Not Exits";
		}
?>