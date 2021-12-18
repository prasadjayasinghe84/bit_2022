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

    $que="INSERT INTO `student`( `stu_fname`, `stu_lname`, `stu_email`) VALUES ('$stu_fname','$stu_lname','$stu_email')";

    echo $que;

    $result=mysqli_query($link, $que);



    mysqli_close($link);

}elseif(filter_input(INPUT_POST,'action')==='select'){
    $query="SELECT `id`, `stu_fname`, `stu_lname`, `stu_email` FROM `student`";
    $result=mysqli_query($link, $query);
    
    $records=array();
    
    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;
    
    }
    //var_dump($records);
    
    
    mysqli_free_result($result);
    
    mysqli_close($link);
    
    echo json_encode($records); 
}elseif(filter_input(INPUT_POST,'action')==='select_by_id'){

    $key=filter_input(INPUT_POST,'key');
    $query="SELECT `id`, `stu_fname`, `stu_lname`, `stu_email` FROM `student` WHERE id=".$key;
    $result=mysqli_query($link, $query);
    
    $records=array();
    
    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;
    
    }
    //var_dump($records);
    
    
    mysqli_free_result($result);
    
    mysqli_close($link);
    
    echo json_encode($records); 



}elseif(filter_input(INPUT_POST,'action')==='update'){
    echo 'ww';
    $stu_id = filter_input(INPUT_POST,'stu_id');
    $stu_fname = filter_input(INPUT_POST,'stu_fname');
    $stu_lname = filter_input(INPUT_POST,'stu_lname');
    $stu_email = filter_input(INPUT_POST,'stu_email');
    
    $query="UPDATE `students` SET `stu_fname`= '".$stu_fname."',`stu_lname`='".$stu_lname."',`stu_email`='".$stu_email."' WHERE `id`=".$stu_id ;
    echo $query;
    
    $result=mysqli_query($link, $query);
    
   mysqli_close($link);
    
    
   echo json_encode(array(array('msg'=>$result)));






}


