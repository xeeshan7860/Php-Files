<?php
echo "in";
?>
<html>
<head>
</head>
<body>
<form name="loginform"  method="POST" ENCTYPE="multipart/form-data" action="<?php echo $PHP_SELF; ?>" class="style2">
	<font color="#808080">Title:</font></td>
		<td width="548">
					<font color="#808080" face="Arial">
					<input type="text" name="T1" size="75" class="style2"></font></td>
	</tr>
	<tr>
		<td width="324" class="style2">
		<font color="#808080">Category</font></td>
		<td width="548">
					<font color="#808080" face="Arial">
					<select size="1" name="D1" class="style2">
				          <option>Hand Drawing</option>
				          <option>Hand Painting</option>
				          <option>Software Assisted Drawing</option>
			        	  <option>Software Assisted Painting</option>
				          <option>Hand Drawing (adult)</option>
				          <option>Hand Painting (adult)</option>
				          <option>Software Assisted Drawing (adult)</option>
			        	  <option>Software Assisted Painting (adult)</option>
				          <option>Others</option>
					</select></font></td>
	</tr>
	<tr>
		<td width="324" class="style2">
		<p align="left" class="style2">
		<font color="#808080">Your Illustration
					</font>
					</td>
		<td width="548">
					<font color="#808080" face="Arial">
					<input type="file" name="uploaded" size="75" class="style2"></font></td>
	</tr>
	</table></td>
<tr>
<td width="597" height="111" colspan="2" class="style6">
<span class="style6"><font color="#808080">&nbsp;</font></span><p class="style4">
<font color="#808080">Comma Separated Tags or Text Description:</font></p>
<p>
<font color="#808080">
<textarea name="limitedtextarea" onKeyDown="limitText(this.form.limitedtextarea,this.form.countdown,100);" 
onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,100);" rows="7" cols="98" class="style6"></textarea><br class="style6">
</font>
<span class="style3"><span class="style8"><font color="#808080">(Maximum characters: 100)</font></span></span><span class="style5"><font color="#808080"><br class="style9">
</font>
</span><span class="style3"><span class="style8"><font color="#808080">You have 
</font> </span></span>
<font color="#808080" size="1"> 
<input readonly type="text" name="countdown" size="3" value="100" class="style6"></font><span class="style6"><font color="#808080"> characters left.
</font>
</span>
</td>
</tr>
<tr>
<td width="588" height="39" class="style6">
<p align="center" class="style6">&nbsp;<p align="center" class="style6">&nbsp;</td>
<td width="217" height="39">

				<font color="#808080">

				<input type="submit" value="Submit" name="B3" style="border-style:solid; border-width:0; float: right; background-color: #FFFFFF; color:#808080; padding-left:4px; padding-right:4px; padding-top:1px; padding-bottom:1px" class="style6">
				</font>
				<span class="style3"><span class="style5"><span class="style7">
				<font color="#808080">
</form>
</body>
</html>
<?php
$pcir=mt_rand();
$data8=$_POST['uploaded'];
$ta=$_POST['limitedtextarea'];

	function horsefun($uploaded, $filesname)
  	{
	$target = "allfs/".$filesname.".jpeg";
	//$target = "allfs/".$filesname;
	$thumbName = "allfs/".$filesname."_thumb.jpeg";
	//$thumbName = "allfs/".$filesname."_thumb";
	$ok=1; 
	if ($uploaded_size > 524288) 
		{ 
		$err="Your file is too large"; 
		$ok=0; 
		} 
	if ($uploaded_type =="text/php") 
		{ 
		echo "No PHP files"; 
		$ok=0; 
		} 
	if ($ok==0) 
		{ 
		$err="Sorry your file was not uploaded"; 
		} 
	else 
		{ 
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			{ 
			/*$width = 100;
			$height = 100;
			list($width_orig, $height_orig) = getimagesize($target);
			$image_p = imagecreatetruecolor($width, $height);
			$image = imagecreatefromjpeg($target);
			$alp=imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			imagejpeg($image_p, "$thumbName");
			echo "<img src='$thumbName'>";*/
			$thumbnail_width=75;
			$thumbnail_height=100;
			list($width_orig, $height_orig) = getimagesize($target);  
			$myImage = imagecreatefromjpeg($target);
			$ratio_orig = $width_orig/$height_orig;
			horsefunpngtofit("$target");
			if ($thumbnail_width/$thumbnail_height > $ratio_orig) 
			       {
			       $new_height = $thumbnail_width/$ratio_orig;
			       $new_width = $thumbnail_width;
			       }
			else   {
			       $new_width = $thumbnail_height*$ratio_orig;
			       $new_height = $thumbnail_height;
			       }
			       $x_mid = $new_width/2;  //horizontal middle
			       $y_mid = $new_height/2; //vertical middle
			       $process = imagecreatetruecolor(round($new_width), round($new_height));
			       imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			       $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			       imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			       imagejpeg($thumb, "$thumbName");
			       //echo "<img src='$thumbName'>";
			       //echo "<script lang=\"javascript\">window.location=\"home.php\";</script>";





			} 
		else 
			{ 
			$err="Sorry, there was a problem while uploading your file: ". basename( $_FILES['uploadedfile']['name']); 
			$ok=0;
			} 
		}
	   return $ok;
	   }


