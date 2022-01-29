<?php



require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();

$query="SELECT `gnd_id`, `gnd_code`, `dsd_name`, `gnd_name`, `climate_zone`, `dsd_ids` FROM `gn_division`";
    $result=mysqli_query($link, $query);

    $records=array();

    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;

    }
    //var_dump($records);


    mysqli_free_result($result);

    mysqli_close($link);

    echo json_encode($records); 