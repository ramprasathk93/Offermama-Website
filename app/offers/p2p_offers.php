<?php
require_once "../../config/database.php";
$year=$_POST['year'];
if($year==0){
    foreach($conn->query("select * from postuser where target='all'") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
	
    }    
}
else if($year==1){
    foreach($conn->query("select * from postuser where target='firstyr'") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
	
    }
}
else if($year==2){
    foreach($conn->query("select * from postuser where target='secondyr'") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
	
    }   
}
else if($year==3){
    foreach($conn->query("select * from postuser where target='thirdyr'") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
	
    }   
}
else if($year==4){
    foreach($conn->query("select * from postuser where target='fourthyr'") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
	
    }   
}
?>