<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<script src="../../common/js/jquery.min.js"></script>
<html>
<head>
<title>Offer Mama</title>
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
<link rel="stylesheet" type="text/css" href="../../common/css/foundation.css">
<link rel="stylesheet" type="text/css" href="../../common/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../common/css/main.css">
<script src="../../common/js/jquery.min.js"></script>
<script src=functions.js></script>
<script src="../../common/js/foundation/foundation.js"></script>
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
</head>
<body>
<?php if (login_check($mysqli) == true) : ?>
<div class"contain-to-grid fixed">
<nav class="top-bar tb" data-topbar>
<ul class="title-area">
 
<li class="name">
<h1>
<a href="home.php">
Offermama
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
</ul>
<section class="top-bar-section">
 
<ul class="left">
<li class="divider"></li>
<li><a href='user_ad.php'>Sell your stuff</a></li>
<li class="divider"></li>
</ul>
 
<ul class="right">
<li class="divider"></li>
<li><a href="register.php">Register</a></li>
<li class="divider"></li>
<li><a href='includes/logout.php'>Logout</a></li>
</ul>
</section>
</nav>
</div>
<form action="validate.php" method="post" enctype="multipart/form-data">
<div class="row"><div class="small-12 small-centered columns">
<div class="row">

<div class="small-4 small-uncentered columns">    
<label class="field" for="content">Content:</label>
<textarea name="content" id="textarea" rows="4" cols="30%" maxlength="140"></textarea>
</div>
</div>
<div id="textarea_feedback"></div><br>
<div class="row">
    <div class="small-2 columns">
    <label class="field" for="image">Upload a image:</label>
    <input name="fileToUpload" type="file" id="fileToUpload">
    </div>
    <div class="small-2 small-uncentered columns">
        <br/>
        <div class="progress round" id="progress" style="display: none;"></div>
    </div>
</div>
<div class="row">
    <div class="small-3 small-uncentered columns">
        <label class="field" for="target" size="20">Category:</label><br>
        <input type="radio" name="chk" value="abooks" id="group1">Academic Books<br>
        <input type="radio" name="chk" value="firstyr" class="group1">First-year related<br/>
        <input type="radio" name="chk" value="novels" class="group1">Novels<br/>
        <input type="radio" name="chk" value="cycles" class="group1">Cycles<br/>
        <input type="radio" name="chk" value="electronics" class="group1">Electronics<br/>
        <input type="radio" name="chk" value="others" class="group1">Others<br/>
        <!--<input name="upload" type="submit" class="box" id="upload" value="Upload" >-->
        <button class="box" id="submit_btn" onclick=check_empty()>Submit</button>
    </div>
    <div class="small-1 small-uncentered columns">
        <div class="row">
        <label>MRP</label><input type="number" name="mrp" value=0>    
        </div>
        <div class="row">
        <label>SP</label><input type="number" name="sp" value=0>
        </div>
    </div>
</div>
</form>
</div>
</div>
<?php else : ?>
        <p>
            <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
        </p>
        <?php endif; ?>
</body>
</html>    
        

