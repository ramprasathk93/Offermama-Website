<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$bid=$_POST['bid'];
require_once "../../config/database.php";
$exists=0;

foreach($conn->query('select * from business_info where b_id="'.$bid.'"') as $k){
    $likes=$k['unrecommend'];
}

if(!strcmp($_SESSION['email'],$uid)){
    foreach($conn->query('select * from unrecommend where u_id="'.$uid.'" and b_id="'.$bid.'"') as $k){
        $exists=1;
    }
if( $exists == 1 ){
$stmt = $conn->prepare("delete from unrecommend where u_id=:userid and b_id=:bid");
$stmt->bindParam(':userid',$uid);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
$likes=$likes-1;
$stmt = $conn->prepare("update business_info set unrecommend=:l where b_id=:bid");
$stmt->bindParam(':l',$likes);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
}
    echo '<a onclick=click_unrecommend("'.$pid.'","'.$bid.'","'.$uid.'")>disapprove</a>';

}
else{
    echo '<a onclick=click_unrecommended("'.$pid.'","'.$bid.'","'.$uid.'")>disapproved</a>';
}
?>