<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "root";


try {
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<div class="mini_taskbar"><div class="o_recent">Recent</div><div class="o_top">Top</div></div>';
    foreach($conn->query("select * from postuser") as $row){
		echo '<div class="panel poffer" id="'.$row['postid'].'">'.$row['content'].'</div>';
	
    }
	
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>