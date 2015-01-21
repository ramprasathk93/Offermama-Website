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
require_once "../../config/database.php";
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true){ 
$u_id=htmlentities($_SESSION['email']);
}
else {
    $u_id='unknown';
}
$pid = $_POST['id'];
$bid= $_POST['bid'];

require_once "../../config/database.php";

    foreach($conn->query('select * from post_b where post_id="'.$pid.'"') as $row){
		echo '<div class="product" id="'.$row['post_id'].'"><img class="product_image" src="uploads/'.$row['image'].'"/></div>';
        
    }
?>
<div id="enter-comment">
<form name="usercomment" id="usercomment">
        <label class="field" for="comment">Comment:</label>
        <textarea name="content" id="comment_text" rows="3" cols="50" maxlength="140"></textarea>
        <div>
        <div id="textarea_feedback"></div>
        <input type="button" class="box" value="Review" onclick=click_review("<?php echo $bid?>","<?php echo $u_id?>")>
        <?php echo '<input name="bid" id="bid" type="hidden" value="'.$bid.'">';
        ?>
        </div>
</form>
</div>
<br/>
<div class="comments">
<?php
foreach($conn->query('select * from review where b_id="'.$bid.'" order by time desc') as $row){
        foreach($conn->query('select * from user_info where u_id="'.$row['u_id'].'"') as $k){
            echo '<div class="panel offer" id="'.$row['review_id'].'">
                        <div class="row">
                            <div class="small-4 small-uncentered columns">
                            <h6>'.$k['name'].'</h6>
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
?>
</div>