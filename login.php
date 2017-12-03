<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body
{
	background-color:grey;
	

}
div
{
	width:200px;
	height:200px;
	background-color:blue;
margin-left:500px;
margin-top:200px;
padding:100px;
border-radius:30px;

}

</style>
</head>

<body>
<?php
$host="localhost";
$user="root";
$password="";
$databse="user";
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$databse);


 
?>
<div>
<form method="post" action="">
<table>
<tr>
<td>login id</td>
<td><input type="text" name="id"/></td>
</tr>
<tr>
<td> password</td>
<td><input type="password" name="password"/>
</tr>
<tr>
<tr>
<td> <input type="submit" name="login"/></td>

</tr>
</table>
</form>
</div>



<?php
if(isset($_POST['login']))
{
	
	$id=$_POST['id'];
	$name=$_POST['password'];
if($id=="1" && $name=="bilal")
{
	
	echo "<script>
alert('you are log in')
</script>";
}
}
?>

 

</body>
</html>