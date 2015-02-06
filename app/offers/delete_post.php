<?php
$pid=$_POST['pid'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true){ 
$uid=htmlentities($_SESSION['email']);
}
else {
    $uid='unknown';
}
require_once '../../config/database.php';
if(unlink('uploads/'.$pid)){
$stmt=$conn->prepare('delete from postuser where postid=:pid');
$stmt->bindParam(':pid',$pid);
$stmt->execute();
foreach($conn->query('select * from postuser where userid="'.$uid.'"')as $row){
    echo '<div class="panel offer" id="'.$row['postid'].'" onclick=click_poffer("'.$row['postid'].'")>
                <div class="row">
                    <div class="small-8 small-uncentered columns">
                    <font style="font-size:14px;">'.$row['content'].'</font>
                    </div>
                    <div class="small-2 columns" style="text-align:center;">
                        <div><strike><font style="font-size:14px;">Rs.'.$row['mrp'].'</font></strike></div>
                        <div class="row">
                            <font style="color:#CC0000;font-size:16px;">Rs.'.$row['sp'].'</font>
                        </div>
                        <div class="row">
                            <font style="font-size:10px;">(Selling Price)</font>
                        </div>
                    </div>
                <a onclick=click_delete("'.$row['postid'].'")>Delete Post</a>
                </div>
                </div>
                ';   
}
}
?>