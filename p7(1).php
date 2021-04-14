<?php
$con=mysqli_connect("localhost","root","","bill");
?>
<html>
<head></head>
<body>
  <form action="#" method=POST>
        <label>Item Name :</label> <input type="text" name="item"><br>
        <label>Item Type :</label> <input type="text" name="type"><br>
        <label>Available :</label> <input type="text" name="avail"><br>
        <label>Expiary Date :</label> <input type="date" name="exdate"><br>
        <input class="btn roberto-btn mt-15" type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
    include("connection.php");
    $item=$_POST["item"];
    $type=$_POST["type"];
    $ava=$_POST["avail"];
    $date=$_POST["exdate"];

    $query="insert into item(item_name,type,available,expiary_date)values('$item','$type','$ava','$date')";
    mysqli_query($con,$query);
    echo "<script>alert('Successfully inserted');</script>";
}
?>