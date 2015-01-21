<?php 
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$bid=$_POST['bid'];
require_once "../../config/database.php";
$stmt = $conn->prepare("delete from recommend where u_id=:userid and b_id=:bid");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
echo '<a onclick=click_recommend("'.$pid.'","'.$bid.'","'.$uid.'")>approve</a>';
?>