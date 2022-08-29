<?php
include_once('../../config/cors.php');
include_once('../../core/database.php');
include_once('../../models/post.php');
$db= new Database();
$conn=$db->connect();
$post= new Post($conn);
$read=$post->getAllPosts();
$check=$read->rowCount();
if($check>0){
    $post_arr=[];
    $post_arr['data']=[];
    while($row=$read->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item=array(
            'id'=>$post_id,
            'title'=>$title,
            'tag'=>$tag,
            'image_url'=>$image_url,
            'body'=>$body,
            'created'=>$created_at
        );
        array_push($post_arr['data'],$post_item);
    }
    echo json_encode($post_arr);
}
