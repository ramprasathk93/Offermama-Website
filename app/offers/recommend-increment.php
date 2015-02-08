<?php
$bid=$_POST['bid'];
require_once "../../config/database.php";
foreach($conn->query('select * from business_info where b_id="'.$bid.'"') as $k){
    $likes=$k['recommend'];
}
$likes=$likes+1;
$stmt = $conn->prepare("update business_info set recommend=:l where b_id=:bid");
$stmt->bindParam(':l',$likes);
$stmt->bindParam(':bid',$bid);
$stmt->execute();
echo $likes;
?>