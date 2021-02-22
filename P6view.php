<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sample";
$con=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
?>
<html>
<head>
	<title>View Bill</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Product</th>
			<th>Price</th>
		</tr>
	<?php
      $q="select * from bill";
      $res=mysqli_query($con,$q);
      while ($f=mysqli_fetch_array($res)) {
	?>
	    <tr>
	    	<td><?php echo $f["item"]; ?></td>
	    	<td><?php echo $f["rate"]; ?></td>
	    </tr>
	<?php
}
?>
        <tr>
        	<th>Total</th>
        	<?php
              $qr="select sum(rate) as total from bill";
              $res=mysqli_query($con,$qr);
              $f=mysqli_fetch_array($res);
        	?>
        	<td><?php echo $f['total']; ?></td>
        </tr>
	</table>

</body>
</html>