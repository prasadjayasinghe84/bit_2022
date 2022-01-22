<?php



require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();



if(filter_input(INPUT_POST,'action')==='gn'){
    $id=   filter_input(INPUT_POST,'dsd');
    $query="SELECT `gnd_id`, `gnd_name` FROM `gn_division` WHERE `dsd_ids`=".$id;
    $result=mysqli_query($link, $query);

    $records=array();

    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;

    }
    //var_dump($records);


    mysqli_free_result($result);

    mysqli_close($link);

    echo json_encode($records); 
}elseif(filter_input(INPUT_POST,'action')==='ds_division'){
    $query="SELECT `dsd_id`, `dsd_name` FROM `ds_division` ";
    $result=mysqli_query($link, $query);
    
    $records=array();
    
    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;
    
    }
    //var_dump($records);
    
    
    mysqli_free_result($result);
    
    mysqli_close($link);
    
    echo json_encode($records); 
}