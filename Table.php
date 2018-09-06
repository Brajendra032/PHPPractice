<!DOCTYPE html>
<html>
<head>
	<title>Table Menu</title>
</head>
<body>
		<H1>Know The Table</H1>
		<form method="POST" action="">
			FROM &nbsp<input type="text" name="first">&nbspTO
			<input type="text" name="second">
			<br>
			<input type="Submit" name="Submit" value="Get Table">
		</form>
</body>
</html>
<?php 
extract($_POST);
if(isset($Submit))
{
	if($first==$second)
	{
		for($i=1;$i<=10;$i++)
			{
				$total=$first*$i;
				echo "$total <br>";
			}
	}
		else
		{
			for($i=1;$i<=10;$i++)
				{
					$newtotal1=$first*$i;
					echo $newtotal1;
					echo "&nbsp";
					echo "<br>";
				}	
					echo "<br>";
					for($j=1;$j<=10;$j++)
						{
							$newtotal4=($first+1)*$j;
							   	      echo $newtotal4;
							          echo "&nbsp";
							          echo "<br>";		      
						}	
							echo "<br>";
							if($newtotal2==$second) 
								{
									echo "Already Displayed";

								}
								   else
								    {									}
										for($k=1;$k<=10;$k++)
											{
												$newtotal3=$second*$k;
												echo $newtotal3;
												echo "&nbsp";
												echo "<br>";		
											}
		}
}
?>

