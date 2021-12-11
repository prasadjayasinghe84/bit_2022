<?php


$link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
mysqli_select_db($link, 'bit_project')or die("No DB found");

$cus_name = $_POST['key1'];
$cus_nic = $_POST['key1'];
$cus_dob = $_POST['key1'];
$cus_tel = $_POST['key1'];
$cus_gender = $_POST['key1'];
$cus_mar = $_POST['key1'];
//$query = "INSERT INTO `customers`( `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`) VALUES ('Prasad','842911364V','1984-05-05','0712871307','male')";
$query = "INSERT INTO `customers`( `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`,`cus_mar`) VALUES ('".$cus_name."','".$cus_nic."','".$cus_dob."','".$cus_tel."','".$cus_gender."',$cus_mar)";
//echo $query;

$result=mysqli_query($link, $query);
 echo $result;
