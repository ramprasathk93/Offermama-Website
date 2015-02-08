<?php
require_once '../../config/database.php';
require_once "../../config/database.php";
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true){ 
$uid=htmlentities($_SESSION['email']);
}
else {
    $uid='unknown';
}
$content=$_POST['content'];
$chkcontent=xss_clean($content);
$bid=$_POST['bid'];
$micro_date = microtime();
$date_array = explode(" ",$micro_date);
$date = date("is",$date_array[1]);
$rid='r'.$date;
$stmt = $conn->prepare("INSERT INTO review(review_id,content,u_id,b_id) VALUES (:rid,:content,:userid,:bid)");
$stmt->bindParam(':userid', $uid);
$stmt->bindParam(':bid', $bid);
$stmt->bindParam(':content', $chkcontent);
$stmt->bindParam(':rid',$rid);
$stmt->execute();
foreach($conn->query('select * from review where b_id="'.$bid.'" order by time desc') as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['u_id'].'"') as $k){
            echo '<div class="panel offer" id="'.$row['review_id'].'">
                        <div class="row">
                            <div class="small-4 small-uncentered columns">
                            <font style="font-weight:bold;">'.$k['name'].'</font>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 small-uncentered columns">
                            <p>'.$row['content'].'</p>
                            </div>
                        </div>
                    </div>';

    }
	
}
function xss_clean($content)
{
        $content = preg_replace("/[<>]/","",$content);
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
    