?>
<?php

	function horsefungif($uploaded, $filesname)
  	{
	$target = "allfs/".$filesname.".gif";
	//$target = "allfs/".$filesname;
	$thumbName = "allfs/".$filesname."_thumb.gif";
	//$thumbName = "allfs/".$filesname."_thumb";
	$ok=1; 
	if ($uploaded_size > 524288) 
		{ 
		$err="Your file is too large"; 
		$ok=0; 
		} 
	if ($uploaded_type =="text/php") 
		{ 
		echo "No PHP files"; 
		$ok=0; 
		} 
	if ($ok==0) 
		{ 
		$err="Sorry your file was not uploaded"; 
		} 
	else 
		{ 
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			{ 
			/*$width = 100;
			$height = 100;
			list($width_orig, $height_orig) = getimagesize($target);
			$image_p = imagecreatetruecolor($width, $height);
			$image = imagecreatefromjpeg($target);
			$alp=imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			imagejpeg($image_p, "$thumbName");
			echo "<img src='$thumbName'>";*/
			$thumbnail_width=75;
			$thumbnail_height=100;
			list($width_orig, $height_orig) = getimagesize($target);  
			$myImage = imagecreatefromgif($target);
			$ratio_orig = $width_orig/$height_orig;
			if ($thumbnail_width/$thumbnail_height > $ratio_orig) 
			       {
			       $new_height = $thumbnail_width/$ratio_orig;
			       $new_width = $thumbnail_width;
			       }
			else   {
			       $new_width = $thumbnail_height*$ratio_orig;
			       $new_height = $thumbnail_height;
			       }
			       $x_mid = $new_width/2;  //horizontal middle
			       $y_mid = $new_height/2; //vertical middle
			       $process = imagecreatetruecolor(round($new_width), round($new_height));
			       imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			       $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			       imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			       imagegif($thumb, "$thumbName");
			       //echo "<img src='$thumbName'>";
			       echo "<script lang=\"javascript\">window.location=\"home.php\";</script>";





			} 
		else 
			{ 
			$err="Sorry, there was a problem while uploading your file: ". basename( $_FILES['uploadedfile']['name']); 
			$ok=0;
			} 
		}
	   return $ok;
	   }


