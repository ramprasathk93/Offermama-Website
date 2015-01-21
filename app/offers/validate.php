   
    <?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
    $uid=htmlentities($_SESSION['email']);
    $content=$_POST['content'];
    $checkbox1=$_POST['chk'];
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
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";}
    $file = basename($target_file);
    $imgname="pu".$date;
    //if(isset($_POST['upload'])){
    try {
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("insert into postuser(userid,postid,content,imgname,target,mrp,sp) VALUES (:userid,:postid,:content,:imgname,:target,:mrp,:sp)");
   $stmt->bindParam(':userid', $uid);
    $stmt->bindParam(':postid', $imgname);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':imgname', $file);
    $stmt->bindParam(':target', $checkbox1);
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
    