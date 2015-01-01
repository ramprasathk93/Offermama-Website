<script src=jquery.js></script>
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

<!---Script for counting characters-------------------------------------------------------------------------------->
 <style>
        fieldset{
            width:50%;
        }
        legend{
        font-size:30px;
        }
        label.field{
        text-align: left;
        width: 100%;
        float: left;
        font-weight: bold;
        }
        fieldset p{
        clear: both;
        padding: 5px;
        }
        #textarea_feedback{
        width:100%;
        float:left;
        }
        input.box{
        width:100px;
        float:right;
        
        }
        
 </style>
<!--Aligning all html elements using stylesheets------------------------------------------------------------------------>

<!---Script to check if the content field is empty---------------------------------------------------------------------->
    
        <form name="userpost" id="userpost"  enctype="multipart/form-data"  >
       <fieldset><legend>User Advertisement form</legend>
        <p>
        <label class="field" for="content">Content:</label>
        <textarea name="content" id="textarea" rows="8" cols="30%" maxlength="140"></textarea><br/>
        <div id="textarea_feedback"></div><br>
        <p/>
        <p>
        <label class="field" for="image">Upload a image:</label>
        <input name="fileToUpload" type="file" id="fileToUpload"> <br/>
        <p/>
        <p>
        <label class="field" for="target" size="20">Market Target:</label><br>
        <input type="radio" name="chk" value="all" id="group1">All<br>
        <input type="radio" name="chk" value="firstyr" class="group1">First year Students<br>
        <input type="radio" name="chk" value="secondyr" class="group1">Second year Students<br>
        <input type="radio" name="chk" value="thirdyr" class="group1">Third year Students<br>
        <input type="radio" name="chk" value="fourthyr" class="group1">Final year Students<br>
        <input type="radio" name="chk" value="staff" class="group1">Staff/Others<br>
        <!--<input name="upload" type="submit" class="box" id="upload" value="Upload" >-->
        <button class="box" id="submit_btn" >Submit</button>
        <p/>
            </fieldset>
        </form>
        
