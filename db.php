<?php

$link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
mysqli_select_db($link, 'bit_project')or die("No DB found");

$cus_name = filter_input(INPUT_POST,'reg_cus_name');
$cus_nic = filter_input(INPUT_POST,'reg_cus_nic');
$cus_dob = filter_input(INPUT_POST,'reg_cus_dob');
$cus_tel = filter_input(INPUT_POST,'reg_cus_tel');
$cus_gender = filter_input(INPUT_POST,'reg_cus_gender');
$cus_mar = filter_input(INPUT_POST,'reg_cus_mar');
//$query = "INSERT INTO `customers`( `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`) VALUES ('Prasad','842911364V','1984-05-05','0712871307','male')";
$query = "INSERT INTO `customers`( `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`,`cus_mar`) VALUES ('".$cus_name."','".$cus_nic."','".$cus_dob."','".$cus_tel."','".$cus_gender."',$cus_mar)";
//echo $query;

$result=mysqli_query($link, $query);
mysqli_close($link);
 
 echo $result;

