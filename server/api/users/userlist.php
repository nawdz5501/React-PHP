<?php
include_once('../../config/cors.php');
include_once('../../core/database.php');
include_once('../../models/user.php');
$db= new Database();
$conn=$db->connect();
$user= new User($conn);
$read=$user->getAllUsers();
$check=$read->rowCount();
if($check>0){
    $user_arr=[];
    $user_arr['data']=[];
    while($row=$read->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $user_item=array(
            'id'=>$user_id,
            'name'=>$user_name,
            'email'=>$user_email,
            'password'=>md5($user_password)
        );
        array_push($user_arr['data'],$user_item);
    }
    echo json_encode($user_arr);
}


