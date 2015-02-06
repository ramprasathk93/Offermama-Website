   
    <?php
    $bid='B123';
    $content=$_POST['content'];
    $checkbox1=$_POST['chk2'];
    $checkbox2=$_POST['chk1'];
    $mrp=$_POST['mrp'];
    $sp=$_POST['sp'];
    $servername='localhost';
    $username='root';
    $password='root';
//------------------------------------------------------------------------------------------------------------
    //Getting current time
$micro_date = microtime();
$date_array = explode(" ",$micro_date);
$date = date("is",$date_array[1]);

//-------------------------------------------------------------------------------------------------------------
    //Uploading image to server directory
    $imgname="B".$date;
    $target_dir = "uploads/";
    $target_file = $target_dir . $imgname;
    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";}
    $file = basename($target_file);
    
    //if(isset($_POST['upload'])){
    try {
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("insert into post_b(post_id,b_id,content,image,category,area,mrp,sp) VALUES (:postid,:bid,:content,:imgname,:category,:area,:mrp,:sp)");
    $stmt->bindParam(':postid', $imgname);
    $stmt->bindParam(':bid',$bid);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':imgname', $file);
    $stmt->bindParam(':category', $checkbox1);
    $stmt->bindParam(':area',$checkbox2);
    $stmt->bindParam(':mrp',$mrp);
    $stmt->bindParam(':sp',$sp);
    $stmt->execute();
            echo "Upload Successful!";
   }
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
//    }
echo '<a href="home.php">Home Page</a>';
    ?>
    