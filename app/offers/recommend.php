<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$bid=$_POST['bid'];
require_once "../../config/database.php";
if(!strcmp($_SESSION['email'],$uid)){
$stmt = $conn->prepare("INSERT INTO recommend(u_id,b_id) VALUES (:userid,:bid)");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
echo '<a onclick=click_recommended("'.$pid.'","'.$bid.'","'.$uid.'")>approved</a>';
}
else{
    
    echo '<a onclick=click_recommend("'.$pid.'","'.$bid.'","'.$uid.'")>approve</a>';

}
?>