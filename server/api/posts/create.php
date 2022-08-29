<?php
    include_once('../../config/cors.php');
    include_once('../../core/database.php');
    include_once('../../models/post.php');
    $db= new Database();
    $conn=$db->connect();
    $post= new Post($conn);
    $_POST = json_decode(array_keys($_POST)[0], true);
    print_r($_POST);
    $post->title=$_POST['title'];
    $post->image_url=$_POST['image_url'];
    $post->body=$_POST['body'];
    $post->post_tag=$_POST['tag'];
    if($post->createPost()){
        $post_arr=array(
            "status" => true,
            "message" => "Successfully Create ",
            "name" => $post->title
        );
        }else{
            $post_arr=array(
                "status" => false,
                "message" => "Fail to create post"
            );
        }
    echo json_encode($post_arr);

