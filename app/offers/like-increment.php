<?php
$pid=$_POST['pid'];
$uid=$_POST['uid'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
require_once "../../config/database.php";
if(!strcmp($_SESSION['email'],$uid)){
foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
}
$likes=$likes+1;
$stmt = $conn->prepare("update post_b set likes_count=:l where post_id=:pid");
$stmt->bindParam(':l',$likes);
$stmt->bindParam(':pid',$pid);
$stmt->execute();
echo $likes.' likes';
}
else{
    foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
        echo $likes.' likes';
    }

}
?>