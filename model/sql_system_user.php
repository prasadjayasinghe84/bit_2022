<?php

require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();

if(filter_input(INPUT_POST,'action')==='insert'){

    $first_name=filter_input(INPUT_POST,'sys_user_name');
    $user_name=filter_input(INPUT_POST,'sys_user_mail');
    $user_pass=filter_input(INPUT_POST,'sys_user_pass');
    $user_pass_enc=hash('whirlpool',$user_pass);
    $user_level=filter_input(INPUT_POST,'sys_user_level');
    $statues=1;
    $que="INSERT INTO `system_user`( `first_name`, `user_name`, `user_pass`, `user_level`, `statues`) VALUES   ('".$first_name."','".$user_name."','".$user_pass_enc."',".$user_level.",".$statues.")";

    $result=mysqli_query($link, $que);

    if($result){
        echo json_encode(array(array('msg'=>$result)));
    }else{
        echo json_encode(array(array('msg'=>$result,'error'=>mysqli_error($link))));
    }

    mysqli_close($link);
    
}elseif(filter_input(INPUT_POST,'action')==='select'){

    $query="SELECT `id`, `first_name`, `user_name`, `user_level`, `statues` FROM `system_user`";
    $result=mysqli_query($link, $query);
    
    $records=array();
    
    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;
    
    }
    //var_dump($records);
    
    
    mysqli_free_result($result);
    
    mysqli_close($link);
    
    echo json_encode($records); 

}elseif(filter_input(INPUT_POST,'action')==='inactive_user'){
    $id=filter_input(INPUT_POST,'id');
    $query="UPDATE `system_user` SET `statues`=0  WHERE `id`=".$id;
    $result=mysqli_query($link, $query);
    if( $result){
        echo json_encode(array(array('msg'=>'Change the statues')));
    }
 
    mysqli_close($link);

}elseif(filter_input(INPUT_POST,'action')==='active_user'){
    $id=filter_input(INPUT_POST,'id');
    $query="UPDATE `system_user` SET `statues`=1  WHERE `id`=".$id;
    $result=mysqli_query($link, $query);
    if($result){
        echo json_encode(array(array('msg'=>'Change the statues')));
    }
   
    mysqli_close($link);

}elseif(filter_input(INPUT_POST,'action')==='delete'){
    $id=filter_input(INPUT_POST,'id');
    $query="DELETE FROM `system_user` WHERE `id`=".$id;
    $result=mysqli_query($link, $query);
    if($result){
        echo json_encode(array(array('msg'=>'Remove user')));
    }
   
    mysqli_close($link);


}


