<?php
include_once('../../config/cors.php');
include_once('../../core/database.php');
include_once('../../models/post.php');
$db= new Database();
$conn=$db->connect();
$post= new Post($conn);
$read=$post->getTags();
$check=$read->rowCount();
if($check>0){
    $tag_arr=[];
    while($row=$read->fetch(PDO::FETCH_ASSOC)){
        $tag_item=$row['tag_name'];
        array_push($tag_arr,$tag_item);
    }
    echo json_encode($tag_arr);
}
