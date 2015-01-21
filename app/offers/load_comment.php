<?php
$bid=$_POST['bid'];
$u_id=$_POST['uid'];
?>
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