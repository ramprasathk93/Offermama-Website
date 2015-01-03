<script>
            $(document).ready(function() {
            var text_max = 140;
            $('#textarea_feedback').html(text_max + ' characters remaining');

            $('#textarea').keyup(function() {
            var text_length = $('#textarea').val().length;
            var text_remaining = text_max - text_length;

            $('#textarea_feedback').html(text_remaining + ' characters remaining');
            });
            });
</script>

<style>
.product_image{
    height:250;
    width:100%;
}
#textarea_feedback{
    float:left;
}
#comment_btn{
    float:right;
}
</style>
<?php
$q = $_REQUEST['id'];
$servername = "localhost";
$username = "root";
$password = "root";
try {
    $conn = new PDO("mysql:host=$servername;dbname=offermama", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    foreach($conn->query('select * from post_b where post_id="'.$q.'"') as $row){
        header("Content-type: image/jpeg");
		echo '<div class="product" id="'.$row['post_id'].'"><img class="product_image" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></div>';
        
	
    }
	
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
?>
<form name="usercomment" id="usercomment"  action="validate_comment.php" method="post">
        <label class="field" for="comment">Comment:</label>
        <textarea name="content" id="comment_text" rows="3" cols="50" maxlength="140"></textarea>
        <div>
        <div id="textarea_feedback"></div>
        <input name="comment" type="button" class="box" id="comment_btn" value="comment" >
        <?php echo '<input name="pid" id="pid" type="hidden" value="'.$q.'">';
        ?>
        </div>
</form>
<br/>
<div class="comments">
<?php
try {
    
    foreach($conn->query('select * from comment where post_id="'.$q.'"') as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['u_id'].'"') as $k){
        echo '<div class="panel offer" id="'.$row['post_id'].'"><div class="row">';
        echo '<div class="small-4 small-uncentered columns">'.$k['name'].'</div></div>';
        echo '<div class="row"><div class="small-12 small-uncentered columns">'.$row['content'].'</div></div>';
        echo '<div class="row"><div class="small-2 small-uncentered columns"><img src=#/></div>';
        echo '<div class="small-4 small-uncentered columns">'.$row['likes'].' likes</div></div></div>';
        
    }
	
}
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
</div>