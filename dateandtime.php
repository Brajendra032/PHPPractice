<h1 align="center">Data</h1>
<h6>Using <h3>Date()</h3> we can get the current data of the server</h3>
	<br>
	<br>
<?php 
			echo date('y');
?>
<hr>
<h5>We Have different parameter to get the current date and time of the server</h5>
<hr>
<h1 align="center">YEAR</h1>
<p><h6>Y</h6>  It denote the full year for example</p>
<?php 
		echo date("Y");
?>
<p><h6>y</h6>  It denote the only number of year for example </p>
<?php 
		echo date("y");
?>
<hr>
<h1 align="center">MONTH</h1>
<p><h6>m</h6>  It denote the month with numberic 0 for example </p>
<?php 
		echo date("m");
?>
<p><h6>M</h6>  It denote the short name of month for example</p>
<?php 
		echo date("M");
?>
<p><h6>F</h6>  It denote the full name of month for example</p>
<?php 
		echo date("F");
?>
<p><h6>n</h6>  It denote the number of month without 0 for example</p>
<?php 
		echo date("n");
?>
<hr>
<h1 align="center">DATE</h1>
<p><h6>d</h6>  It denote the date leading 0 for example</p>
<?php 
		echo date("d");
?>
<p><h6>j</h6>  date without leading zero for example</p>
<?php 
		echo date("j");
?>
<hr>
<p><h6>D</h6>  It denote the day name in short for example</p>
<?php 
		echo date("D");
?>
<p><h6>l</h6>  It denote the full name of day for example</p>
<?php 
		echo date("l");
?>
<hr>
<h1 align="center">TH,RD</h1>
<h4><h6>S</h6> It denote the th rd etc for example</h4>
<?php 
		echo date("jS");
?>
<hr>
<br>
<h1>Now Lets Combine All Required Parameter To Get The Current Data</h1>
<?php
		echo date_default_timezone_get();
		echo date("dS,F,Y");
?>
<h5>This Is The Default Time Zone Of Server</h5>
<hr>
<h3>So We Have To Set The Timezone Accordig The Our Contry</h3>
<h4>For That We Have A PreDefine Method <h3>date_default_timezone_set("Asia/Kolkata");</h3> </h4>
<?php 
			date_default_timezone_set("Asia/Kolkata");
			echo date_default_timezone_get();
			echo date("dS,F,Y");
?>
<hr>
<h1 align="center">Time</h1>
<h6>Using <h3>Date() "echo date('g');"</h3> we can also get the current time of the server</h3>
	<br>
	<br>
<?php 
			echo date('g');
?>
<hr>
<h5>We Have different parameter to get the current time of the server</h5>
<hr>
<h1 align="center">TIME</h1>
<p><h6>h</h6>  It denote the time in 12hrs with zero for example</p>
<?php 
		echo date("h");
?>
<p><h6>H</h6>  It denote the time in 24hrs without zero for example</p>
<?php 
		echo date("H");
?>
<p><h6>G</h6>  It Also denote the time in 24hrs without zero for example</p>
<?php 
		echo date("G");
?>
<p><h6>g</h6>  It Also denote the time in 12hrs with zero for example</p>
<?php 
		echo date("g");
?>
<hr>
<h1 align="center">MINUTE</h1>
<p><h6>i</h6>  It denote the current mintue for example</p>
<?php 
		echo date("i");
?>
<hr>
<h1 align="center">SECOND</h1>
<p><h6>s</h6>  It denote the current second for example</p>
<?php 
		echo date("s");
?>
<hr>
<h1 align="center">AM/PM</h1>
<p><h6>a</h6>  It denote the AM/PM in small letter for example</p>
<?php 
		echo date("a");
?>
<p><h6>A</h6>  It denote the AM/PM in captel letter for example</p>
<?php 
		echo date("A");
?>
<hr>
<h1>Now Lets Combine All To Get The Current Date and Time</h1>
<br>
<?php 		
			echo date("l-M-Y hA-i-s");
?>
<hr>
<h1 align="center">Some Extra</h1>
<h3>W Denote Current Week</h3> 
<h3>L Denote The Leap Year If Yes Then It Return True Else False</h3>
<h3>t Denote The No Of Days In A Month</h3>
<hr>
<?php 
	
?>