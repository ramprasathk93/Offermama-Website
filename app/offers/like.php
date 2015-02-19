<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
require_once "../../config/database.php";

if(!strcmp($_SESSION['email'],$uid)){
    try{
        foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
}
        $stmt = $conn->prepare("INSERT INTO likes(u_id,post_id) VALUES (:userid,:postid)");
        $stmt->bindParam(':userid',$uid);
        $stmt->bindParam(':postid',$pid);
        $stmt->execute();
        $likes=$likes+1;
        $stmt = $conn->prepare("update post_b set likes_count=:l where post_id=:pid");
    $stmt->bindParam(':l',$likes);
    $stmt->bindParam(':pid',$pid);
    $stmt->execute();
        echo '<a onclick=click_unlike("'.$pid.'","'.$uid.'")>Unlike</a>';
    }
    catch(Exception $e){
        echo '<a onclick=click_unlike("'.$pid.'","'.$uid.'")>Unlike</a>';
    }
}
else{
    echo '<a onclick=click_like("'.$pid.'","'.$uid.'")>Like</a>';
}
?>