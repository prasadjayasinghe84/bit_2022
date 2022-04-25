<?php

//$link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
//mysqli_select_db($link, 'bit_project')or die("No DB found");

require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();

if(filter_input(INPUT_POST,'action')==='save'){
    $stu_fname = filter_input(INPUT_POST,'stu_fname');
    $stu_lname = filter_input(INPUT_POST,'stu_lname');
    $stu_email = filter_input(INPUT_POST,'stu_email');

    $que="INSERT INTO `students`( `stu_fname`, `stu_lname`, `stu_email`) VALUES ('$stu_fname','$stu_lname','$stu_email')";

   

    $result=mysqli_query($link, $que);
    $id=mysqli_insert_id($link);


    mysqli_close($link);
    echo json_encode(array(array('msg'=>$id)));

}


