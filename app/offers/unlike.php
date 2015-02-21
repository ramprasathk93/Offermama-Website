<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
require_once "../../config/database.php";
$exists=0;

if(!strcmp($_SESSION['email'],$uid)){
    foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
}
    foreach($conn->query('select * from likes where post_id="'.$pid.'" and u_id="'.$uid.'"') as $k){
        $exists=1;
    }   
    if($exists==1){
    $stmt = $conn->prepare("delete from likes where u_id= :userid and post_id=:postid");
    $stmt->bindParam(':userid',$uid);
    $stmt->bindParam(':postid',$pid);
    $stmt->execute();
    $likes=$likes-1;
    $stmt = $conn->prepare("update post_b set likes_count=:l where post_id=:pid");
    $stmt->bindParam(':l',$likes);
    $stmt->bindParam(':pid',$pid);
    $stmt->execute();
    echo '<a onclick=click_like("'.$pid.'","'.$uid.'")>Like</a>';
    }
    else{
        echo '<a onclick=click_like("'.$pid.'","'.$uid.'")>Like</a>';
    }
}

else{
    echo '<a onclick=click_unlike("'.$pid.'","'.$uid.'")>Unlike</a>';
}
?>