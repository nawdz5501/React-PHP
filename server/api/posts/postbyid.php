<?php
include_once('../../config/cors.php');
include_once('../../core/database.php');
include_once('../../models/post.php');
$db= new Database();
$conn=$db->connect();
$post= new Post($conn);
$_POST = json_decode(array_keys($_POST)[0], true);
$read=$post->getPostById($_POST['id']);
$check=$read->rowCount();
if($check>0){
    $post_arr=[];
    while($row=$read->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_arr=array(
            'id'=>$post_id,
            'title'=>$title,
            'tag'=>$tag,
            'image_url'=>$image_url,
            'body'=>$body,
            'created'=>$created_at
        );
        
    }
    echo json_encode($post_arr);
}


