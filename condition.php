<!DOCTYPE html>
<html>
<head>
	<title>Condition Checking</title>
</head>
<body bgcolor="#f2f2f2">	
		<h1 align="center">Checking The Condition</h1>
				<?php 
					$username ="Raghvendra";
					$password ="HelloPassword";
					if($username=="Raghvendra" && $password=="HelloPassword")
						{
							echo "<h1 align='center'>Login SuccesFull</h1>";
						}
						else
						{
							echo "<h1 align='center'>UserName Or Password Is Incorrect</h1>";
						}
				?>
</body>
</html>