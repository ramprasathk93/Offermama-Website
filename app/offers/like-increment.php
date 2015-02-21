<?php
$pid=$_POST['pid'];
$uid=$_POST['uid'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
require_once "../../config/database.php";

foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $k){
    $likes=$k['likes_count'];
}

echo $likes.' likes';
?>