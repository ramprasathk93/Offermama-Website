<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$bid=$_POST['bid'];
require_once "../../config/database.php";
if(!strcmp($_SESSION['email'],$uid)){
    foreach($conn->query('select * from business_info where b_id="'.$bid.'"') as $k){
    $likes=$k['unrecommend'];
}
    try{
$stmt = $conn->prepare("INSERT INTO unrecommend(u_id,b_id) VALUES (:userid,:bid)");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
$likes=$likes+1;
$stmt = $conn->prepare("update business_info set unrecommend=:l where b_id=:bid");
$stmt->bindParam(':l',$likes);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
echo '<a onclick=click_unrecommended("'.$pid.'","'.$bid.'","'.$uid.'")>disapproved</a>';
    }
    catch(exception $e){
        echo '<a onclick=click_unrecommended("'.$pid.'","'.$bid.'","'.$uid.'")>disapproved</a>';
    }
}
else{
    echo '<a onclick=click_unrecommend("'.$pid.'","'.$bid.'","'.$uid.'")>disapprov</a>';
}
?>