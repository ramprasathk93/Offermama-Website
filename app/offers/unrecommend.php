<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$bid=$_POST['bid'];
require_once "../../config/database.php";
if(!strcmp($_SESSION['email'],$uid)){
$stmt = $conn->prepare("INSERT INTO unrecommend(u_id,b_id) VALUES (:userid,:bid)");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
echo '<a onclick=click_unrecommended("'.$pid.'","'.$bid.'","'.$uid.'")>disapproved</a>';
}
else{
    echo '<a onclick=click_unrecommend("'.$pid.'","'.$bid.'","'.$uid.'")>disapprov</a>';
}
?>