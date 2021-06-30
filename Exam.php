<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
{
	echo "Connection Unsuccessful";
}
else
{
	$d="CREATE DATABASE hospital";
	if($cc->query($d)==true)
	{
		$cc=mysqli_connect("localhost","root","","hospital");
	}
	$s="CREATE TABLE patient(pname varchar(25) not null,address varchar(25) not null,docname varchar(25) not null,ad_date date,rno bigint)";
	if($cc->query($s))
	{
		echo "Table Created Successfully";
	}

}
$cc->close();
?>