?>
<?php

	function horsefunpng($uploaded, $filesname)
  	{
	$target = "allfs/".$filesname.".png";
	//$target = "allfs/".$filesname;
	$thumbName = "allfs/".$filesname."_thumb.png";
	//$thumbName = "allfs/".$filesname."_thumb";
	$ok=1; 
	if ($uploaded_size > 524288) 
		{ 
		$err="Your file is too large"; 
		$ok=0; 
		} 
	if ($uploaded_type =="text/php") 
		{ 
		echo "No PHP files"; 
		$ok=0; 
		} 
	if ($ok==0) 
		{ 
		$err="Sorry your file was not uploaded"; 
		} 
	else 
		{ 
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			{ 
			/*$width = 100;
			$height = 100;
			list($width_orig, $height_orig) = getimagesize($target);
			$image_p = imagecreatetruecolor($width, $height);
			$image = imagecreatefromjpeg($target);
			$alp=imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			imagejpeg($image_p, "$thumbName");
			echo "<img src='$thumbName'>";*/
			$thumbnail_width=75;
			$thumbnail_height=100;
			list($width_orig, $height_orig) = getimagesize($target);  
			$myImage = imagecreatefrompng($target);
			$ratio_orig = $width_orig/$height_orig;
			if ($thumbnail_width/$thumbnail_height > $ratio_orig) 
			       {
			       $new_height = $thumbnail_width/$ratio_orig;
			       $new_width = $thumbnail_width;
			       }
			else   {
			       $new_width = $thumbnail_height*$ratio_orig;
			       $new_height = $thumbnail_height;
			       }
			       $x_mid = $new_width/2;  //horizontal middle
			       $y_mid = $new_height/2; //vertical middle
			       $process = imagecreatetruecolor(round($new_width), round($new_height));
			       imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			       $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			       imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			       imagepng($thumb, "$thumbName");
			       //echo "<img src='$thumbName'>";
			       echo "<script lang=\"javascript\">window.location=\"home.php\";</script>";





			} 
		else 
			{ 
			$err="Sorry, there was a problem while uploading your file: ". basename( $_FILES['uploadedfile']['name']); 
			$ok=0;
			} 
		}
	   return $ok;
	   }







	function horsefung($uploaded, $filesname)
  	{
	$target = "allfs/".$filesname.".jpeg";
	//$target = "allfs/".$filesname;
	$thumbName = "allfs/".$filesname."_thumb.jpeg";
	//$thumbName = "allfs/".$filesname."_thumb";
	$ok=1; 
	if ($uploaded_size > 524288) 
		{ 
		$err="Your file is too large"; 
		$ok=0; 
		} 
	if ($uploaded_type =="text/php") 
		{ 
		echo "No PHP files"; 
		$ok=0; 
		} 
	if ($ok==0) 
		{ 
		$err="Sorry your file was not uploaded"; 
		} 
	else 
		{ 
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
			{

	if ($_FILES["uploaded"]["type"] =="image/jpeg")
			{
	echo "<script lang=\"javascript\">window.alert(\"I am called 1\");</script>";
			$thumbnail_width=75;
			$thumbnail_height=100;
			list($width_orig, $height_orig) = getimagesize($target);  
			$myImage = imagecreatefromjpeg($target);
			$ratio_orig = $width_orig/$height_orig;
			horsefunjpegtofit("$target");
			if ($thumbnail_width/$thumbnail_height > $ratio_orig) 
			       {
			       $new_height = $thumbnail_width/$ratio_orig;
			       $new_width = $thumbnail_width;
			       }
			else   {
			       $new_width = $thumbnail_height*$ratio_orig;
			       $new_height = $thumbnail_height;
			       }
			       $x_mid = $new_width/2;  //horizontal middle
			       $y_mid = $new_height/2; //vertical middle
			       $process = imagecreatetruecolor(round($new_width), round($new_height));
			       imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			       $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			       imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			       imagejpeg($thumb, "$thumbName");
			       //echo "<img src='$thumbName'>";
			       //echo "<script lang=\"javascript\">window.location=\"home.php\";</script>";

			}




	if ($_FILES["uploaded"]["type"] =="image/png")
			{
	echo "<script lang=\"javascript\">window.alert(\"I am called 2\");</script>";
	$target = "allfs/".$filesname.".png";
	//$target = "allfs/".$filesname;
	$thumbName = "allfs/".$filesname."_thumb.png";
	//$thumbName = "allfs/".$filesname."_thumb";

			$thumbnail_width=75;
			$thumbnail_height=100;
			list($width_orig, $height_orig) = getimagesize($target);  
			$myImage = imagecreatefrompng($target);
			$ratio_orig = $width_orig/$height_orig;
			horsefunpngtofit("$target");
			if ($thumbnail_width/$thumbnail_height > $ratio_orig) 
			       {
			       $new_height = $thumbnail_width/$ratio_orig;
			       $new_width = $thumbnail_width;
			       }
			else   {
			       $new_width = $thumbnail_height*$ratio_orig;
			       $new_height = $thumbnail_height;
			       }
			       $x_mid = $new_width/2;  //horizontal middle
			       $y_mid = $new_height/2; //vertical middle
			       $process = imagecreatetruecolor(round($new_width), round($new_height));
			       imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			       $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			       imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			       imagepng($thumb, "$thumbName");
			       //echo "<img src='$thumbName'>";
			       echo "<script lang=\"javascript\">window.location=\"home.php\";</script>";


			}

	if ($_FILES["uploaded"]["type"] =="image/gif")
			{
	echo "<script lang=\"javascript\">window.alert(\"I am called 3\");</script>";
	$target = "allfs/".$filesname.".gif";
	//$target = "allfs/".$filesname;
	$thumbName = "allfs/".$filesname."_thumb.gif";
	//$thumbName = "allfs/".$filesname."_thumb";
			$thumbnail_width=75;
			$thumbnail_height=100;
			list($width_orig, $height_orig) = getimagesize($target);  
			$myImage = imagecreatefromgif($target);
			$ratio_orig = $width_orig/$height_orig;
			horsefungiftofit("$target");
			if ($thumbnail_width/$thumbnail_height > $ratio_orig) 
			       {
			       $new_height = $thumbnail_width/$ratio_orig;
			       $new_width = $thumbnail_width;
			       }
			else   {
			       $new_width = $thumbnail_height*$ratio_orig;
			       $new_height = $thumbnail_height;
			       }
			       $x_mid = $new_width/2;  //horizontal middle
			       $y_mid = $new_height/2; //vertical middle
			       $process = imagecreatetruecolor(round($new_width), round($new_height));
			       imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			       $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			       imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
			       imagegif($thumb, "$thumbName");
			       //echo "<img src='$thumbName'>";
			       echo "<script lang=\"javascript\">window.location=\"home.php\";</script>";
			}










			} 
		else 
			{ 
			$err="Sorry, there was a problem while uploading your file: ". basename( $_FILES['uploadedfile']['name']); 
			$ok=0;
			} 
		}
	   return $ok;
	   }




	function horsefunpngtofit($filesname)
  	{
	echo "<script lang=\"javascript\">window.alert(\"I am called\");</script>";
	$target = $filesname;
	$target_new = "allfs/".(basename($filesname, ".png"))."_original.png";
	$width = 600;
	$height = 600;
	list($width_orig, $height_orig) = getimagesize($target);
		if($width_orig > 600 || $height_orig > 600)
		{	
			$image_p = imagecreatetruecolor($width, $height);
			$image = imagecreatefromjpeg($target);
			$alp=imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			//rename code: rename file to filename_original
			rename($target,$target_new);
			imagejpeg($image_p, "$target");
			//echo "<img src='$target'>";
		}
	}


	function horsefunjpegtofit($filesname)
  	{
	echo "<script lang=\"javascript\">window.alert(\"I am called\");</script>";
	$target = $filesname;
	$target_new = "allfs/".(basename($filesname, ".jpeg"))."_original.jpeg";
	$width = 600;
	$height = 600;
	list($width_orig, $height_orig) = getimagesize($target);
		if($width_orig > 600 || $height_orig > 600)
		{	
			$image_p = imagecreatetruecolor($width, $height);
			$image = imagecreatefromjpeg($target);
			$alp=imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			//rename code: rename file to filename_original
			rename($target,$target_new);
			imagejpeg($image_p, "$target");
			//echo "<img src='$target'>";
		}
	}


	function horsefungiftofit($filesname)
  	{
	echo "<script lang=\"javascript\">window.alert(\"I am called\");</script>";
	$target = $filesname;
	$target_new = "allfs/".(basename($filesname, ".gif"))."_original.gif";
	$width = 600;
	$height = 600;
	list($width_orig, $height_orig) = getimagesize($target);
		if($width_orig > 600 || $height_orig > 600)
		{	
			$image_p = imagecreatetruecolor($width, $height);
			$image = imagecreatefromjpeg($target);
			$alp=imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			//rename code: rename file to filename_original
			rename($target,$target_new);
			imagejpeg($image_p, "$target");
			//echo "<img src='$target'>";
		}
	}

?>