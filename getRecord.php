<?php

 //$link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
 //mysqli_select_db($link, 'bit_project')or die("No DB found");

 require_once './sql/db.php';
 $obj=new DB;
 $link =$obj->link();


$id= filter_input(INPUT_POST, 'key');
$que="SELECT  `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`, `cus_mar` FROM `customers` WHERE `id`=".$id;

$result=mysqli_query($link, $que);

//$row[]=mysqli_fetch_assoc($result);

//var_dump($row);
//echo json_encode($row);

$records=array();

while ($row=mysqli_fetch_assoc($result)) {
    
    $records[]=$row;

}
//var_dump($records);


mysqli_free_result($result);

mysqli_close($link);

echo json_encode($records); 