<?php



require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();

if(filter_input(INPUT_POST,'action')==='save'){
    $stu_fname = filter_input(INPUT_POST,'stu_fname');
    $stu_lname = filter_input(INPUT_POST,'stu_lname');
    $stu_email = filter_input(INPUT_POST,'stu_email');

    $que="INSERT INTO `students`( `stu_fname`, `stu_lname`, `stu_email`) VALUES ('$stu_fname','$stu_lname','$stu_email')";

   

    $result=mysqli_query($link, $que);
    
    $last_id=mysqli_insert_id($link);
   // mysqli_error


    mysqli_close($link);
    echo json_encode(array(array('msg'=>$result,'last_id'=> $last_id)));

}