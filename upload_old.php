<?php
session_start();
if ( !isset($_SESSION['Loginuser']) )
{
echo "<script lang=\"javascript\">window.location=\"index.php\";</script>";
}
else
{
include('newcommonfunction.php');   
$inuse=$_SESSION['Loginuser'];
?>
<html>
<head>
<LINK REL="SHORTCUT ICON" HREF="http://www.nintytwo.com/favicon.ico"> 
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Your Private Video Resume For Your Potential Employers! Talk about your achievements in detail and with confidence." />
<meta name="keywords" content="jobs, resumes, job, resume, employment, employer, applicant, cv" />
<title>Nintytwo: Your Private Video Resume For Your Potential Employers!</title>
<style type="text/css" media="screen">
body {
	margin:50px 0px; padding:0px; /* Need to set body margin and padding to get consistency between browsers. */
	text-align:center; /* Hack for IE5/Win */
	}
	
#Content {
	/*background-image: url(N2BG.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center center;*/
	width:500px;
	margin:0px auto; /* Right and left margin widths set to "auto" */
	text-align:left; /* Counteract to IE5/Win Hack */
	padding:15px;
	border:1px solid black;
	background-color:white;
	}
.style1 {
	font-family: "Book Antiqua";
	font-size: xx-large;
	color: #C0C0C0;
}
.style2 {
	font-family: "Book Antiqua";
	font-size: x-small;
	color: #C0C0C0;
}
.style3 {
	font-family: "Book Antiqua";
}
.style4 {
	font-family: "Book Antiqua";
	font-weight: bold;
	font-size: small;
	color: #C0C0C0;
}
.style5 {
	font-size: small;
}
.style6 {
	font-family: "Book Antiqua";
	font-size: small;
	color: #C0C0C0;
}
.style7 {
	color: #C0C0C0;
}
.style8 {
	font-size: small;
	color: #C0C0C0;
}
.style9 {
	font-family: "Book Antiqua";
	color: #C0C0C0;
}
.style10 {
	color: #C0C0C0;
	text-align: left;
	font-family: "Book Antiqua";
	font-size: x-small;
}
</style>
</head>
<body>


<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>

<p>
<div id="Content" style="width: 850px; height: 650px; border-color: white">
<table border="0" width="818" id="table3">
	<tr>
		<td width="643">
		<span class="style1"><font color="#808080">illustr</font></span><font color="#808080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				</font>

				</td>
		<td width="165">
		&nbsp;</td>
	</tr>
		</table>
<table width="818">
<tr>
<td width="597" colspan="2">
<p align="right">
&nbsp;<table border="0" width="813" id="table4">
	<tr>
		<td width="324" class="style2"><p align="left">
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
<?php
if(isset($_POST['B3']))
{
$con=mysql_connect("nintytwo.db.5502363.hostedresource.com", "nintytwo", "twentyOne21") or die("unable to connect to mysql");
mysql_select_db("nintytwo",$con);
$sql="select * from users where username='$inuse'";
$sqlrun=mysql_query($sql);
while ($row = mysql_fetch_assoc($sqlrun))
{
$username=$row["username"];
$fkid=$row["id"];
}
$nof=$_POST['T1'];
$_SESSION['nof']=$nof;
$cate=$_REQUEST['D1'];
$data8=$_POST['uploaded'];
$ta=$_POST['limitedtextarea'];
$_SESSION['ta']=$ta;
$pcir=mt_rand();
//$fna=$pcir.".jpeg";
if($nof == '' || strlen($nof) > 100 || strlen($ta) > 400 )
{
$_SESSION['err']="<font size=\"2\" face=\"Book Antiqua\" color=\"#808080\">Error: All fields are required</font>";
//echo "<meta http-equiv='refresh' content='0'>";
}
else
{
$sql2=mysql_query("insert into ilstrdatabase (`fkid`,`title`,`category`,`tag`,`Pic`) values ('$fkid','$nof','$cate','$ta','$pcir')");
//echo "insert into ilstrdatabase (`fkid`,`title`,`category`,`tag`,`Pic`) values ('$fkid','$nof','$cate','$ta','$pcir')";
$re=horsefung($data8,$pcir);
/*if (exif_imagetype("$data8") == IMAGETYPE_GIF) {
$re=horsefungif($data8,$pcir);
}
else if (exif_imagetype("$data8") == IMAGETYPE_PNG) {
$re=horsefunpng($data8,$pcir);
}
else if (exif_imagetype("$data8") == IMAGETYPE_JPEG) {
$re=horsefung($data8,$pcir);
}
else
{
echo "exif_imagetype(\"$data8\")";
echo "<tr><td><font color=\"#808080\" size=\"2\"><p align=\"right\">It seems that you have uploaded a file of non-supported file format.</p></font></td></tr>";
mysql_query("delete from ilstrdatabase where `Pic`=$pcir");
$re=1;
}*/
if($re==0)
{
echo "<tr><td><font color=\"#808080\" size=\"2\"><p align=\"right\">File upload error. Please send the data again. Possible reasons: wrong file format or maximum size violation.</p></font></td></tr>";
}
else if ($re==1)
{
}
else
{
echo "<meta http-equiv='refresh' content='0'>";
}
}
}
echo "<p>".$_SESSION['err']."</p>";
?>

				</font>

				</span></span></span>

</td>
</tr>
        <tr>
          <td colspan="2">
          </td> 
        </tr>
        <tr>
          <td colspan="2">
          </td> 
        </tr>
        <tr>
          <td colspan="2">
	
          </td> 
        </tr>
        </table>
       </div>
<div id="Content" style="width: 850px; height: 40px; border-color: #FFFFFF">
<p class="style10"> <font color="#808080">&copy 2009 illustr </font>
</div>
<?php
}
?>
</body>
</html>


<?php

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
			h2orsefunpngtofit("$target");
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