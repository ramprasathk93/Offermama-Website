<?php $cat=$_REQUEST['cat'];?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
try{
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if(!strcmp($cat,"home")){
           echo '<div class="mini_taskbar"><div class="o_recent">Recent</div><div class="o_top">Top</div></div>';
           foreach($conn->query("select * from post_b order by time desc") as $row){
	       echo '<div class="offer" id="'.$row['post_id'].'" onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
	
           }
    }
    else if(!strcmp($cat,"restaurants")){
        echo '<div class="mini_taskbar"><div class="res_recent" onclick=click_res_recent()>Recent</div><div class="res_top" onclick=click_res_top()>Top</div></div>';
        foreach($conn->query("select * from post_b where category='restaurants' order by time desc") as $row){
		echo '<div class="offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
	
    }
    }
    else if(!strcmp($cat,"books")){
    echo '<div class="mini_taskbar"><div class="books_recent" onclick=click_books_recent()>Recent</div><div class="books_top" onclick=click_books_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='books' order by time desc") as $row){
		echo '<div class="offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
	
    }
    }
    else if(!strcmp($cat,"transport")){
    echo '<div class="mini_taskbar"><div class="trans_recent" onclick=click_trans_recent()>Recent</div><div class="trans_top" onclick=click_trans_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='transport' order by time desc") as $row){
		echo '<div class="offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
	
    }
    }
    else if(!strcmp($cat,"pg")){
    echo '<div class="mini_taskbar"><div class="pg_recent" onclick=click_pg_recent()>Recent</div><div class="pg_top" onclick=click_pg_top()>Top</div></div>';
    foreach($conn->query("select * from post_b where category='pg' order by time desc") as $row){
		echo '<div class="offer" id="'.$row['post_id'].'"  onclick=click_offer("'.$row['post_id'].'")>'.$row['content'].'</div>';
	
    }
    }
    


      
	
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>