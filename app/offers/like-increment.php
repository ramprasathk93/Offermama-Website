<?php
$pid=$_POST['pid'];
$uid=$_POST['uid'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
require_once "../../config/database.php";
$already_exist=0;

if(!strcmp($_SESSION['email'],$uid)){
foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
}
foreach($conn->query('select * from likes where post_id="'.$pid.'" and u_id="'.$uid.'"') as $k){
        $already_exist=1;
}
if($already_exist == 0){
$likes=$likes+1;
$stmt = $conn->prepare("update post_b set likes_count=:l where post_id=:pid");
$stmt->bindParam(':l',$likes);
$stmt->bindParam(':pid',$pid);
$stmt->execute();
}
echo $likes.' likes';
}
else{
    foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
        echo $likes.' likes';
    }

}
?>