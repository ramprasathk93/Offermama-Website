<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$already_exist=0;
require_once "../../config/database.php";
if(!strcmp($_SESSION['email'],$uid)){
    foreach($conn->query('select * from likes where post_id="'.$pid.'" and u_id="'.$uid.'"') as $k){
        $already_exist=1;
    }
if($already_exist==0){
$stmt = $conn->prepare("INSERT INTO likes(u_id,post_id) VALUES (:userid,:postid)");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':postid',$pid);
$stmt->execute();
}
echo '<a onclick=click_unlike("'.$pid.'","'.$uid.'")>Unlike</a>';
}
else{
    echo '<a onclick=click_like("'.$pid.'","'.$uid.'")>Like</a>';
}
?>