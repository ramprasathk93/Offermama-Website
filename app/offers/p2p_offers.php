<?php
require_once "../../config/database.php";
$year=$_POST['year'];
if($year==0){
    $str='No results in Academic Books category, try others';
    foreach($conn->query("select * from postuser where target='abooks'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
            
        }
        $str='';
    }
    echo $str;
}
else if($year==1){
    $str='No results in first year category, try others';
    foreach($conn->query("select * from postuser where target='firstyr'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }
    echo $str;
}
else if($year==2){
    $str='No results in novels category, try others';
    foreach($conn->query("select * from postuser where target='novels'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}
else if($year==3){
    $str='No results in cycles category, try others';
    foreach($conn->query("select * from postuser where target='cycles'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}
else if($year==4){
    $str='No results in electronics category, try others';
    foreach($conn->query("select * from postuser where target='electronics'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}
else if($year==5){
    $str='No results in others category, try others';
    foreach($conn->query("select * from postuser where target='others'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}

?>