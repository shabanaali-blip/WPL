<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sample";

$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
?>
<html>
<head>
	<title>Bill</title>
</head>
<body>
	<h4 align="center">Hypermarket</h4>
 <form method="POST">
 <label>Product<input type="text" name="product"></label><br>
 <label>Price<input type="text" name="rate"></label><br><br>
 <input type="submit" name="submit" value="Submit">
 	
 </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	$item=$_POST["product"];
	$rate=$_POST["rate"];
	$q="insert into bill(item,rate)values('$item','$rate')";
	mysqli_query($con,$q);
	echo "<script>alert('Successfully Inserted');</script>";
}
?>
