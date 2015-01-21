<?php 
$uid=$_POST['uid'];
$pid=$_POST['pid'];
require_once "../../config/database.php";
$stmt = $conn->prepare("INSERT INTO likes(u_id,post_id) VALUES (:userid,:postid)");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':postid',$pid);
$stmt->execute();
echo '<a onclick=click_unlike("'.$pid.'","'.$uid.'")>Unlike</a>';
?>