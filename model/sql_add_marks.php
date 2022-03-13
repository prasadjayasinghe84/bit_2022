<?php

require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();


$array=(array)$_POST['table'];

//var_dump($array);
$query="INSERT INTO `stu_markes`( `stu_id`, `stu_name`, `stu_markes`)
 VALUES ";

 foreach($array as $items){
     $value= array_values($items);
     $value= "'".implode("','",$value)."'";
     $query=$query."(".$value."),";


 }
 $query=rtrim( $query,",");

 $result=mysqli_query($link, $query);



    mysqli_close($link);
    echo json_encode(array(array('msg'=>$result)));


