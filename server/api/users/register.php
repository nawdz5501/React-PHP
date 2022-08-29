<?php
    include_once('../../config/cors.php');
    include_once('../../core/database.php');
    include_once('../../models/user.php');
    $db= new Database();
    $conn=$db->connect();
    $user= new User($conn);
    $_POST = json_decode(array_keys($_POST)[0], true);
    $user->user_name = $_POST['user_name'];
    $user->email = $_POST['email'];
    $user->password = md5($_POST['password']);
    if($user->register()){
        $user_arr=array(
            "status" => true,
            "message" => "Successfully Signup!",
            "name" => $user->user_name
        );
    }else{
            $user_arr=array(
                "status" => false,
                "message" => "Username already exists!"
            );
        }
    
    print_r(json_encode($user_arr));