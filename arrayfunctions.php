<h1 align="center">Array Functions In PHP</h1>
<h6>Using <h3>Count</h3> Method We Can Calculate Total No Of Index In Array In PHP</h6>
<br>
<?php 
		$arr=array(1,2,3,4,5,6,7,8,9,10);
		$value=count($arr);
		echo "<br>";
		echo "$value";

?>
<hr>
<h6>Using <h3>Sort</h3> Method We Can Sort The Array In PHP. If Array Sort Successfully Then It Will Return True</h6>
<br>
<?php 
		$arr=array(1,2,3,4,5,6,7,8,9,10);
		$value=sort($arr);
		echo "<br>";
		echo "$value";
		echo "<br>";
		var_dump($value)

?>
<hr>
<h6>Using <h3>Rsort</h3> Method We Can Sort The Associative Array In PHP. If Array Sort Successfully Then It Will Return True</h6>
<br>
<?php 
		$arr=array
					(
						"FirstName"=>"Raghvendra",
						"LastName"=>"Pathak"
					);
					$value=rsort($arr);
						echo "<br>";
						echo "$value";
						echo "<br>";
						var_dump($value)
?>
<hr>
<h6>Using <h3>ksort</h3> Method We Can Sort The Key Of Array In PHP. If Array Sort Successfully Then It Will Return True </h6>
<br>
<?php 
			$arr=array
					(
						"3"=>"Raghvendra",
						"2"=>"Pathak"
					);
					$value=krsort($arr);
						echo "<br>";
						echo "$value";
						echo "<br>";
						var_dump($value);
?>
<hr>
<h6>Using <h3>ARRAY_PRODUCT</h3> Method We Multiple All The Values Of Array In PHP</h6>
<br>
<?php 
			$arr=array
					(
						1,2,3,4,5,6,7,8,9
					);
					$value=array_product($arr);
						echo "<br>";
						echo "$value";
						echo "<br>";
?>
<hr>
<h6>Using <h3>ARRAY_SUM</h3> Method We Multiple All The Values Of Array In PHP</h6>
<br>
<?php 
			$arr=array
					(
						1,2,3,4,5,6,7,8,9
					);
					$value=array_sum($arr);
						echo "<br>";
						echo "$value";
						echo "<br>";
?>
<hr>
<h6> Using <h3>ARRAY_SUM </h3> Method We Multiple All The Values Of Array In PHP</h6>
<br>
<?php 
			$arr=array
					(
						1,2,3,4,5,6,7,8,9
					);
					$value=array_sum($arr);
						echo "<br>";
						echo "$value";
						echo "<br>";
?>
<hr>
<h6> Using <h3>ARRAY_COMBINE</h3> Method We Can Combine Only Two Arrays. <h4> The Value Of First Array Will Treat As The Key Of Final Array </h4> And <h4>The Value Of Second Array will Treated As The Value Of Final Array </h4> <h2>Note: </h2> <h3> 1. We Cannot Combine More Than Two Arrays If We Do We Will Get Error - </h3>
</h6> <p>Warning: array_combine() expects exactly 2 parameters, 3</p>
<h3>2. We Can Only Avail Combine The Array If Both Have Equal Parameters.</h3>
<br>
<pre>
<?php 
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
			$arr1=array
					(	"Raghvendra",
						"Pathak",
						9918603117,
						"BCA",
					);
					$value=array_combine($arr,$arr1);
						echo "<br>";
						print_r($value);
						echo "<br>";
?>
</pre>
<hr>
<h6> Using <h3>ARRAY_MERGE</h3> Method We Can Merge Two Arrays. No Need Of Equal Parameter Is Required Here.<h4> The Value Of Both Array Will Treat As The Value Of Final Array. And They Have The New Value Of Index. We Can Merge More Than Two Array </h4>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
			$arr1=array
					(	"Raghvendra",
						"Pathak",
						9918603117,
						"BCA",
					);
			$arr2=array
					(	"Tech2Tip",
						"@mobsnapshot",
						"Mobileography",
						"Youtube/RaghvendraPathak",
					);
					$value=array_merge($arr,$arr1,$arr2);
						echo "<br>";
						print_r($value);
						echo "<br>";
?>
</pre>
<hr>
<h6> Using <h3>In_Array</h3> Method We Can Find The Element Wheather It Is In Array Or Not. If It 
Is Available In Array It Return True Else False.</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
				$value=in_array("FirstName", $arr);
				echo "$value";
				echo "<br>";
				var_dump($value);
?>
</pre>
<hr>
<h6> Using <h3>Array_Search</h3> Method We Can Find The Element Wheather It Is In Array If Element Found It Will Return The Exact Location Of Element In Array.</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
				$value=Array_Search("FirstName", $arr);
				$value1=array_search("Qualification", $arr);
				echo "$value"."<br>";
				echo "$value1";
				echo "<br>";
?>
</pre>
<hr>
<h6> Using <h3>Array_Key_Exists</h3> Method We Can Check Weather Specified Key Is Available In The
Array Or Not. It Return True If Exists False If Not</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
				$value=array_key_exists(3, $arr);
				echo "$value";
				echo "<br>";
