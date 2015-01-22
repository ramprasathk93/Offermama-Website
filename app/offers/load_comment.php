<?php
$bid=$_POST['bid'];
$u_id=$_POST['uid'];
?>
<html>
<head>
     <script src="../../common/js/jquery.min.js"></script>
<script>
   
    $(document).ready(function() {
    var text_max = 140;
    $('#textarea_feedback').html(text_max + ' character remaining');
    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;
        $('#textarea_feedback').html(text_remaining + ' character remaining');
            });
            });
</script>
</head>
<body>
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
    </body>
</html>