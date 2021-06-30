<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			font-size: 15px;
		}
		h1{
			font-family: arial;
		}
		table{
			background-color: coral;
			font-size: 20px;
		}
	</style>
</head>
<body><center><h1><u>Patient details</u></h1>
	<form action="Exam1.php" method="POST" name="form2"><table border='2' height="50%" width="50%">
		<tr><th>Patient Name</th><th><input type="text" name="pname" id="pname" required></th></tr>
		<tr><th>Address</th><th><textarea rows="5" cols="25" name="address" required></textarea></th></tr>
		<tr><th>Doctor Name</th><th><input type="text" name="docname" id="docname" required></th></tr>
		<tr><th>Admission Date</th><th><input type="Date" name="ad_date" id="ad_date" required></th></tr>
		<tr><th>Room no</th><th><input type="number" name="rno" id="rno" required></th></tr>
		<th colspan="2"><input type="submit" name="s1" value="save" onclick="return validate()"></th></tr></table></form></center>
		<br><br><br>
		
		<table align="center">
			<form action="Exam1.php" method="POST" name="form2">
			<tr>
				<th><input type="submit" name="s2" value="show details"></th>
			</tr>
			</form>
		</table>
		<script type="text/javascript">
			function validate()
			{
				var pname=document.getElementById("pname");
				if(!pname.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid Patient Name");
					return false;
				}
				var docname=document.getElementById("docname");
				if(!docname.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid Doctor Name");
					return false;
				}
			}
		</script>

</body>
</html>