?>
</pre>
<hr>
<h6> Using <h3>Array_Key</h3> Method We Can Extract Only The Key Of An Array. The Keys Will Become
Value To Array</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
				$value=array_keys($arr);
				print_r($arr);
				echo "<br>";
?>
</pre>
<hr>
<h6> Using <h3>Array_Push</h3> Method We Can Add A New Value To Existing Array At Last It Return The Total Number Of Elements In Array</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
				$value1=count($arr);
				echo "There Are"." "."$value1"." "."Element Is In Array";
				echo "</br>";
				print_r($arr);
				echo "</br>";
				echo "<h3>Using Array_Push</h3>";
				echo "</br>";
				$value=array_push($arr, "Website");
				print_r($arr);
				echo "<br>";
				echo "Now There Are"." "."$value"." "."Elements In Array";
?>
</pre>
<hr>
<h6> Using <h3>Array_Pop</h3> Method We Can Delete A Value From Existing Array From Last. It Return The Total Existing Number Of Elements In Array After Deleting</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"Qualification"
					);
				$value1=count($arr);
				echo "There Are"." "."$value1"." "."Element Is In Array";
				echo "</br>";
				print_r($arr);
				echo "</br>";
				echo "<h3>Using Array_POP</h3>";
				echo "</br>";
				$value=array_pop($arr);
				print_r($arr);
				echo "<br>";
				echo "Now There Are"." "."$value"." "."Elements In Array";
?>
</pre>
<hr>
<h6> Using <h3>Array_Unshift</h3> We Can Add A New Value To The Existing Array. The Value Will Store At The Top Of The Array.</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber"
					);
						$value=array_unshift($arr, "Qualification");
						echo $value;
						echo "<br>";
						print_r($arr);
?>
</pre>
<hr>
<h6> Using <h3>Array_Shift</h3> We Can Remove A Value From The Existing Array From The Top.	</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber"
					);
						$value=array_shift($arr);
						echo $value;
						echo "<br>";
						print_r($arr);
?>
</pre>
<hr>
<h6> Using <h3>Unset</h3> We Can Remove A Value From The Existing Array From Any Where By Giving The Value Of Index.</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber"
					);
						unset($arr[0]);
						print_r($arr);
						
?>
</pre>
<hr>
<h6> Using <h3>Array_Unique</h3> This Method Remove The Duplicate Entry From The Array</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber",
						"FirstName",
						"LastName",
						"ContactNumber"
					);
					echo "<h3>Before</h3>";
					print_r($arr);
					echo "<br>";
					echo "<h3>After</h3>";
					echo "<br>";
					$value=array_unique($arr);
					 print_r($value);

?>
</pre>
<hr>
<h6> Using <h3>Shuffle</h3> We Can Shuffle The Array Values</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName",
						"ContactNumber"
					);
						shuffle($arr);
						print_r($arr);
						
?>
</pre>
<hr>
<h6> Using <h3>End</h3> Method We Can Check That What Is The Last Value Of Our Array. That Means
The Pointer Points To The Last Using This Method</h6>
<pre>
<?php 		
			$arr=array
					(
						"FirstName",
						"LastName"
					);
						$value=end($arr);
						print_r($value);
						echo "<br>";
						var_dump($value);
						
?>
</pre>
<hr>
<h6> Using <h3>Current</h3> Method We Can Check That What Is The First Value Of Array. That Means The Pointer Points To The Current Element</h6>
<pre>
<?php 		
			$arr=array
					(
						"Hero",
						"FirstName",
						"LastName"
					);
						$value=current($arr);
						print_r($value);
						echo "<br>";
						var_dump($value);
						
?>
</pre>
<hr>
<h6> Using <h3>Array_Slice</h3> Method Cut The Element Just Before From Where It Is Been Sliced. And
Display All The Remaining Values.</h6>
<pre>
<?php 		
			$arr=array
					(
						1,2,3,4,5,6,7,8,9,10
					);
						$value=array_slice($arr,5);
						print_r($value);
						
?>
</pre>
<hr>
<h6>We Can Also Use <h3>Array_Slice</h3> To Take Value From One Particular Index To Next Particular 
Index For That We Need TO Pass To Parameter After Array In Function. First Parameter Denotes From 
Position. And The Second One Denotes The Total Number Of Element Or We Can How Much Position We 
Want To Take.</h6>
<pre>
<?php 		
			$arr=array
					(
						1,2,3,4,5,6,7,8,9,10
					);
						$value=array_slice($arr,5,2);
						print_r($value);
						
?>
</pre>
<hr>
<h6>Using <h3>Array_Splice</h3> Method We Can Add Elements In The Existing Array From Desire Postion To Desire Position, We Can Remove Element From Particular Positon And We Can Divide Array Into Sub Array</h6>
<pre>
<?php 		
			$arr=array
					(
						
						"BMW"=>"Red",
						"Audi"=>"White",
						"Range Rover"=>"Black"
					);
			$arr1=array
					(
						
						"Iphone"=>"Black",
						"Samsung"=>"Blue",
						"Onplue"=>"Red"
					);
						print_r(array_splice($arr,0,2,$arr1));	
						print_r(array_splice($arr,1,333mads``   ))	
?>
</pre>
<hr>






