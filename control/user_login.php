<?php
session_start();
require_once '../sql/db.php';

$obj=new DB;
$link =$obj->link();
if(filter_input(INPUT_POST,'user')==='login'){
$user=filter_input(INPUT_POST,'user_name');
$password=filter_input(INPUT_POST,'password');

$query="SELECT `id`, `first_name`, `user_name`, `user_pass`, `user_level`, `statues` FROM `system_user` WHERE `user_name`='".$user."'";
$user_pass_enc=hash('whirlpool',$password);

$result=mysqli_query($link, $query);

   
    $records=array();
    
    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;
    
    }
   // var_dump($records);

   if(empty($records )){
      echo json_encode(array(array('msg'=>'No user found')));

   }else{
      foreach($records as $user){

         ///echo $user['user_pass'];
           if($user_pass_enc===$user['user_pass']){
               if($user['statues']==='1'){

                  $_SESSION['user_id']=$user['id'];
                  $_SESSION['reg_name']=$user['first_name'];
                  $_SESSION['level']=$user['user_level'];
                  $_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
                  $_SESSION['server_ip']=$_SERVER['REMOTE_ADDR'];

                  
                  //echo json_encode(array(array('msg'=>'1')));
                  if($user['user_level']==='1'){
                     echo json_encode(array(array('msg'=>'1','level'=>'1')));
                  }elseif($user['user_level']==='2'){
                     echo json_encode(array(array('msg'=>'1','level'=>'2')));
                  }elseif($user['user_level']==='3'){
                     echo json_encode(array(array('msg'=>'1','level'=>'3')));

                  }  

               }else{
                  echo json_encode(array(array('msg'=>'account has been deactivated')));
               }



              
           }else{
              //echo('password incorrect');
              echo json_encode(array(array('msg'=>'password incorrect')));
           }
  
  
      }


   }
    
    mysqli_free_result($result);
    
    mysqli_close($link);
    
    //echo json_encode($records); 

}

    if(filter_input(INPUT_POST,'user')==='logout'){
      unset($_SESSION['user_id']);
      unset($_SESSION['reg_name']);
      unset($_SESSION['level']);
      unset($_SESSION['agent']);
      unset($_SESSION['server_ip']);
      echo json_encode('ok');
    }