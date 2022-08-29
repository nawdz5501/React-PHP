<?php
    include_once('../../config/cors.php');
    include_once('../../core/database.php');
    include_once('../../models/user.php');
    $db= new Database();
    $conn=$db->connect();
    $user= new User($conn);
    $_POST = json_decode(array_keys($_POST)[0], true);
    $user->user_name = $_POST['user_name'];
    $user->password = md5($_POST['password']);
    $login=$user->login();
    $check=$login->rowCount();
    if($check>0){
        $row=$login->fetch(PDO::FETCH_ASSOC);
        extract($row);
        $login_arr=array(
            "status" => true,
            "message" => "Login successfully!AAAA",
            "id"=>$user_id,
            "name"=>$user_name,
            "email"=>$user_email
        );  
    }else{
            $login_arr=array(
                "status" => false,
                "message" => "Login failed",
                "error"=>"Wrong email or password!"
            );
        }
    print_r(json_encode($login_arr));