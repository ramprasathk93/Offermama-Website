<?php
require_once '../../config/database.php';
$pid=$_POST['pid'];
foreach($conn->query('select * from postuser where postid="'.$pid.'"')as $row){
    echo '<img src="uploads/'.$row['imgname'].'">';
}
?>