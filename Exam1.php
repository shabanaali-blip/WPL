<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			font-size: 15px;
		}
		table{
			font-size: 20px;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
$cc=mysqli_connect("localhost","root","","hospital");
if($cc->connect_error)
{
	echo "Connection failed";
}
else
{
	if(isset($_POST['s1']))
	{
		$a=($_POST['pname']);
		$b=($_POST['address']);
		$c=($_POST['docname']);
		$d=($_POST['ad_date']);
		$e=($_POST['rno']);

     $q="INSERT INTO patient values('$a','$b','$c','$d','$e')";
     if($cc->query($q))
     {
     	?>
           
		<a href="Exam3.php">Back</a>
     	<?php
     }
     else
     {
     	echo "Invalid entry";
     }
	}
	if(isset($_POST['s2']))
	{
		$sum=0;
		$sql="SELECT * from patient";
		$result=mysqli_query($cc,$sql);
		echo "<center><br><br><br>";
		echo "<table border='1'><caption>LIST OF PATIENTS</caption><tr>
		<td>Patient Name</td>
		<td>Doctor Name</td>
		<td>Room No:</td></tr>";
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row['pname']."</td><td>".$row['docname']."</td><td>".$row['rno']."</td></tr>";
		}
		echo"</table>";
		echo"</center>";
		?>
		<a href="Exam3.php">back</a>
		<?php

	}
}

$cc->close();
?>