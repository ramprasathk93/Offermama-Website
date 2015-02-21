<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$bid=$_POST['bid'];
$uid=$_POST['uid'];
require_once "../../config/database.php";
foreach($conn->query('select * from business_info where b_id="'.$bid.'"') as $k){
    $likes=$k['recommend'];
}
echo $likes;

?>