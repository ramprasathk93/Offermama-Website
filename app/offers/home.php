<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Offer Mama</title>
<style type="text/css">
body{
	background-color:#E9EAED;
}
.taskbar{
	height:70;
	background-color:#8ec1da;
	border-radius:15;
}
.tlog{
	float:right;
	text-align:center;
	padding:20;
	padding-bottom:30;
	border-radius:15;
}
.tlog:hover{
	cursor:hand;
	background-color:#4da7d1;
	
}
.treg{
	float:right;
	text-align:center;
	padding:20;
	padding-bottom:30;
	border-radius:15;
}
.treg:hover{
	cursor:hand;
	background-color:#4da7d1;
}
.maincategory{
	margin-top:20;
	float:left;
	width:14.5%;
	margin-left:4.5%;
	background-color:#cbe5f2;
	border-radius:15;
	
}
.category:Hover{
	text-align:center;
	background-color:#b5d6e5;
	cursor:hand;
	padding:10;
	border-radius:15;
}
.category{
	text-align:center;
	background-color:#cbe5f2;
	padding:10;
	border-radius:15;
}
.wall{
	margin-top:20;
	float:left;
	margin-left:2.1%;
	width:43%;
	height:500;
	background-color:WHITE;
	border-radius:15;
}
.p2p{
	margin-top:20;
	float:left;
	margin-left:2.1%;
	width:29%;
	height:500;
	background-color:WHITE;
	border-radius:15;
}
.offer{
	padding-top:40;
	padding-bottom:40;
	text-align:center;
	background-color:white;
	border-bottom:medium #e5f3f9;
	border-bottom-style:solid;
}
.offer:hover{
	cursor:hand;
	background-color:#e5f3f9;
}
</style>
</head>

<body>
<div class="taskbar">
<div class="tlog">Log In</div>
<div class="treg">Register</div>
</div>

<div class="maincategory">
<div class="category">Restaurants</div>
<div class="category">Books</div>
<div class="category">Cabs & Tours</div>
<div class="category">PG/Rentals</div>
<div class="category">P2P</div>
</div>
<div class="wall"><br/>
<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	foreach($conn->query("select content,likes_count from post_b") as $row){
		print "<div class=\"offer\">".$row['content']. "<br/>";
		print "</div>";
		
	}
	
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
</div>
<div class="p2p">Peer to Peer
</div>
</body>
</html>