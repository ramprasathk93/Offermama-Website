<?php
    $uid='ram11233';
    $content=$_POST['content'];
    $servername='localhost';
    $username='root';
    $password='root';
    $postid=$_POST['pid'];
//------------------------------------------------------------------------------------------------------------
    //Getting current time

//-------------------------------------------------------------------------------------------------------------
    //Uploading image to server directory
        try {
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("INSERT INTO comment(u_id,post_id,content) VALUES (:userid,:postid,:content)");
    $stmt->bindParam(':userid', $uid);
    $stmt->bindParam(':postid', $postid);
    $stmt->bindParam(':content', $content);
    $stmt->execute();
            echo "Review Submitted";
   }
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    ?>
    