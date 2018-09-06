<?php 
		if(isset($_POST['Submit']))
			{
				$person1=$_POST['person1'];
				$person2=$_POST['person2'];
				$person3=$_POST['person3'];
			}
		$sumof=$person1+$person2+$person3;
			echo $sumof;
?>