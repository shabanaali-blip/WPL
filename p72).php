<?php
$con=mysqli_connect("localhost","root","","bill");
?>
<html>
<head></head>
<body>
<table>
 <tr>
   <th>Item code</th>
   <th>Item Name</th>
   <th>Item Type</th>
   <th>Available</th>
   <th>Expiary Date</th>
 </tr>
 <?php
   $query="select * from item";
   $res=mysqli_query($con,$query);
   while($f=mysqli_fetch_array($res))
   {
   ?>
       <tr>
           <td><?php echo $f["item_code"];?></td>
           <td><?php echo $f["item_name"];?></td>
           <td><?php echo $f["type"];?></td>
           <td><?php echo $f["available"];?></td>
           <td><?php echo $f["expiary_date"];?></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>