   
    <?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
    $uid=htmlentities($_SESSION['email']);
    $content=$_POST['content'];
    $chkcontent=xss_clean($content);
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
    $stmt->bindParam(':content', $chkcontent);
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


function xss_clean($content)
{
        // Fix &entity\n;
        $content = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $content);
        $content = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $content);
        $content = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $content);
        $content = html_entity_decode($content, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $content = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $content);

        // Remove javascript: and vbscript: protocols
        $content = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $content);
        $content = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $content);
        $content = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $content);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $content = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $content);
        $content = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $content);
        $content = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $content);

        // Remove namespaced elements (we do not need them)
        $content = preg_replace('#</*\w+:\w[^>]*+>#i', '', $content);

        do
        {
                // Remove really unwanted tags
                $old_data = $content;
                $content = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $content);
        }
        while ($old_data !== $content);

        // we are done...
        return $content;
}
    ?>
    