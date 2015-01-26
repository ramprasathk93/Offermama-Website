<?php
require_once "../../config/database.php";
$year=$_POST['year'];
if($year==0){
    $str='No results in general category, try others';
    foreach($conn->query("select * from postuser where target='all'") as $row){
        
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
    $str='No results in second year category, try others';
    foreach($conn->query("select * from postuser where target='secondyr'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}
else if($year==3){
    $str='No results in third year category, try others';
    foreach($conn->query("select * from postuser where target='thirdyr'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}
else if($year==4){
    $str='No results in fourth year category, try others';
    foreach($conn->query("select * from postuser where target='fourthyr'") as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['userid'].'"')as $k){
            include 'poffer-template.php';
        }
        $str='';
    }   
    echo $str;
}
?>