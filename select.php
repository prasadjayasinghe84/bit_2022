<?php

$link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
mysqli_select_db($link, 'bit_project')or die("No DB found");

$query="SELECT `id`, `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`, `cus_mar` FROM `customers`";

$result=mysqli_query($link, $query);

$records=array();

while ($row=mysqli_fetch_assoc($result)) {
    
    $records[]=$row;

}
//var_dump($records);


mysqli_free_result($result);

mysqli_close($link);

echo json_encode($records); 










