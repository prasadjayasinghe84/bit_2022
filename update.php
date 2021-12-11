<?php

$link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
mysqli_select_db($link, 'bit_project')or die("No DB found");

$id = filter_input(INPUT_POST,'cus_id');
$cus_name = filter_input(INPUT_POST,'reg_cus_name');
$cus_nic = filter_input(INPUT_POST,'reg_cus_nic');
$cus_dob = filter_input(INPUT_POST,'reg_cus_dob');
$cus_tel = filter_input(INPUT_POST,'reg_cus_tel');
$cus_gender = filter_input(INPUT_POST,'reg_cus_gender');
$cus_mar = filter_input(INPUT_POST,'reg_cus_mar');

$query="UPDATE `customers` SET `cus_name`='".$cus_name."',`cus_nic`='".$cus_nic."',`cus_dob`='".$cus_dob."',`cus_tel`='".$cus_tel."',`cus_gender`='".$cus_gender."',`cus_mar`=".$cus_mar." WHERE `id`=".$id;
//echo $query;

$result=mysqli_query($link, $query);

mysqli_close($link);


echo json_encode(array(array('msg'=>$result)));

