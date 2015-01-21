<?php
$pid=$_POST['pid'];
require_once "../../config/database.php";
foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
}
$likes=$likes-1;
$stmt = $conn->prepare("update post_b set likes_count=:l where post_id=:pid");
$stmt->bindParam(':l',$likes);
$stmt->bindParam(':pid',$pid);
$stmt->execute();
echo $likes.' likes';
?>