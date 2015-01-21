<?php 
$uid=$_POST['uid'];
$pid=$_POST['pid'];
require_once "../../config/database.php";
$stmt = $conn->prepare("delete from likes where u_id= :userid and post_id=:postid");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':postid',$pid);
$stmt->execute();
echo '<a onclick=click_like("'.$pid.'","'.$uid.'")>Like</a>';
?>