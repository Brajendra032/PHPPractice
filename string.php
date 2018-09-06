<h1>String Functions In PHP</h1>
<?php 
$arr="RaghvendraPathak";
$len=strlen($arr);
echo "$len";
?>
<hr>
<?php 
$arr="RaghvendraPathak";
$len=strtoupper($arr);
echo "$len";
?>
<hr>
<?php 
$arr="RaghvendraPathak";
$len=strtolower($arr);
echo "$len";
?>
<hr>
<?php 
$arr="RaghvendraPathak";
$len=ucfirst($arr);
echo "$len";
?>
<hr>
<?php 
$arr="<h1>RaghvendraPathak</h1>";
$len=strip_tags($arr);
echo "$len";
?>
<hr>
<?php 
$arr="RaghvendraPathak";
$len=addslashes($arr);
echo "$len";
?>
<hr>