<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
require_once "../../config/database.php";
if(!strcmp($_SESSION['email'],$uid)){
$stmt = $conn->prepare("INSERT INTO likes(u_id,post_id) VALUES (:userid,:postid)");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':postid',$pid);
$stmt->execute();
echo '<a onclick=click_unlike("'.$pid.'","'.$uid.'")>Unlike</a>';
}
else{
    echo '<a onclick=click_like("'.$pid.'","'.$uid.'")>Like</a>';
}
?>