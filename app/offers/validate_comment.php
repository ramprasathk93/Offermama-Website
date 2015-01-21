<?php
require_once '../../config/database.php';
require_once "../../config/database.php";
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true){ 
$uid=htmlentities($_SESSION['email']);
}
else {
    $uid='unknown';
}
$content=$_POST['content'];
$bid=$_POST['bid'];
$micro_date = microtime();
$date_array = explode(" ",$micro_date);
$date = date("is",$date_array[1]);
$rid='r'.$date;
$stmt = $conn->prepare("INSERT INTO review(review_id,content,u_id,b_id) VALUES (:rid,:content,:userid,:bid)");
$stmt->bindParam(':userid', $uid);
$stmt->bindParam(':bid', $bid);
$stmt->bindParam(':content', $content);
$stmt->bindParam(':rid',$rid);
$stmt->execute();
foreach($conn->query('select * from review where b_id="'.$bid.'" order by time desc') as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['u_id'].'"') as $k){
            echo '<div class="panel offer" id="'.$row['review_id'].'">
                        <div class="row">
                            <div class="small-4 small-uncentered columns">
                            <h6>'.$k['name'].'</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 small-uncentered columns">
                            <p>'.$row['content'].'</p>
                            </div>
                        </div>
                    </div>';

    }
	
}
?>
    