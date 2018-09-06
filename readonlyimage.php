<?php 
$fp=opendir("Images");
	while($f=readdir($fp))
		{
			if(!($f=="." || $f==".."))
				{
					$arr=explode(".", $f);
					$ext=end($arr);
						if($ext=="jpg" || $ext=="png" || $ext=="jpeg" || $ext=="gif")
							{
								echo "<img src='Images/$f' hight='400px' width='300px'>";
							}
				}			
		}
?>