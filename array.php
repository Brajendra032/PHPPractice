<h1 align="center">Array In PHP</h1>
<h6>We can define array like this</h6>
<pre>
<?php 
		$arr=array(1,2,3,4,5,6);
		print_r($arr);
?>
</pre>
<hr>
<h6>This way we can define the our own index in array</h6>
<pre>
<?php 
		$arr1=array(10=>12,13,12=>13);
		print_r($arr1);
?>
</pre>
<hr>
<h6>This is the example of associtive array and we call any one value using the index value </h6>
<pre>
<?php 
		$arr2=array("Name"=>"Raghvendra","Qualification"=>"BCA");
		print_r($arr2["Name"]);
?>
</pre>
<hr>
<pre>
<h6>This is the example of associtive array</h6>
<?php 
		$arr3=array("Name"=>"Raghvendra","Qualification"=>"BCA");
		print_r($arr3);
?>
</pre>
<hr>
<pre>
<h6>We can define array inside the array</h6>
<?php
		$arr4=array
		(
			array
				(
					"FirstName"=>"Raghvendra",
					"LastName"=>"Pathak"
				),
				array
				(
					"Qualification"=>"BCA",
					"MobileNo"=>9918603117
				)
		);	
				print_r($arr4);
?>			
</pre>
<hr>
<pre>
<h6>We can define array inside the array</h6>
<?php
		$arr4=array
		(
			array
				(
					"FirstName"=>"Raghvendra",
					"LastName"=>"Pathak"
				),
				array
				(
					"Qualification"=>"BCA",
					"MobileNo"=>9918603117
				)
		);	
				print_r($arr4[1]['Qualification']);
?>			
</pre>